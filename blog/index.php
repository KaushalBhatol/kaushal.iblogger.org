<?php
// basics
$title              = "Blog";
$seo_title          = "Kaushal Bhatol’s Recent Blog Posts";
$seo_keywords       = "kaushal, blog, posts, recent";
$seo_description    = "Find out recent posts and topics, It’s all about linux and cybersecurity. Serving my knowledge free to you. - Kaushal Bhatol";

$link_nav_blog      = 'active'; // nav-bar extanstion
$root               = '../';

include             $root . 'short.php';
include             $root . 'main.php';
include             'base.php'; // write content in this file
include             $footer;
?>