<?php
require_once __DIR__ . '/../classes/PageLoader.php';

$loader = new PageLoader(
    pagesDirectory: __DIR__ . '/../views/pages',
    defaultPage: 'home',
    errorPage: '404',
    layoutPath: __DIR__ . '/../views/main.php'
);

// Grab page query param: e.g. index.php?page=about
$currentPage = $_GET['page'] ?? null;

$loader->render($currentPage, [
    'siteName' => 'PHP Project Boilerplate',
    'pageTitle' => ucfirst($currentPage ?: 'Home'),
]);