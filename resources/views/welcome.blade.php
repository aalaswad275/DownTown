@extends('layout.lapp')

@section('slider')

 <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">


                        @foreach($slider as $s )
                        @if($count==0)
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        @else
                        <li data-bs-target="#carouselId" data-bs-slide-to="{{$count}}" ></li>
                        @endif
                        <div class="hidden" style="display: none;">{{ $count=$count+1}}</div>
                        @endforeach

                    </ol>


                    <div class="carousel-inner" role="listbox">
                         <div class="hidden" style="display:none;">{{$count=0}}</div>
                        @foreach ( $slider as $s )
                        <div class="carousel-item @if($count==0) active @endif ">
                            <img src="{{asset('frontend/img/'.$s->image )}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption" style="left:15%">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">{{$s->title}}</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">{{$s->subtitle}}</h1>
                                    <p class="mb-5 fs-5">{{$s->description}}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{$s->link}}">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="hidden" style="display: none;">{{$count=$count+1}}</div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->

@endsection
@section('content')

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">{{__('About Us')}}</h5>
                        <h1 class="mb-4">{{__('Welcome to')}} <span class="text-primary">{{__('Libya Land')}}</span></h1>
                        <p class="mb-4"> {{__('Libya Land is a digital gateway designed to showcase the hidden beauty, rich culture, and timeless heritage of Libya. Our mission is to present Libya as a welcoming and captivating destination for travelers, explorers, and history enthusiasts from around the world.')}}</p>
                        <p class="mb-4">{{__('We believe that Libya is more than just a place on the map — it is a land of breathtaking deserts, stunning Mediterranean beaches, ancient Roman and Greek ruins, vibrant traditions, and warm hospitality. Through our platform, we aim to highlight the country’s natural wonders, historical treasures, local cuisine, and unique cultural experiences.')}}</p>
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{__('Explore Famous Landmarks')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{__('Handpicked Hotels')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{__('Famous Historic Stores')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{__('Libyan Life Style ')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{__('Moneuments')}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{__('24/7 Service')}}</p>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{route('about')}}">{{__('Read More')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Searvices</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">{{ __('Famous Landmarks') }}</h5>
                                        <p class="mb-0">
                                            {{ __('Explore Libya’s most famous landmarks, including Roman ruins, Greek temples, desert cities, and UNESCO World Heritage sites.') }}
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                       <h5 class="mb-4">{{ __('Historical City Guides') }}</h5>
                                        <p class="mb-0">
    {{ __('Discover the rich history of Libyan cities through detailed guides that explore ancient civilizations, Islamic heritage, and cultural landmarks across the country.') }}
</p>

                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">{{ __('Libyan Culture & Lifestyle') }}</h5>
<p class="mb-0">
    {{ __('Experience authentic Libyan culture, traditional clothing, local customs, music, festivals, and the unique lifestyle of Libyan communities.') }}
</p>

                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">{{ __('Local Events & Heritage Activities') }}</h5>
<p class="mb-0">
    {{ __('Stay updated with cultural events, heritage festivals, exhibitions, and traditional celebrations across different Libyan regions.') }}
</p>

                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">{{ __('Local Events & Heritage Activities') }}</h5>
<p class="mb-0">
    {{ __('Stay updated with cultural events, heritage festivals, exhibitions, and traditional celebrations across different Libyan regions.') }}
</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                       <h5 class="mb-4">{{ __('Travel Planning & Recommendations') }}</h5>
<p class="mb-0">
    {{ __('Get practical travel tips, recommended routes, best visiting times, and essential information for exploring Libya safely and comfortably.') }}
</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">{{ __('Educational & Research Resources') }}</h5>
                                <p class="mb-0">
                                    {{ __('Access reliable information, historical references, and educational resources for students, researchers, and history enthusiasts.') }}
                                </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">{{ __('Traditional Libyan Cuisine') }}</h5>
                                <p class="mb-0">
                                    {{ __('Discover traditional Libyan dishes, local ingredients, and authentic flavors that reflect the country’s rich culinary heritage.') }}
                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Service More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Destination Start -->
        <div class="container-fluid destination py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Destination')}}</h5>
                    <h1 class="mb-0">{{__('Libya Land Famuos Landmarks')}}</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">{{__('All')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">{{__('Tripoli')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">{{__('Gahida-mas')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">{{__('Sabratha')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">{{('Benghzi')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">{{__('Ghaat')}}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane fade show p-0 active">

                            <div class="row g-4">

                                <div class="col-xl-8">
                                    <div class="row g-4">
                                        @foreach($mainlandmark as $ml )
                                        <div class="col-md-4">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="{{asset('frontend/img/landmarks/'. $ml->image)}}" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="{{route('PlacePhotos', $ml->id)}}" class="btn btn-primary text-white rounded-pill border py-2 px-3">{{ gettype($ml->gallery) }} {{__('Photos')}}</a>
                                                    <h4 class="text-white mb-2 mt-3">{{$ml->name}}</h4>
                                                    <a href="{{route('PlaceInfo',$ml->id)}}" class="btn-hover text-white">{{__('More details on Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{asset('frontend/img/landmarks/'.$ml->image)}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>




                            </div>
                        </div>
                        {{-- <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($tripolilandmark as $tl )
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{asset('frontend/img/landmarks'. $tl->image)}}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="{{route('PlacePhotos', $tl->id)}}" class="btn btn-primary text-white rounded-pill border py-2 px-3">{{count($ml->gallery)}} {{__('Photos')}}</a>
                                                <h4 class="text-white mb-2 mt-3">{{$tl->name}}</h4>
                                                <a href="{{route('PlaceInfo',$tl->id)}}" class="btn-hover text-white">{{__('More details on Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{asset('frontend/img/landmarks'. $tl->image)}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($Gihdamaslandmark as $gl )
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{asset('frontend/img/landmarks'. $gl->image)}}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="{{route('PlacePhotos', $gl->id)}}" class="btn btn-primary text-white rounded-pill border py-2 px-3">{{count($gl->gallery)}} {{__('Photos')}}</a>
                                                <h4 class="text-white mb-2 mt-3">{{$gl->name}}</h4>
                                                <a href="{{route('PlaceInfo',$gl->id)}}" class="btn-hover text-white">{{__('More details on Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{asset('frontend/img/landmarks'. $gl->image)}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($Sabrathalandmark as $sl )
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{asset('frontend/img/landmarks'. $sl->image)}}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="{{route('PlacePhotos', $sl->id)}}" class="btn btn-primary text-white rounded-pill border py-2 px-3">{{count($sl->gallery)}} {{__('Photos')}}</a>
                                                <h4 class="text-white mb-2 mt-3">{{$sl->name}}</h4>
                                                <a href="{{route('PlaceInfo',$sl->id)}}" class="btn-hover text-white">{{__('More details on Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{asset('frontend/img/landmarks'. $sl->image)}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                 @foreach($Benghazilandmark as $bl )
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{asset('frontend/img/landmarks'. $sl->image)}}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="{{route('PlacePhotos', $sl->id)}}" class="btn btn-primary text-white rounded-pill border py-2 px-3">{{count($bl->gallery)}} {{__('Photos')}}</a>
                                                <h4 class="text-white mb-2 mt-3">{{$bl->name}}</h4>
                                                <a href="{{route('PlaceInfo',$bl->id)}}" class="btn-hover text-white">{{__('More details on Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{asset('frontend/img/landmarks'. $bl->image)}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                 @foreach($Ghaatlandmark as $gl )
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{asset('frontend/img/landmarks'. $gl->image)}}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="{{route('PlacePhotos', $gl->id)}}" class="btn btn-primary text-white rounded-pill border py-2 px-3">{{count($sl->gallery)}} {{__('Photos')}}</a>
                                                <h4 class="text-white mb-2 mt-3">{{$gl->name}}</h4>
                                                <a href="{{route('PlaceInfo',$gl->id)}}" class="btn-hover text-white">{{__('More details on Place')}} <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{asset('frontend/img/landmarks'. $gl->image)}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Destination End -->


        <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Famous stores and hotels')}}</h5>
                    <h1 class="mb-0">{{__('Explore our Culture without having to worrie about your accommdation')}}</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    @foreach($stores as $st )
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('frontend/img/'.$st->image)}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>{{$st->name}}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{$st->openhours}}</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 {{st->address}}</small>
                            </div>
                            <div class="packages-price py-2 px-4"></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">{{$st->name}} -{{$st->city}}</h5>
                                <small class="text-uppercase">{{$st->type}}</small>
                                <div class="mb-3">
                                    @if($st->rating == 5)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    @elseif($st->rating >=4.5  && $st->rating <5)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star-half text-primary"></small>
                                    @elseif($st->rating >=4.0  && $st->rating <4.5)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                   @elseif($st->rating >=3.5  && $st->rating <4.0)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star-half text-primary"></small>
                                    @elseif($st->rating >=3.0  && $st->rating <3.5)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    @elseif($st->rating >=2.5  && $st->rating <3)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star-half text-primary"></small>
                                    @elseif($st->rating >=2.0  && $st->rating <2.5)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    @elseif($st->rating >=1.5  && $st->rating <2.0)
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star-half text-primary"></small>
                                    @elseif($st->rating >=1.0  && $st->rating <1.5)
                                    <small class="fa fa-star text-primary"></small>
                                    @elseif($st->rating >=0.5  && $st->rating <1.0)
                                    <small class="fa fa-star-half text-primary"></small>
                                    @endif





                                </div>
                                <p class="mb-4">{{$st->discription}}</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{route('store.show',$st->id)}}" class="btn-hover btn text-white py-2 px-4">{{__('Read More')}}</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Packages End -->

        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">{{__('Our Gallery')}}</h5>
                <h1 class="mb-4">{{__('Enjoy breath taking photos from libya')}}</h1>
                <p class="mb-0">
                </p>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            @foreach($galleries as $gallery )
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('frontend/img/'.$gallery->image)}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">{{$gallery->name}}</h5>
                                            <a href="#" class="btn-hover text-white"> <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('frontend/img/'.$gallery->image)}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery End -->

<!-- Contact Start -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">{{ __('Contact Us') }}</h5>
                <h1 class="text-white mb-4">{{ __('Get In Touch') }}</h1>

                <p class="text-white mb-4">
                    {{ __('Have questions, suggestions, or need more information about Libya Land? We are happy to hear from you and assist you with anything you need.') }}
                </p>

                <p class="text-white mb-4">
                    {{ __('Whether you are a traveler, researcher, or cultural enthusiast, feel free to contact us and we will respond as soon as possible.') }}
                </p>

                <a href="{{ route('about') }}" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">
                    {{ __('Learn More About Us') }}
                </a>
            </div>

            <!-- CONTACT FORM -->
            <div class="col-lg-6">
                <h1 class="text-white mb-3">{{ __('Send Us a Message') }}</h1>
                <p class="text-white mb-4">
                    {{ __('We would love to hear from you. Please fill out the form below.') }}
                </p>

                <form method="POST" action="#">
                    @csrf
                    <div class="row g-3">

                        <!-- Name -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control bg-white border-0"
                                       id="name" placeholder="{{ __('Your Name') }}" required>
                                <label for="name">{{ __('Your Name') }}</label>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control bg-white border-0"
                                       id="email" placeholder="{{ __('Your Email') }}" required>
                                <label for="email">{{ __('Your Email') }}</label>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="subject" class="form-select bg-white border-0" id="subject">
                                    <option value="general">{{ __('General Inquiry') }}</option>
                                    <option value="tourism">{{ __('Tourism Information') }}</option>
                                    <option value="landmarks">{{ __('Landmarks & History') }}</option>
                                    <option value="support">{{ __('Technical Support') }}</option>
                                </select>
                                <label for="subject">{{ __('Subject') }}</label>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="phone" class="form-control bg-white border-0"
                                       id="phone" placeholder="{{ __('Phone Number') }}">
                                <label for="phone">{{ __('Phone Number') }}</label>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control bg-white border-0"
                                          placeholder="{{ __('Your Message') }}" id="message"
                                          style="height: 120px" required></textarea>
                                <label for="message">{{ __('Your Message') }}</label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-12">
                            <button class="btn btn-primary text-white w-100 py-3" type="submit">
                                {{ __('Send Message') }}
                            </button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->



        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Our Blog</h5>
                    <h1 class="mb-4">Popular Travel Blogs</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-3.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Testimonial')}}</h5>
                    <h1 class="mb-0">{{__('Our Vistors Say!!!')}}</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">{{__('Libya Land made my trip to libya unforgettable.')}}
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">{{__('Ahmed Saeed')}}</h5>
                            <p class="mb-0">{{__('Qratija, Tunisia')}}</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5"> {{__('Thanks to Libya Land, my journey through Libya was smooth and full of amazing experiences')}}
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">{{__('Ali Khaled')}}</h5>
                            <p class="mb-0">{{__('Cario, Egypt')}}</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">{{__('With Libya Land, every destination in Libya felt special and meaningful')}}
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">{{__('John Adam')}}</h5>
                            <p class="mb-0">{{__('New York, USA')}}</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">{{__('Libya Land made exploring Libya a dream come true.')}}
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">{{__('Sara Mohammed')}}</h5>
                            <p class="mb-0">{{__('Surman, Libya')}}</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

<div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(214, 142, 96, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; left: 50px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
@endsection
