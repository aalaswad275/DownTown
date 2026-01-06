@extends('layout.lapp')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">{{__('Stores')}}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{__('home')}}</a></li>
                    <li class="breadcrumb-item active text-white">{{__('Stores')}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
<!-- About Start -->
        <div class="container-fluid about py-5" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" >
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #717e3c transparent #717e3c;">
                            <img src="{{asset('frontend/img/'.$store->image)}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">{{$store->name}}</h5>
                        <h1 class="mb-4">{{__('Welcome to')}} <span class="text-primary">{{$store->name}}</span></h1>
                        <div class="mb-4">{!!$store->description!!}</div>

                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$store->phone}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$store->views}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$store->ratings}} <i class="fas fa-star text-warning"></i></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$store->email}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    @endsection
