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
        <div class="container-fluid about py-5" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" >
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #717e3c transparent #717e3c;">
                            <img src="{{asset('frontend/img/landmarks/'.$landmark->image)}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">{{$landmark->name}}</h5>
                        <h1 class="mb-4">{{__('Welcome to')}} <span class="text-primary">{{$landmark->address}} </span></h1>
                        <div class="mb-4">{!!$landmark->description!!}</div>

                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$landmark->website}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$landmark->views}}</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$landmark->ratings}} <i class="fas fa-star text-warning"></i></p>
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

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Gallery Start -->
<div class="container-fluid booking py-5" style="background: url({{asset('frontend/img/landmarks/'.$landmark->image)}});background-size: cover; background-position: center;" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}    ">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <div class="col-lg-12">
                <h5 class="section-title px-3">{{__('Gallery')}}</h5>

                    <div class="bg-light rounded h-100 d-flex flex-column justify-content-center p-5">
                        <div class="row g-4">
                            @foreach($landmark->gallery ?? [] as $img)
                            <div class="col-lg-4 col-md-6">

                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100 " src="{{asset($img)}}" height="100px" alt="">
                                                <div class="destination-overlay p-4">
                                            <div class="search-icon">
                                                    <a href="{!! asset($img) !!}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>

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
</div>
<!-- Contact End -->
<div class="row g-5 align-items-center">
    <div class="col-md-6">
        <!--- Opening Hours Start -->
        <div class="container-xxl py-5 dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12">
                        <h5 class="section-title px-3 align-items-center">{{__('Opening Hours')}}</h5>
                        <div class="h-100" style="border: 50px solid; border-color: transparent #717e3c transparent #717e3c;">
                            <div class="bg-light rounded h-100 d-flex flex-column justify-content-center p-5">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Day') }}</th>
                                            <th>{{ __('Opening Hours') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                    $hours = json_decode($landmark->opening_hours, true);
                                @endphp
                                        @foreach($hours as $day => $time)
                                            <tr>
                                                <td>{{ __($day) }}</td>
                                                <td>
                                                    @if($time === 'Closed')
                                                        <span class="text-danger fw-bold">{{ __('Closed') }}</span>
                                                    @else
                                                        <span class="text-success">{{ $time }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- Opening Hours End -->
    </div>
    <div class="col-md-6">
        <!--Map Start-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12">
                        <h5 class="section-title px-3">{{__('Map')}}</h5>
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
    </div>
</div>


<!-- Gallery End -->
<!-- Comments Start -->
<div class="container-fluid comments py-5" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12">
                <h5 class="section-title px-3">{{__('Comments')}}</h5>
                <div class="bg-light rounded h-100 d-flex flex-column justify-content-center p-5">
                    @foreach($comments ?? [] as $comment)
                    <div class="mb-4">
                        <h6 class="mb-1"> <span class="text-muted">({{ $comment->created_at->format('Y-m-d H:i') }})</span></h6>
                        <p>{{ $comment->comment}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    <h5>{{__('Add a Comment')}}</h5>
                    <form action="{{ route('comments.store', $landmark->id) }}" method="POST">
                        @csrf
                        @method('GET')
                        <div class="mb-3">
                            <label for="user_name" class="form-label">{{__('Your Name')}}</label>
                            <input type="text" class="form-control" id="user_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">{{__('Your Comment')}}</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- Comments End -->
@endsection

