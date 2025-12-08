@extends('layout.lapp')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">{{_('Famous Places')}}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{_('Home')}}</a></li>

                    <li class="breadcrumb-item active text-white">{{_('Famous Places')}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{_('Places You must visit')}}</h5>
                    <h1 class="mb-4">{{_('Libya Like you have never seen before')}}</h1>
                    <p class="mb-0"> </p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($landmarks as $landmark )
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="{{asset('frontend/img/landmarks/'.$landmark->image)}}" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="{{route('landmark.view',$landmark->id)}}" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">{{$landmark->tags}} </p>
                                <a href="#" class="h4">{{$landmark->title}}</a>
                                <p class="my-3">{!!subStr($landmark->description, 0, 100)!!}...</p>
                                <a href="{{route('landmark.view',$landmark->id)}}" class="btn btn-primary rounded-pill py-2 px-4">{{_('Read More')}}</a>
                            </div>
                        </div>
                    </div>
                     @endforeach

                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection
