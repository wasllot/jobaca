<section id="venue" class="wow fadeInUp">
    <div class="container-fluid">
      <div class="section-header">
        <h2>Oportunidades</h2>
        <p>Un poco acerca de Jobaca</p>
      </div>
    </div>
  <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row no-gutters">
      <div class="col-lg-6 venue-map">
        <iframe src="https://maps.google.com/maps?q=<?php echo e($venue->latitude); ?>,<?php echo e($venue->longitude); ?>&hl=en&z=14&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8">
            <h3><?php echo e($venue->name); ?></h3>
            <p><?php echo e($venue->description); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid venue-gallery-container">
      <div class="row no-gutters">
        <?php if($venue->photos): ?>
          <?php $__currentLoopData = $venue->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="<?php echo e($photo->getUrl()); ?>" class="venobox" data-gall="venue-gallery">
                  <img src="<?php echo e($photo->getUrl()); ?>" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/sections/venues.blade.php ENDPATH**/ ?>