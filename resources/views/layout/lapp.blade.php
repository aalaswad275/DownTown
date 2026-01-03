<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{__('Libya Land')}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    </head>

    <body >

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">

            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                       @guest
                            @if (Route::has('login'))

                                    <a class="nav-link me-3 text-light" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @endif

                            @if (Route::has('register'))

                                    <a class="nav-link me-3 text-light" href="{{ route('register') }}">{{ __('Register') }}</a>

                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest

    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

            <a class="me-3 text-light"rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>

    @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

          <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0"  dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">

                    <img src="{{asset('frontend/img/logo.png')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('welcome')}}" class="nav-item nav-link {{ Route::is('welcome') ? 'active' : '' }}">{{__('Home')}}</a>
                        <a href="{{route('about')}}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">{{__('About')}}</a>
                        <a href="{{route('maingallery')}}" class="nav-item nav-link {{ Route::is('maingallery') ? 'active' : '' }}">{{__('Gallery')}}</a>
                        <a href="{{route('service')}}" class="nav-item nav-link {{ Route::is('service') ? 'active' : '' }}">{{__('Services')}}</a>
                        <a href="{{route('landmark')}}" class="nav-item nav-link {{ Route::is('landmark') ? 'active' : '' }}">{{__('Landmarks')}}</a>
                        <a href="{{route('stores.index')}}" class="nav-item nav-link {{ Route::is('stores.index') ? 'active' : '' }}">{{__('Stores')}}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('Famous Landmarks')}}</a>
                            <div class="dropdown-menu m-0">
                            <a href="{{route('PlaceInfo',9)}}" class="dropdown-item"><i class="fas fa-angle-right me-2"></i> {{__('Saraya Alhamra')}}</a>
                            <a href="{{route('PlaceInfo',11)}}" class="dropdown-item"><i class="fas fa-angle-right me-2"></i> {{__('Sabratha Ruins')}}</a>
                            <a href="{{route('PlaceInfo',12)}}" class="dropdown-item"><i class="fas fa-angle-right me-2"></i> {{__('Leptis Magna Ruins')}}</a>
                            <a href="{{route('PlaceInfo',13)}}" class="dropdown-item"><i class="fas fa-angle-right me-2"></i> {{__('Ghadames Old Town')}}</a>
                            <a href="{{route('PlaceInfo',14)}}" class="dropdown-item"><i class="fas fa-angle-right me-2"></i>{{__('Shahat')}}</a>
                            <a href="{{route('PlaceInfo',15)}}" class="dropdown-item"><i class="fas fa-angle-right me-2"></i>{{__('Ghaat')}}</a>
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">{{__('Contact')}}</a>
                    </div>

                </div>
            </nav>

           @yield('slider')
        </div>

        <!-- Navbar & Hero End -->
        @yield('content')
       <!-- Subscribe Start -->
            <div class="container-fluid subscribe py-5">
                <div class="container text-center py-5">
                    <div class="mx-auto text-center" style="max-width: 900px;">
                        <h5 class="subscribe-title px-3">{{ __('Stay Connected') }}</h5>
                        <h1 class="text-white mb-4">{{ __('Discover Libya With Us') }}</h1>
                        <p class="text-white mb-5">
                            {{ __("Subscribe to our newsletter and be the first to explore Libya's most beautiful landmarks, hidden gems, cultural, stories  and travel tips. Get inspired for your next journey and never miss an update.") }}
                        </p>
                        <div class="position-relative mx-auto">
                            <input
                                class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5"
                                type="email"
                                placeholder="{{ __('Enter your email address') }}">
                            <button
                                type="button"
                                class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">
                                {{ __('Subscribe') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">{{__('Libya Land')}}</h4>
                            <a href=""><i class="fas fa-home me-2"></i> {{__('Surman, Libya')}}</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> {{__('info@libyaland.ly')}}</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +218 91 000 00 00 </a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +218 92 000 00 00</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">{{__('Libya Land')}}</h4></h4>
                            <a href="{{route('about')}}"><i class="fas fa-angle-right me-2"></i> {{__('About')}}</a>
                            <a href="{{route('landmark')}}"><i class="fas fa-angle-right me-2"></i>{{__('Landmarks')}}</a>
                            <a href="{{route('maingallery')}}"><i class="fas fa-angle-right me-2"></i>{{__('Gallery')}}</a>
                            <a href="{{route('service')}}"><i class="fas fa-angle-right me-2"></i> {{__('Services')}}</a>
                            <a href="{{route('stores.index')}}"><i class="fas fa-angle-right me-2"></i>{{__('Stores')}}</a>
                            <a href="{{route('contact')}}"><i class="fas fa-angle-right me-2"></i> {{__('Contact')}}</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">{{__('Our Most Popular Landmarks')}}</h4>
                            <a href="{{route('PlaceInfo',10)}}"><i class="fas fa-angle-right me-2"></i> {{__('Saraya Alhamra')}}</a>
                            <a href="{{route('PlaceInfo',11)}}"><i class="fas fa-angle-right me-2"></i> {{__('Sabratha Ruins')}}</a>
                            <a href="{{route('PlaceInfo',12)}}"><i class="fas fa-angle-right me-2"></i> {{__('Leptis Magna Ruins')}}</a>
                            <a href="{{route('PlaceInfo',13)}}"><i class="fas fa-angle-right me-2"></i> {{__('Ghadames Old Town')}}</a>
                            <a href="{{route('PlaceInfo',14)}}"><i class="fas fa-angle-right me-2"></i>{{__('Shahat')}}</a>
                            <a href="{{route('PlaceInfo',15)}}"><i class="fas fa-angle-right me-2"></i>{{__('Ghaat')}}</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-12">
                                    <form>
    <div class="form-floating">
        <select class="form-select bg-light border"
                id="select1"
                onchange="location = this.value;">

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <option
                    value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                    {{ app()->getLocale() == $localeCode ? 'selected' : '' }}
                >
                    {{ $properties['native'] }}
                </option>
            @endforeach

        </select>
        <label for="select1">{{ __('Language') }}</label>
    </div>
</form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="{{route('welcome')}}">{{__('Libya Land')}}</a>, {{__('All right reserved.')}}
                    </div>
                    <div class="col-md-6 text-center text-md-start copy">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        {{__('Designed and  Distributed By')}} <a href="#">{{__('SheCode Team')}}</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script> {{-----}}


        <!-- Template Javascript -->
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>

</html>
