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
          <img src="{{ $website->photo->getUrl() }}" alt="{{ $website->name }}" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{ $website->name }}</h2>
            
            <p>{{ $website->description }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
    	
    	<a href="{{ $website->address }}" target="_blank" class="btn btn-info my-5">Ver demo</a>
    </div>
  </section>
</main>
@endsection