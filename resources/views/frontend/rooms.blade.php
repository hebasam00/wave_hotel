@extends('frontend.master')

@section('content')
<section class="site-hero overlay" style="background-image: url({{ asset('/img/pexels-ken123films-635041.jpg') }})" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span class="custom-caption text-uppercase text-white d-block mb-3">
                    Your Perfect Stay Awaits
                </span>
                <span class="fa fa-star text-primary"></span>
                <h1 class="heading" style="font-size: 2.5rem; font-weight: bold;">
                    Discover Our <span style="color: beige;">Rooms</span> at Wave Hotel
                </h1>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>
<!-- END section -->

<!-- Check Availability Section -->
<section class="section bg-light pb-0">
    <div class="container">
        <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

                <!-- Availability Box (Now Always Visible) -->
                <div id="availabilityBox" class="alert" style="background-color: #f5f5dc; border: 1px solid #d1cfcf; border-radius: 8px; padding: 20px;">
                    <h5 class="alert-heading" style="color: #8B4513;">Check Availability</h5>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                                <input type="date" id="checkin_date" class="form-control" style="border: 1px solid #8B4513; border-radius: 5px;">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                                <input type="date" id="checkout_date" class="form-control" style="border: 1px solid #8B4513; border-radius: 5px;">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="adults" class="font-weight-bold text-black">Adults</label>
                                <select id="adults" class="form-control" style="border: 1px solid #8B4513; border-radius: 5px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4+">4+</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="children" class="font-weight-bold text-black">Children</label>
                                <select id="children" class="form-control" style="border: 1px solid #8B4513; border-radius: 5px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4+">4+</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="room_type" class="font-weight-bold text-black">Room Type</label>
                                <select id="room_type" class="form-control" style="border: 1px solid #8B4513; border-radius: 5px;">
                                    <option value="single">Single Room</option>
                                    <option value="double">Double Room</option>
                                    <option value="family">Family Room</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block text-white" style="background-color: #8B4513; border: none; border-radius: 5px;">Check Availability</button>
                    </form>
                </div>
                <!-- End Availability Box -->

            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card" style="border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                    <div class="room">
                        <figure class="img-wrap">
                            <img src="{{ asset('frontend/images') }}/img_1.jpg" alt="Single Room" class="img-fluid mb-3" style="border-radius: 15px 15px 0 0;">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Single Room</h2>
                            <p>A comfortable single room, ideal for solo travelers. Offers perfect comfort and privacy.</p>
                            <p><strong>Price: $100 per night</strong></p>
                            <button class="btn btn-primary" onclick="location.href='#next'">Check Availability</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card" style="border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                    <div class="room">
                        <figure class="img-wrap">
                            <img src="{{ asset('frontend/images') }}/img_3.jpg" alt="Double Room" class="img-fluid mb-3" style="border-radius: 15px 15px 0 0;">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Double Room</h2>
                            <p>A spacious double room, perfect for couples or friends. Provides all the comforts.</p>
                            <p><strong>Price: $150 per night</strong></p>
                            <button class="btn btn-primary" onclick="location.href='#next'">Check Availability</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card" style="border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                    <div class="room">
                        <figure class="img-wrap">
                            <img src="{{ asset('frontend/images') }}/img_2.jpg" alt="Family Room" class="img-fluid mb-3" style="border-radius: 15px 15px 0 0;">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Family Room</h2>
                            <p>A comfortable family room, equipped with everything you need for the family. Ideal for longer stays.</p>
                            <p><strong>Price: $200 per night</strong></p>
                            <button class="btn btn-primary" onclick="location.href='#next'">Check Availability</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
