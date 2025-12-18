@extends('layout.lapp')
@section('content')
       <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">{{__('Landmarks')}}</h3>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active text-white">{{__('Landmarks')}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Landmarks')}}</h5>
                    <h1 class="mb-0">{{__('Enjoy our Famous landmarks')}}</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    @foreach($landmarks as $landmark)
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('frontend/img/landmarks/'.$landmark->image)}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>{{$landmark->name}}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{$landmark->opening_hours}}</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>{{$landmark->views}}</small>
                            </div>
                            <div class="packages-price py-2 px-4">{{$landmark->ratings}}</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">{{ $landmark->name }}</h5>
                                <small class="text-uppercase">{{ $landmark->category }}</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">{{mb_substr($landmark->description, 0, 50)}}...</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{route('PlaceInfo', $landmark->id)}}" class="btn-hover btn text-white py-2 px-4">{{__('Read More')}}</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Packages End -->
         <!-- Explore Tour Start -->
        <div class="container-fluid ExploreTour py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{_('Descover Other Places in Libya')}}</h5>
                    <h1 class="mb-4"></h1>
                    <p class="mb-0">
                    </p>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#NationalTab-1">
                                <span class="text-dark" style="width: 250px;"></span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach($landmarks as $landmark)
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="{{asset('frontend/img/landmarks/'.$landmark->image)}}" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">{{$landmark->name}}</h5>
                                                <a href="{{route('PlaceInfo', $landmark->id)}}" class="btn-hover text-white">{{__('View  Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach




                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Explore Tour Start -->



@endsection
