<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= ucfirst($siteName) ?> | <?= ucfirst($pageTitle) ?></title>

  <!-- SEO Meta Tags 
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="robots" content="index, follow">
  -->

  <!-- Canonical Tag (Prevents duplicate content issues) 
  <link rel="canonical" href="https://www..com">
  -->

  <!-- Favicon 
  <link rel="icon" type="image/x-icon" href="/.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/.png">
  -->

  <!-- Open Graph / Facebook Meta Tags
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www..com">
  <meta property="og:title" content=" | ">
  <meta property="og:description" content="">
  <meta property="og:image" content="https://www.yourwebsite.com/images/social-share-image.jpg">
  <meta property="og:site_name" content="">
  -->

  <!-- Twitter Card Meta Tags
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://www..com">
  <meta name="twitter:title" content=" | ">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  <meta name="twitter:site" content="">
  -->


  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom CSS (Optional) -->
  <link rel="stylesheet" href="/../../public/css/style.css">

  <!-- Bootstrap Icons (Optional) 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  -->

  <!-- Lightbox CSS (Optional) -->
  <link rel="stylesheet" href="/../../public/css/lightbox.min.css">

  <!-- Jquery -->
  <script src="/../vendor/components/jquery/jquery.min.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><?= ucfirst($siteName) ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="index.html">
              <a class="nav-link" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=contact">Contact</a>
            </li>
          </ul>
          <div class="ms-lg-3">
            <a href="index.php?page=login" class="btn btn-outline-primary btn-sm me-2">Login</a>
            <a href="index.php?page=signup" class="btn btn-primary btn-sm">Sign Up</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>