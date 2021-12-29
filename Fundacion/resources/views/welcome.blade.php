@include('Libs.Header')
<div class="row">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ URL::to('/assets/img/Banner_1.png') }}" class="d-block w-100" alt="..." style="
        height:500px;">
        <div class="carousel-caption d-none d-md-block" style="text-shadow: -2px -4px 50px rgba(0,0,0,1);">
          <h3>Aprende Ofimatica</h3>
          <h5>Ahora con INI Computación puedes aprender a manejar programas de ofimatica.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ URL::to('/assets/img/Banner_2.png') }}" class="d-block w-100" alt="..." style="height:500px;">
        <div class="carousel-caption d-none d-md-block" style="text-shadow: -2px -4px 50px rgba(0,0,0,1);">
          <h3>Convertite en Full Stack Developér</h3>
          <h5>INI computación tiene para vos un curso completo de Programación Web.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ URL::to('/assets/img/Banner_3.png') }}" class="d-block w-100" alt="..." style="height:500px;">
        <div class="carousel-caption d-none d-md-block" style="text-shadow: -2px -4px 50px rgba(0,0,0,1);">
          <h3>¿Queres aprende a manejar Datos?</h3>
          <h5>Con INI Computación aprenderas a manejar diferentes bases de datos.</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="row my-3">
    <div class="d-flex justify-content-center">
        <h2>BIENVENIDOS A INI COMPUTACIÓN</h2>
    </div>
</div>
</div>
<div style="width: 100%;height:100%;">
    @include('Libs.Categorias')
</div>
<div class="container-md">
<div class="row my-3"></div>
    <div class="d-flex justify-content-center">
        <h2>CURSOS</h2>
    </div>
</div>
< class="container-md mt-3 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a short card.</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
             <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>









<div class="row my-5">
    <div class="d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673.5215249349906!2d-65.41518245378414!3d-24.787493479918638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc3ba60400ea9%3A0x9ed0011f055584f6!2sIni%20Capacitaci%C3%B3n%20Profesional!5e0!3m2!1ses-419!2sar!4v1640671424683!5m2!1ses-419!2sar" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
</div>
@include('Libs.Footer')
<script>
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>
@include('Libs.Finally')
