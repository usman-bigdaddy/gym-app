@extends('layouts.app')

@section('content')

    @include('layouts.breadcrumb')
    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                @if (count($classes) > 0)
                    @foreach ($classes as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="classes__item classes__item__page">
                                <div class="classes__item__pic set-bg" data-setbg={{ asset($item->class_image) }}>
                                </div>
                                <div class="classes__item__text">
                                    <h4><a href="/trainer-profile/{{ $item->trainer_id }}">{{ $item->class_name }}</a>
                                    </h4>
                                    <h6>{{ $item->trainer_firstname . ' ' . $item->trainer_lastname }}<span>-
                                            {{ $item->trainer_class }}</span></h6>
                                    <a href="/enroll/{{ $item->id }}" class="class-btn">JOIN NOW</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <br />No Class
                @endif
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="single-fitness-feature">
                        <div class="fitness-number">
                            <span>01</span>
                        </div>
                        <div class="fitness-text">
                            <h4>Get fitted</h4>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. </p>
                        </div>
                    </div>
                    <div class="single-fitness-feature">
                        <div class="fitness-number">
                            <span>02</span>
                        </div>
                        <div class="fitness-text">
                            <h4>Try Pilates</h4>
                            <p>Ut euismod luctus elit id eleifend. Donec semper massa a imperdiet mattis. In vel mattis
                                neque, nec ultricies lectus. </p>
                        </div>
                    </div>
                    <div class="single-fitness-feature">
                        <div class="fitness-number">
                            <span>03</span>
                        </div>
                        <div class="fitness-text">
                            <h4>Healthy Diet</h4>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-2 text-md-right text-left">
                    <div class="single-fitness-feature">
                        <div class="fitness-number left-number">
                            <span>04</span>
                        </div>
                        <div class="fitness-text left-text">
                            <h4>Meditation</h4>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. </p>
                        </div>
                    </div>
                    <div class="single-fitness-feature">
                        <div class="fitness-number left-number">
                            <span>05</span>
                        </div>
                        <div class="fitness-text left-text">
                            <h4>Diet Plan</h4>
                            <p>Ut euismod luctus elit id eleifend. Donec semper massa a imperdiet mattis. In vel mattis
                                neque, nec ultricies lectus. </p>
                        </div>
                    </div>
                    <div class="single-fitness-feature">
                        <div class="fitness-number left-number">
                            <span>06</span>
                        </div>
                        <div class="fitness-text left-text">
                            <h4>Grow Muscles</h4>
                            <p>Arcu a tellus pellentesque ultrices. Ut euismod luctus elit id eleifend. Donec semper
                                massa a imperdiet mattis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection
