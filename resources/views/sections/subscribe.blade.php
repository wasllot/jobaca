<section id="subscribe">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>¿Quieres formar parte de nuestro equipo?</h2>
      <p>Subscríbete y nos pondremos en contacto contigo</p>

    </div>
  
    <form id="subs">
      <div class="form-row justify-content-center">
        <div class="col-auto">
          <input type="text" class="form-control" id="email_sub" name="email_sub" placeholder="Ingresa tu correo">
        </div>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="col-auto">
          <button id="subs_button">Subscribirse</button>
        </div>

      </div>
    </form>

  </div>


  <script>
   (function() {

  const submitBtn = document.querySelector('#subs_button');
  const token = '{{ csrf_token() }}';
  submitBtn.addEventListener('click', postData);

  function postData(e) {
    e.preventDefault();

    const email = document.querySelector('#email_sub').value;
    console.log(email);
    fetch('/subscribe', {
        method: 'POST',
         headers:{
            "content-type":"application/json",
            "X-CSRF-Token": token
          },
        body: JSON.stringify({email: email})
    }).then(function (response) {

    
      document.querySelector('#alert_msg').style.display = "block";

      return response.json();

    }).then(function(data) {
     
      
    });

  }

})();

  </script>
</section>

  <p> <span class="text-center success-message" style="display: none;" id="alert_msg">Subscripción realizada exitosamente. Te contactaremos próximamente</span></p>