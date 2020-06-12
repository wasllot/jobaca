<section id="gallery" class="wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Gallery</h2>
      <p>Check our gallery from the recent events</p>
    </div>
  </div>
  <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="owl-carousel gallery-carousel">
      <?php $__currentLoopData = $gallery->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($photo->getUrl()); ?>" class="venobox" data-gall="gallery-carousel"><img src="<?php echo e($photo->getUrl()); ?>" alt="<?php echo e($gallery->name); ?>" title="<?php echo e($gallery->name); ?>"></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\Laravel-Event-Conference-Demo\resources\views/sections/gallery.blade.php ENDPATH**/ ?>