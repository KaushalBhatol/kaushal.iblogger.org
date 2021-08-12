<?php
$root = '../../';

// basics
$title = "Linux";
$seo_title = "";
$seo_description = "";
$seo_keywords = '';
$slug = 'blog/linux/';

include $root . 'head.php';
?>

<div class="p-5 mb-4">
  <h1 class="display-7 fw-bold"><?=$title?></h1>
  <div class="row mb-2 container-fluid">

<?php
include $cat_linux . 'virtual_box/card.php';
?>
</div> 
 </div>

<?php
include $root . 'footer.php';
?>