@extends('layouts.client.layout')

@section('content')
@include('layouts.client.navbar')
<section class="hero-section container-fluid vh-100 bg-success d-flex align-items-center justify-content-center">
    <div class="container hero-text text-center">
        <h1 class="fw-medium display-3 hero-heading heading">FIND YOUR NEXT HOME</h1>
        <p class="fs-5 sub-heading">A place where you feel safe and at peace</p>
    </div>
    
</section>
@include('layouts.client.footer')
@endsection
