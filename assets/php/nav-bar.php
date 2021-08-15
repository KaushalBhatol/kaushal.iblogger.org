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