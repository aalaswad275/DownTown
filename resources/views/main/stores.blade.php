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
<!-- Most Visited Landmarks Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
         <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Famous stores and hotels')}}</h5>
                    <h1 class="mb-0">{{__('Explore our Culture without having to worrie about your accommdation')}}</h1>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($stores as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top"
                                     src="{{ asset('frontend/img/'.$item->image) }}"
                                     alt="{{ $item->name }}">
                                <div class="blog-icon">
                                    <a href="{{ route('stores.show',$item->id) }}" class="my-auto">
                                        <i class="fas fa-link fa-2x text-white"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-clock text-primary me-2"></i>
                                    {{ __('This Hour') }}
                                </small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2">
                                    <i class="fa fa-eye text-primary me-2"></i>
                                    {{ $item->views }}
                                </a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2">
                                    <i class="fa fa-comments text-primary me-2"></i>
                                    {{ $item->comments_count }}
                                </a>
                            </div>
                        </div>

                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="{{ route('stores.show',$item->id) }}" class="h4">
                                {{ $item->name }}
                            </a>
                            <p class="my-3">
                                {!! Str::limit(strip_tags($item->description), 100) !!}
                            </p>
                            <a href="{{ route('stores.show',$item->id) }}"
                               class="btn btn-primary rounded-pill py-2 px-4">
                                {{ __('Read More') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Most Visited Landmarks End -->

    @endsection
