<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Acerca de Jobaca</h2>
        <p><?php echo e($settings['about_description'] ?? ''); ?></p>
      </div>
      <div class="col-lg-3">
        
      </div>
      <div class="col-lg-3">
           <div id="logo" class="pull-left">
      <h1>
        <a href="<?php echo e(route('home')); ?>#intro">
          <span><!-- <i class="fa fa-map-marker" aria-hidden="true"></i> --> <img src="/img/logo-icon.jpg" class="rounded" alt="<?php echo e(env('APP_NAME', 'Jobaca')); ?>" width="121"></span>
        </a>
      </h1>
    </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/sections/about.blade.php ENDPATH**/ ?>