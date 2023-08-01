@extends('layout.master')
@section('content')
<title>Services</title>
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 pt-2">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/30img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Wedding Planner</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/19img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Event Planner</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/51img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Food Supplier</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/49img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Live Kitchen</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 pt-2">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/73img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Stage Decoration</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/img41img.png') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Interior Decoration</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/14img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Cool and Heat System</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/10img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Marquee Setup</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 pt-2">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/29img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Dara Setup</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/71img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Lounch Lighting</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/75img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Heavy Generator</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/20img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Dancing Floor</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 pt-2">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/15img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Birthday Decoration</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/23img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Food Still play stool</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/27img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">Outdoor Catering</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3"
                    style="background-image: url('{{ asset('assets/img/40img.jpeg') }}'); position: relative;">
                    <!-- Dark overlay to make the image darker -->
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
                    </div>
                    <div class="p-4" style="text-align: center; position: relative; z-index: 1;">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5 style="color: white">24/7 Service</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection