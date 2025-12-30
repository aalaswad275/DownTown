@extends('layout.lapp')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">{{$landmark->name}}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{__('home')}}</a></li>
                    <li class="breadcrumb-item active text-white">{{$landmark->name}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #717e3c transparent #717e3c;">
                            <img src="{{asset('frontend/img/landmarks/'.$landmark->image)}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">{{$landmark->name}}</h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary">{{$landmark->address}} ({{$landmark->latitude}}, {{$landmark->longtude}})</span></h1>
                        <p class="mb-4">{{$landmark->description}}</p>

                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$landmark->website}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$landmark->views}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$landmark->ratings}} Star</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!--Map Start-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12">
                        <h5 class="section-title px-3">Map</h5>
                        <div class="h-100" style="border: 50px solid; border-color: transparent #717e3c transparent #717e3c;">
                           @php
                                $locale = app()->getLocale();
                                $lat = $landmark->latitude;
                                $lng = $landmark->longtude;
                                $address = urlencode($landmark->address);

                                if ($locale === 'ar') {
                                    $mapUrl = "https://www.google.com/maps?q={$lat},{$lng}({$address})&hl=ar&gl=ly&z=15&output=embed";
                                } else {
                                    $mapUrl = "https://www.google.com/maps?q={$lat},{$lng}({$address})&hl=en&gl=ly&z=15&output=embed";
                                }
                            @endphp

                            <div class="rounded">
                                <iframe
                                    class="rounded w-100"
                                    style="height: 450px;"
                                    src="{{ $mapUrl }}"
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Map End-->

@endsection

