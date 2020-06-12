<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Acerca de Jobaca</h2>
        <p>{{ $settings['about_description'] ?? '' }}</p>
      </div>
      <div class="col-lg-3">
        
      </div>
      <div class="col-lg-3">
           <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <span><!-- <i class="fa fa-map-marker" aria-hidden="true"></i> --> <img src="/img/logo-icon.jpg" class="rounded" alt="{{ env('APP_NAME', 'Jobaca') }}" width="121"></span>
        </a>
      </h1>
    </div>
      </div>
    </div>
  </div>
</section>
