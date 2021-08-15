<style>
    #userPhoto {
        width: 95px;
        height: 95px;
        display: block;
        margin: 35px auto 20px;
        border-radius: 50%;
    }
</style>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <img id="userPhoto" src="<?=$favicon?>" alt="<?=$author?>">
      <h1 class="fw-light">Hello, Guys!!</h1>
      <p class="lead text-muted">I'm Just Exploring the awesome journey of programming and cybersecurity. All things which helped me are documented here. I hope my knowledge helps you too. ;)</p>
      <p>
        <a href="<?=$blog?>" class="btn btn-primary my-2">Blog</a>
        <a href="<?=$root?>about/" class="btn btn-secondary my-2">About Me</a>
      </p>
    </div>
  </div>
</section>