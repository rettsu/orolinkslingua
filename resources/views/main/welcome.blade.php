@extends('layouts.app')

@section('title')
    Orolinks Lingua
@endsection

@section('content')
    <div class="container"> 

          <div class="row row justify-content-md-center">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{ asset('images/logo v3.0.png') }}" class="" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{ asset('images/car_2.jpg') }}" class="" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/car_3.jpg') }}" class="" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

      </div>

      <main class="px-3">
        <p class="lead">Linking your golden goals through learning the English Language.</p>
        <p class="lead">
          <a href="#">Learn more</a>
        </p>
      </main>

    </div>
@endsection


{{-- @extends('layouts.footer') --}}
{{-- @section('footer') --}}