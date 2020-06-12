<!-- <header id="header"<?php if(Route::current()->getName() != 'home'): ?> class="header-fixed"<?php endif; ?>> -->
  <header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="<?php echo e(route('home')); ?>#intro">
          <span><!-- <i class="fa fa-map-marker" aria-hidden="true"></i> --> <img src="/img/logo-icon.jpg" class="rounded" alt="<?php echo e(env('APP_NAME', 'Jobaca')); ?>"></span>
          Jobaca
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#intro">Inicio</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#about">Acerca</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#speakers">Servicios</a></li>
        <!-- <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#schedule">Schedule</a></li> -->
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#venue">Oportunidades</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#hotels">Páginas</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#gallery">Diseños</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#faq">FAQ</a></li>
        <li><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#contact">Contacto</a></li>
        <li class="buy-tickets"><a href="<?php echo e(Route::current()->getName() != 'home' ? route('home') : ''); ?>#subscribe">Subscríbete</a></li>
      </ul>
    </nav>
  </div>
</header>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/partials/header.blade.php ENDPATH**/ ?>