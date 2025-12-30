@extends('layout.lapp')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">{{__('Contact Us')}}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{__('Home')}}</a></li>

                    <li class="breadcrumb-item active text-white">{{__('Contact')}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{__('Contact Us')}}</h5>
                    <h1 class="mb-0">{{__('Contact For Any Query')}}</h1>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address></Address></h4>
                                <p class="mb-0">{{__('Tripoli')}} <br>{{__('Libya')}}</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">{{__('Mobile')}}</h4>
                                <p class="mb-0">+218 91 000 00 00</p>
                                <p class="mb-0">+218 92 000 00 00</p>
                            </div>

                            <div class="text-center">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">{{__('Email')}}</h4>
                                <p class="mb-0">info@libyaland.ly</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-2">Send us a message</h3>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        @php
                            $locale = app()->getLocale();

                            if ($locale == 'ar') {
                                $mapUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54146.31417894174!2d13.178783!3d32.887209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8eb4d6f3b5bff%3A0x7c6d3c5f1a3c9e2d!2sطرابلس%2C%20ليبيا!5e0!3m2!1sar!2sly";
                            } else {
                                $mapUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54146.31417894174!2d13.178783!3d32.887209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8eb4d6f3b5bff%3A0x7c6d3c5f1a3c9e2d!2sTripoli%2C%20Libya!5e0!3m2!1sen!2sly";
                            }
                        @endphp
                        <div class="rounded">
                            <iframe class="rounded w-100"
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
        <!-- Contact End -->
@endsection
