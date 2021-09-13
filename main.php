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
$cat_bsc_ims_adp    = $blog . 'bsc_ims/ADP/';

// extansions
$ext_highlight      = $extantion . 'highlight.php';
$ext_alert          = $extantion . 'alert.php';

// footer assignments
$year               = date("Y"); 

// Site information
$site_name          = "Kaushal Bhatol";             // website name.
$author             = "Kaushal Bhatol";             // Author for meta and pages.
$page_title         = $title . ' | ' . $site_name;  // page title
$favicon            = $img  . 'favicon.png';         // websit logo

include             $php . 'functions.php';         // php functions file
include             $php . 'head.php';              // head data, meata data
include             $php . 'nav-bar.php';           // navigation bar
?>