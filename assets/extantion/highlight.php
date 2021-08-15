<!--
  Name: highlight extanstion
  Purpose: highlighting articals
  Author: Kaushal Bhatol
  Note: Read below comments to use this extantion.  
<?php /*
----------------------------------------------
page:
<div class="p-5 mb-4">
  <h1 class="display-7 fw-bold"><?=$title?></h1>
  <div class="row mb-2 container-fluid">

<?php
include $cat_topic . 'folder_name' . '/card.php';
include $cat_topic . 'proxmox' . '/card.php';
include $cat_linux . 'virtual_box' . '/card.php';
?>
</div> 
 </div>
-----------------------------------------------
post: 
$seo_title          = "PROXMOX";
$post_link          = $cat_topic . 'proxmox/';  // $category . folder_name
$post_img           = "";
$post_date          = "2021/08/10";
$seo_description    = "";
-----------------------------------------------
*/ ?> -->
<div class="col-md-6">
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <h3 class="mb-0"><?=$seo_title?></h3>
      <div class="mb-1 text-muted"><?=$post_date?></div>
      <p class="card-text mb-auto"><?=$seo_description?></p>
      <a href="<?=$post_link?>" class="stretched-link">Continue reading</a>
    </div>
    <div class="col-auto d-none d-lg-block">
      <img class="bd-placeholder-img m-2" width="180" height="200" src="<?=$post_img?>" focusable="false"></img>
    </div>
  </div>
</div>