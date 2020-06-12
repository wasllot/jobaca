<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Servicios</h2>
      <p>Algunos de los servicios ofrecidos por Jobaca</p>
    </div>

    <div class="row">
      <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="<?php echo e($speaker->photo->getUrl()); ?>" alt="<?php echo e($speaker->name); ?>" class="img-fluid">
            <div class="details">
              <h3><a href="<?php echo e(route('service', $speaker->id)); ?>"><?php echo e($speaker->name); ?></a></h3>
              <p><?php echo e($speaker->description); ?></p>
              <div class="social">
                <!-- <?php if($speaker->twitter): ?>
                  <a href="<?php echo e($speaker->twitter); ?>"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
                <?php if($speaker->facebook): ?>
                  <a href="<?php echo e($speaker->facebook); ?>"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if($speaker->linkedin): ?>
                  <a href="<?php echo e($speaker->linkedin); ?>"><i class="fa fa-linkedin"></i></a>
                <?php endif; ?> -->
                <a href="<?php echo e(route('service', $speaker->id)); ?>"><i class="fa fa-eye"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/sections/speakers.blade.php ENDPATH**/ ?>