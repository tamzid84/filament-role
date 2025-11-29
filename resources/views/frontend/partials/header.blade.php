<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt me-2"></small>
               <small>+8801553436939</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>muktipowerpvtltd@gmail.com</small>
                </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <ol class="breadcrumb justify-content-end mb-0">
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Terms</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Privacy</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Support</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{route('frontend.index')}}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid me-3" src="{{asset('frontend/img/icon/icon-021-primary.png')}}" alt="">Mukti Power</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
            <a href="{{route('frontend.index')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('frontend.about')}}" class="nav-item nav-link">About Us</a>
            <a href="{{route('frontend.service')}}" class="nav-item nav-link">Our Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="{{route('frontend.feature')}}" class="dropdown-item">Features</a>
                    <a href="{{route('frontend.quote')}}" class="dropdown-item">Free Quote</a>
                    <a href="{{route('frontend.team')}}" class="dropdown-item">Our Team</a>
                    <a href="{{route('frontend.testomonial')}}" class="dropdown-item">Testimonial</a>
                    <a href="#" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="{{route('frontend.contact')}}" class="nav-item nav-link">Contact Us</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
