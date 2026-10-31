<?php

class PageLoader
{
    private string $pagesDirectory;
    private string $defaultPage;
    private string $errorPage;
    private ?string $layoutPath;

    /**
     * @param string $pagesDirectory Path to views/pages folder
     * @param string $defaultPage   Fallback for root URL (e.g., 'home')
     * @param string $errorPage     View file to load on missing page
     * @param string|null $layoutPath Optional master template/layout file
     */
    public function __construct(
        string $pagesDirectory,
        string $defaultPage = 'home',
        string $errorPage = '404',
        ?string $layoutPath = null
    ) {
        $this->pagesDirectory = realpath($pagesDirectory) ?: throw new InvalidArgumentException("Pages directory not found: {$pagesDirectory}");
        $this->defaultPage = $defaultPage;
        $this->errorPage = $errorPage;
        $this->layoutPath = $layoutPath ? realpath($layoutPath) : null;
    }

    /**
     * Resolve and render a page by name.
     *
     * @param string|null $page Requested page slug
     * @param array $data Variables to pass to the view
     */
    public function render(?string $page = null, array $data = []): void
    {
        $pageSlug = empty($page) ? $this->defaultPage : $page;
        $filePath = $this->resolvePath($pageSlug);

        // Fall back to 404 view if file does not exist
        if (!$filePath) {
            http_response_code(404);
            $filePath = $this->resolvePath($this->errorPage);

            if (!$filePath) {
                echo "<h1>404 - Page Not Found</h1>";
                return;
            }
        }

        // Extract variables into local scope for the view
        extract($data, EXTR_SKIP);

        // Capture page output into buffer
        ob_start();
        include $filePath;
        $pageContent = ob_get_clean();

        // Wrap inside layout if defined, otherwise echo directly
        if ($this->layoutPath && file_exists($this->layoutPath)) {
            include $this->layoutPath;
        } else {
            echo $pageContent;
        }
    }

    /**
     * Sanitizes and verifies path safety against directory traversal.
     */
    private function resolvePath(string $slug): ?string
    {
        // Strip out null bytes and replace dots/slashes that could traverse
        $cleanSlug = trim($slug, "/\\");
        $targetFile = $this->pagesDirectory . DIRECTORY_SEPARATOR . $cleanSlug . '.php';

        $resolved = realpath($targetFile);

        // Ensure the file exists and is strictly inside the allowed pages directory
        if ($resolved && str_starts_with($resolved, $this->pagesDirectory)) {
            return $resolved;
        }

        return null;
    }
}
