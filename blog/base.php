<!-- Blog base php  -->
<div class="mb-4">
  <h1 class="p-4 display-7 fw-bold"> <i class="fas fa-blog"></i> <?=$title?></h1>
  <div class="row mb-2 container-fluid">

<?php

include $cat_linux . 'redhat-dns' . '/card.php';
include $cat_linux . 'virtual-box' . '/card.php';
include $cat_topic . 'proxmox' . '/card.php';
include $cat_linux . 'ftp-host' . '/card.php';
include $cat_linux . 'xampp' . '/card.php';
?>
</div> 
 </div>