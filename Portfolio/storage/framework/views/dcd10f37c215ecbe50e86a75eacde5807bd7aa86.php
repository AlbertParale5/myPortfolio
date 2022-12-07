<?php $__env->startSection('header'); ?>
  <header id="header" class="fixed-top bg-dark ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ALBERT JOHN PARALE</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/skills">Skills</a></li>
          <li><a class="nav-link scrollto " href="/project">Project</a></li>
          <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">I am Albert John Parale</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Software Developer, Photographer, Freelancer, Graphic Designer"></span></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/laravel/myPortfolio/resources/views/home.blade.php ENDPATH**/ ?>