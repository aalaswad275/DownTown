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
<div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(214, 142, 96, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; left: 50px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
@endsection
