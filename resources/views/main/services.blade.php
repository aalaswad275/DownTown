@extends('layout.lapp')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">{{__('Our Services')}}</h3>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{__('Home')}}</a></li>

                    <li class="breadcrumb-item active text-white">{{__('Services')}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Services')}}</h5>
                    <h1 class="mb-0">{{__('Our Services')}}</h1>
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
@endsection

