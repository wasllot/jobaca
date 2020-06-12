<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0"><?php echo $settings['title'] ?? ''; ?></h1>
    <p class="mb-4 pb-0"><?php echo e($settings['subtitle'] ?? ''); ?></p>
    <?php if($settings['youtube_link']): ?>
      <a href="<?php echo e($settings['youtube_link']); ?>" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
    <?php endif; ?>
    <a href="#about" class="about-btn scrollto">About The Event</a>
  </div>
</section>
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\Laravel-Event-Conference-Demo\resources\views/sections/intro.blade.php ENDPATH**/ ?>