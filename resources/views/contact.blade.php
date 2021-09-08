@extends('layouts.app')

@section('content')

    @include('layouts.breadcrumb')
    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <section class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-info">
                                    <div class="contact-details">
                                        <h2>Get in Touch</h2>
                                        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit
                                            nisl quis
                                            nulla pretium, vitae ornare leo.Aenean id auctor libero, gravida venenatis
                                            justo. Sed ut
                                            arcu nibh. Fusce lacinia arcu in ultrices finibus. Donec vestibulum imperdiet
                                            efficitur.
                                        </p>
                                        <ul class="address">
                                            <li>2XL Mall, 2nd floor, Suite C1 besides Zenith Bank Gwarinpa - Abuja, Nigeria
                                            </li>
                                            <li>0814 381 3551, 0809 229 2974</li>
                                            <li>Kalkreatif@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="contact-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input required type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input required type="email" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input required type="text" placeholder="Subject">
                                                    <textarea required placeholder="Message"></textarea>
                                                    <button type="submit" disabled class="site-btn">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map"><iframe
                            src="https://maps.google.com/maps?q=2XL%20Mall&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            style="border:0" allowfullscreen></iframe></div>
                </section>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection
