@extends('layouts.main')

@section('content')
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
          <img src="{{ $speaker->photo->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{ $speaker->name }}</h2>
            <div class="social">
              <a href="{{ $speaker->twitter }}"><i class="fa fa-twitter"></i></a>
              <a href="{{ $speaker->facebook }}"><i class="fa fa-facebook"></i></a>
              <a href="{{ $speaker->linkedin }}"><i class="fa fa-linkedin"></i></a>
            </div>
            <p>{{ $speaker->full_description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection