<?php
$root = '../';
$link_nav_blog = 'active'; // for activating link on navigation bar

// basics
$title = "Blog";
$seo_title = "About page on kaushal bhatol's blog.";
$seo_description = "lets get some advantage of bing localitaton and top deals";
$seo_keywords = 'blog, about, Kaushal Bhatol';

include $root . 'head.php';
?>

<div class="p-5 mb-4">
  <h1 class="display-7 fw-bold"><?=$title?></h1>
  <div class="row mb-2 container-fluid">

<?php
include $cat_topic . 'proxmox/card.php';
include $cat_linux . 'virtual_box/card.php';
?>
</div> 
 </div>

<?php
include $footer;
?>