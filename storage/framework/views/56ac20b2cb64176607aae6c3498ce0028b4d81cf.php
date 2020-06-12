<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>

    <ul class="nav nav-tabs" role="tablist">
      <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
          <a class="nav-link<?php echo e($key === 1 ? ' active' : ''); ?>" href="#day-<?php echo e($key); ?>" role="tab" data-toggle="tab">Day <?php echo e($key); ?></a>
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
      necessitatibus voluptatem quis labore perspiciatis quia.</h3>

    <div class="tab-content row justify-content-center">
      <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div role="tabpanel" class="col-lg-9 tab-pane fade<?php echo e($key === 1 ? ' show active' : ''); ?>" id="day-<?php echo e($key); ?>">
          <?php $__currentLoopData = $day; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row schedule-item">
              <div class="col-md-2"><time><?php echo e(\Carbon\Carbon::parse($schedule->start_time)->format("h:i A")); ?></time></div>
              <div class="col-md-10">
                <?php if($schedule->speaker): ?>
                  <div class="speaker">
                    <img src="<?php echo e($schedule->speaker->photo->getUrl()); ?>" alt="<?php echo e($schedule->speaker->name); ?>">
                  </div>
                <?php endif; ?>
                <h4><?php echo e($schedule->title); ?> <?php if($schedule->speaker): ?><span><?php echo e($schedule->speaker->name); ?></span><?php endif; ?></h4>
                <p><?php echo e($schedule->subtitle); ?></p>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/sections/schedule.blade.php ENDPATH**/ ?>