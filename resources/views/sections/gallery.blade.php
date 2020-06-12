<section id="gallery" class="wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Diseños</h2>
      <p>Algunos de los diseños elaborados por Jobaca</p>
    </div>
  </div>
  @foreach($galleries as $gallery)
    <div class="owl-carousel gallery-carousel">
      @foreach($gallery->photos as $photo)
        <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
      @endforeach
    </div>
  @endforeach
</section>
