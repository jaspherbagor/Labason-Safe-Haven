@extends('layouts.client.layout')

@section('content')
@include('layouts.client.navbar')
<section class="hero-section container-fluid bg-secondary d-flex align-items-center justify-content-center">
    {{-- <div class="container hero-text text-center">
        <h1 class="fw-medium display-3 hero-heading heading">FIND YOUR NEXT HOME</h1>
        <p class="fs-5 sub-heading">A place where you feel safe and at peace</p>
    </div> --}}
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/img-1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption position-absolute">
                <h1 class="display-2">First slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/img-2.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-2">Second slide label</h1>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/img-3.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-2">Third slide label</h1>
              <p>Some representative placeholder content for the third slide.</p>
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
</section>
@include('layouts.client.footer')
@endsection
