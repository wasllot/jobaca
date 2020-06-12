<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>Contáctanos</h2>
      <p>Comúnicate con nosotros por cualquer duda o solicitud</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Dirección</h3>
          <address><?php echo e($settings['contact_address']); ?></address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Teléfono</h3>
          <p><a href="tel:<?php echo e(str_replace(' ', '', $settings['contact_phone'] ?? '')); ?>"><?php echo e($settings['contact_phone'] ?? ''); ?></a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Correo</h3>
          <p><a href="mailto:<?php echo e($settings['contact_email'] ?? ''); ?>"><?php echo e($settings['contact_email'] ?? ''); ?></a></p>
        </div>
      </div>

    </div>

    <div class="form">
      <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, haznos saber lo que piensas" placeholder="Mensaje"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">Enviar mensaje</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->
<?php /**PATH C:\Users\user\Desktop\Proyectos-Jobaca\landing-1\resources\views/sections/contact.blade.php ENDPATH**/ ?>