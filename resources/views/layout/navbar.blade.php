<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Babu Jee</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{url('about')}}" class="nav-item nav-link {{Request::url() === url('about') ? 'active' : ''}}">About</a>
                <a href="{{url('services')}}" class="nav-item nav-link {{Request::url() === url('services') ? 'active' : ''}}">Service</a>
                <a href="{{url('menue')}}"  class="nav-item nav-link {{Request::url() === url('menue') ? 'active' : ''}}">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->is('booking', 'ourteam', 'testimonial') ? 'active' : '' }}" data-bs-toggle="dropdown">Others</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('booking')}}" class="dropdown-item {{Request::url() === url('booking') ? 'active' : ''}}">Booking</a>
                        <a href="{{url('ourteam')}}" class="dropdown-item {{Request::url() === url('ourteam') ? 'active' : ''}}">Our Team</a>
                        <a href="{{url('testimonial')}}" class="dropdown-item {{Request::url() === url('testimonial') ? 'active' : ''}}">Testimonial</a>
                    </div>
                </div>
                <a href="{{url('contact')}}"  class="nav-item nav-link {{Request::url() === url('contact') ? 'active' : ''}}">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4 ">Book A Table</a>
        </div>
    </nav>
</div>