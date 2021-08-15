<?php

// shortcuts
$css                = $root . 'assets/css/';
$extantion          = $root . 'assets/extantion/';
$img                = $root . 'assets/img/';
$php                = $root . 'assets/php/';
$blog               = $root . 'blog/';
$footer             = $php  . 'footer.php';

// category
$cat_linux          = $blog . 'linux/';
$cat_topic          = $blog . 'topic/';

// extansions
$ext_highlight      = $extantion . 'highlight.php';

// footer assignments
$year               = date("Y"); 

// Site information
$site_name          = "Kaushal Bhatol"; // website name.
$author             = "Kaushal Bhatol"; // Author for meta and pages.
$page_title         = $title . ' | ' . $site_name;  // page title
$favicon            = $img . "profile.png"; // websit logo

include             $php . 'functions.php';

?>
<!doctype html>
<html lang="en">
  <head>
  <!-- meta -->
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$page_title?></title>
  <link rel="icon" href="<?=$favicon?>">
	<link rel="canonical" href="<?=$url?>">
	<meta property="og:url" content="<?=$url?>">
<!-- Seo  -->
  <meta name="title" content="<?=$seo_title?>"> <!-- 70 characters -->
  <meta name="description" content="<?=$seo_description?>"> <!-- 150 characters -->
  <meta name="keywords" content="<?=$seo_keywords?>">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="<?=$author?>">

  <!-- Github md css file  -->
    <link href="<?=$root?>assets/css/github-markdown.css" rel="stylesheet" >
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
  <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?=$root?>">
          <img src="<?=$favicon?>" alt="" width="30" height="30" class="d-inline-block align-text-top" style="border-radius:50%;">
          <?=$site_name?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?=$link_nav_home?>" href="<?=$root?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$link_nav_about?>" href="<?=$root?>about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$link_nav_blog?>" href="<?=$blog?>">Blog</a>
            </li>
            <div class="dropdown nav-item">
              <a href="#" class="nav-link d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="<?=$cat_linux?>">Linux</a></li>
                <li><a class="dropdown-item" href="<?=$cat_topic?>">Topic</a></li>
                <li><a class="dropdown-item" href="#">Windows</a></li>
                <li><a class="dropdown-item" href="#">Topics</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>Ethical:</li>
                <li><a class="dropdown-item" href="#">Osiant Tools</a></li>
                <li><a class="dropdown-item" href="#">Kali tools</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>