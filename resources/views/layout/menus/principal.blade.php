<section class="row">
  <div class="col-12">
    <img src="{{ env('APP_URL') }}/assets/images/index/navbar1.png" width="100%">
  </div>
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-fill w-100">
      <a class="nav-item nav-link text-center {{ $active == 'index' ? 'bolder' : '' }}" href="{{ URL::route('home') }}">
        Inicio
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'aboutus' ? 'bolder' : '' }}" href="{{ URL::route('aboutus') }}">
        Nosotros
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'services' ? 'bolder' : '' }}" href="{{ URL::route('services') }}">
        Servicios
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'galery' ? 'bolder' : '' }}" href="{{ URL::route('galery') }}">
        Galería
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'contact' ? 'bolder' : '' }}" href="{{ URL::route('contact') }}">
        Contacto
      </a>
    </div>
  </div>
</nav>

<section class="row">
  <div class="col-12">
    <img src="{{ env('APP_URL') }}/assets/images/index/navbar2.png" width="100%">
  </div>
</section>

<style>
  .nav-link{
    padding: 0 !important;
  }
  .nav-item{
    color: #24437a !important;
    font-size: 21px;
  }
</style>