<?php $__env->startSection('content'); ?>
<main id="main" >
<section id="subscribe">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Newsletter</h2>
      <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
    </div>

  </div>
</section>

  <section id="speakers-details" class="wow fadeIn">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo e($website->photo->getUrl()); ?>" alt="<?php echo e($website->name); ?>" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2><?php echo e($website->name); ?></h2>
            
            <p><?php echo e($website->description); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
    	
    	<a href="<?php echo e($website->address); ?>" target="_blank" class="btn btn-info my-5">Ver demo</a>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/website.blade.php ENDPATH**/ ?>