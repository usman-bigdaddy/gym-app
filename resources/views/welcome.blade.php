@extends('layouts.app')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div style="" class="form-wrap overlap primary element-animate">
                            <h2 class="h2">Payment Instructions</h2>
                            <style>
                                .paymentinfo {
                                    color: black
                                }

                            </style>
                            <p class="paymentinfo">Account Name: KAL KREATIF PROMOTIONS LIMITED </p>
                            <p class="paymentinfo">Account Bank: Diamond Access</p>
                            <p class="paymentinfo">Account Number: 0099316450</p>
                            <p class="paymentinfo">After payment, you can either</p>
                            <ul style="margin-left: 20px" type="1">
                                <li>login to your account and upload evidence of payment from your profile tab or</li>
                                <li>take your evidence of payment and show it to the front desk at the Gym</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal End -->


    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slide-items owl-carousel">
            <div class="single-slide set-bg active" data-setbg={{ asset('img/bg.jpg') }}>
                <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i
                        class="fa fa-play"></i></a>
                <h1>Be Fit.Top Gym</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg={{ asset('img/bg-2.jpg') }}>
                <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i
                        class="fa fa-play"></i></a>
                <h1>Be Fit.Top Trainer</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
            <div class="single-slide set-bg" data-setbg={{ asset('img/bg-3.jpg') }}>
                <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i
                        class="fa fa-play"></i></a>
                <h1>Be Fit.Top Body</h1>
                <a href="#" class="primary-btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Membership Section Begin -->
    <section class="features-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="single-features">
                        <center>
                            <h2>Membership Plans</h2>
                    </div>
                    </center>
                    <!--p class="slogan">Membership</p-->
                    <div class="row">
                        <div class="col-md-4 club-card-col">
                            <div class="club-card-item" style="background-image: url(assets/img/bg-price-1.svg);">
                                <div class="price-cover">
                                    <div class="price">₦13,900</div>
                                    <div class="date"><span>per</span>month</div>
                                </div>
                                <ul class="list">
                                    <li>No Price Discount</li>
                                    <li>Membership Joining Fee- ₦6,900 <br><i>(New Members Only)</i></li>
                                    <li>All Day Access</li>
                                    <li>40+ Free Group Classes</li>
                                    <li>No Guest Pass</li>
                                    <li>No Freeze Subscription</li>
                                </ul>
                                <button type="button" class="btn-success " data-toggle="modal"
                                    data-target="#staticBackdrop">
                                    Pay
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4 club-card-col">
                            <div class="club-card-item" style="background-image: url(assets/img/bg-price-2.svg);">
                                <div class="price-cover">
                                    <div class="price">₦39,900</div>
                                    <div class="date"><span>per</span>quarter</div>
                                </div>
                                <ul class="list">
                                    <li>Enjoy Price Discount (5% off)</li>
                                    <li>Membership Joining Fee- ₦6,900 <br><i>(New Members Only)</i></li>
                                    <li>All Day Access</li>
                                    <li>40+ Free Group Classes</li>
                                    <li>One Guest Pass per Month</li>
                                    <li>Freeze Subscription Request <br>(10 Days Per Annum)</li>
                                </ul>
                                <button type="button" class="btn-success " data-toggle="modal"
                                    data-target="#staticBackdrop">
                                    Pay
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4 club-card-col">
                            <div class="club-card-item" style="background-image: url(assets/img/bg-price-3.svg);">
                                <div class="price-cover">
                                    <div class="price">₦149,900</div>
                                    <div class="date"><span>per</span>annum</div>
                                </div>
                                <ul class="list">
                                    <li>Enjoy Price Discount (10% off)</li>
                                    <li>Membership Joining Fee- ₦6,900 <br><i>(New Members Only)</i></li>
                                    <li>All Day Access</li>
                                    <li>40+ Free Group Classes</li>
                                    <li>Two Guest Pass per Month</li>
                                    <li>Freeze Subscription Request <br>(20 Days Per Annum)</li>
                                </ul>
                                <button type="button" class="btn-success " data-toggle="modal"
                                    data-target="#staticBackdrop">
                                    Pay
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
    </section>
    <!-- Membership Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2 style="color: white">Classes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src={{ asset('images/pilates.jpg') }} alt="">
                        <h5>HIIT</h5>
                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla
                            pretium.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service c-text">
                        <img src={{ asset('images/body-building.jpg') }} alt="">
                        <h5>Cardio Blast</h5>
                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla
                            pretium.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src={{ asset('images/yoga.jpg') }} alt="">
                        <h5>Boot Camp</h5>
                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla
                            pretium.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <img src={{ asset('images/cardio.jpg') }} alt="">
                        <h5>Yoga</h5>
                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla
                            pretium.</p>
                    </div>
                </div>
            </div>
            <div class="row p-70">
                <div class="col-lg-12 text-center">
                    <a href="/class" class=" service-btn primary-btn">see more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Trainers section -->
    <section class="trainers-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Meet the <span>Trainers</span></h2>
            </div>
            <div class="row">
                @foreach ($trainers as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="trainer-item">
                            <div class="trainer-pic">
                                <img src="{{ $item->image }}" alt="">
                            </div>
                            <h4> {{ $item->trainer_firstname }}<?php echo ' '; ?>{{ $item->trainer_lastname }}
                            </h4>
                            <p> {{ $item->trainer_class }}</p>

                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 text-center">
                    <a href="/gym-trainers" class="service-btn primary-btn">see more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainers section end -->

    {{-- <!-- Upcoming Event Begin -->
    <section class="upcoming-event-section spad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="upcoming-classes">
                        <div class="up-title">
                            <span>Next</span>
                            <h5>Upcomming Classes</h5>
                        </div>
                        <ul class="classes-time">
                            <li><img src="img/stopwatch.png" alt=""> Gym Fitness <span>11:00 - 12:00</span></li>
                            <li><img src="img/stopwatch.png" alt=""> Pilates <span>12:00 - 13:00</span></li>
                            <li><img src="img/stopwatch.png" alt=""> Spinning <span>13:00 - 14:00</span></li>
                            <li><img src="img/stopwatch.png" alt=""> Yoga <span>14:00 - 15:00</span></li>
                            <li><img src="img/stopwatch.png" alt=""> Gym Fitness <span>15:00 - 16:00</span></li>
                            <li><img src="img/stopwatch.png" alt=""> Pilates <span>16:00 - 17:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="membership-card set-bg" data-setbg={{ asset('img/m-card.jpg') }}>
                        <div class="membership-details">
                            <div class="up-title">
                                <span>Next</span>
                                <h5>Membership Cards</h5>
                            </div>
                            <div class="discount">
                                <h1>25% <span>Discount</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="member-sign-up set-bg" data-setbg={{ asset('img/signup-bg.jpg') }}>
                        <div class="up-title">
                            <span>New</span>
                            <h5>Personal Trainer</h5>
                        </div>
                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla
                            pretium.Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl
                            quis nulla pretium.</p>
                        <div class="member-signup-btn">
                            <a href="registration.html" class="primary-btn">Sign up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Event End --> --}}

    <!-- BMI section -->
    <section class="bmi-section spad">
        <div class="bmi-bg set-bg" data-setbg={{ asset('img/bmi-bg.jpg') }}></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ml-auto">
                    <div class="section-title mb-0">
                        <h2>Calculate your <span>BMI</span></h2>
                        <p>Body mass index (BMI) is a measure of body fat based on height and weight that applies to
                            adult
                            men and women.</p>
                    </div>
                    <div class="bmi-calculator-warp">
                        <div class="bmi-calculator">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="number" placeholder="Weight (KG)" id="weight">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" placeholder="Height (CM)" id="height">
                                </div>
                                <div class="col-sm-6">
                                    <button class="site-btn" id="my-bmi-submit">Calculate</button>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="bmi-result" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI section end -->

@endsection
