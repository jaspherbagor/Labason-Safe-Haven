@section('navbar_layout')
<nav class="navbar navbar-expand-lg bg-danger px-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" class="logo-img" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2 fw-semibold fs-6" href="#">HOME</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link me-2 fw-semibold fs-6" href="#">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ROOMS
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fs-6" href="#">Boarding House</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item fs-6" href="#">Hotel</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item fs-6" href="#">Apartment</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2 fw-semibold fs-6" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2 fw-semibold fs-6" href="#">CONTACT</a>
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-center">
                <a href="" class="btn btn-success me-3 fs-6 btn-register py-1 fw-semibold">REGISTER</a>
                <a href="" class="btn btn-success fs-6 btn-login py-1 fw-semibold">LOGIN</a>
            </div>
        
        </div>
    </div>
</nav>
@endsection