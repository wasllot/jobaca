<header id="header"<?php if(Route::current()->getName() != 'home'): ?> class="header-fixed"<?php endif; ?>>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="<?php echo e(route('home')); ?>#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
          <?php echo e(env('APP_NAME', 'The Event')); ?>

        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#intro">Home</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#about">About</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#speakers">Speakers</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#schedule">Schedule</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#venue">Venue</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#hotels">Hotels</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#gallery">Gallery</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#supporters">Sponsors</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#contact">Contact</a></li>
        <li class="buy-tickets"><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#buy-tickets">Buy Tickets</a></li>
      </ul>
    </nav>
  </div>
</header>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\Laravel-Event-Conference-Demo\resources\views/partials/header.blade.php ENDPATH**/ ?>