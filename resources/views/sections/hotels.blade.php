<section id="hotels" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Páginas web</h2>
      <p>Algunas de nuestras páginas web</p>
    </div>

    <div class="row">
      @foreach($hotels as $hotel)
        <div class="col-lg-4 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img src="{{ $hotel->photo->getUrl() }}" alt="{{ $hotel->name }}" class="img-fluid">
            </div>
            <h3 class="text-center py-2"><a href="{{ route('web', $hotel->id) }}">{{ $hotel->name }}</a></h3>
<!--             <div class="stars">
  @for($i = 0; $i < $hotel->rating; $i++)
    <i class="fa fa-star"></i>
  @endfor
</div>
<p>{{ $hotel->description }}</p> -->
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
