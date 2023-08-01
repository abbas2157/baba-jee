@extends('layout.master')
@section('content')
<title>About</title>
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets/img/31img.jpeg') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('assets/img/27img.jpeg') }}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('assets/img/36img.jpeg') }}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('assets/img/24img.jpeg') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                <p class="mb-4">Distribution Laptop:
                    University of Sargodha 15,000/ Students
                    <br>
                    Dr zulafaqor Ali Bhati M.N.N 10.000/ With Food
                    <br>
                    Ashayana Housing Prime Minister Pakistan 12000
                    <br>
                    Openinig Cermany or New Town .........
                    <br>
                    Rayl Orcherd
                    <br>
                    Sarmeko Garden
                    <br>
                    Eagil City
                    <br>
                    Graean City
                    <br>
                    Fazaya Scheme
                    <br>
                    Edion Life
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">BABU GEE</h5>
        </div>
        <div style="display: flex;">
    <div style="margin-left: 300px;">
        <img src="{{ asset('assets/img/81img.jpeg') }}" height="300px" width="270px">
    </div>
    <div style="margin-left: 50px;">
    <small>CEO:</small>
            <h3 class="mb-0">Ch Qurban Shahean</h3>
            <p><strong>Our Work Experience:</strong></p>
            <ul>
    <li><h6>University of Sargodha Contractor.</h6></li>
    <li><h6>Sargodha Police Contractor.</h6></li>
    <li><h6>Sargodha Bar Association Contractor.</h6></li>
    <li><h6>P.A.F Base Vendor.</h6></li>
    <li><h6>Pakistan Army Vendor and Experience.</h6></li>
    <li><h6>Ramadan Bazar Experience (2016 to 2022).</h6></li>
    <li><h6>Sahloot Bazar Experience (2020).</h6></li>
</ul>

</div>
</div>


    </div>
</div>
<!-- Team End -->

@endsection