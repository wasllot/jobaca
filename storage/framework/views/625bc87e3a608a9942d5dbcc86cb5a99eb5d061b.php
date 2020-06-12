<section id="hotels" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Páginas web</h2>
      <p>Algunas de nuestras páginas web</p>
    </div>

    <div class="row">
      <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src="<?php echo e($hotel->photo->getUrl()); ?>" alt="<?php echo e($hotel->name); ?>" class="img-fluid">
            </div>
            <h3 class="text-center py-2"><a href="<?php echo e(route('web', $hotel->id)); ?>"><?php echo e($hotel->name); ?></a></h3>
<!--             <div class="stars">
  <?php for($i = 0; $i < $hotel->rating; $i++): ?>
    <i class="fa fa-star"></i>
  <?php endfor; ?>
</div>
<p><?php echo e($hotel->description); ?></p> -->
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/sections/hotels.blade.php ENDPATH**/ ?>