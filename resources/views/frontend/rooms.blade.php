@extends('frontend.master')

@section('content')
    <!--------------------------------- WELCOME AND CHECK AVAILABILITY   ------------------------------------->
    <section class="site-hero overlay" style="background-image: url({{ asset('/img/pexels-ken123films-635041.jpg') }})"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <!-- Availability Box -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-5">
                        <div id="availabilityBox" class="alert"
                            style="background-color: rgba(66, 25, 0, 0.8); border: 1px solid rgba(54, 29, 5, 0.8); border-radius: 8px; padding: 15px;">
                            <form id="bookingForm" action="#" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="checkin_date" class="font-weight-bold text-white">Check In</label>
                                        <input type="date" name="checkin_date" class="form-control small-input" required>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label for="checkout_date" class="font-weight-bold text-white">Check Out</label>
                                        <input type="date" name="checkout_date" class="form-control small-input" required>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label for="adults" class="font-weight-bold text-white">Adults</label>
                                        <select id="adults" name="adults" class="form-control small-input" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4+</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label for="children" class="font-weight-bold text-white">Children</label>
                                        <select id="children" name="children" class="form-control small-input" required>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4+</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label for="room_type" class="font-weight-bold text-white">Room Type</label>
                                        <select id="room_type" name="room_type" class="form-control small-input" required>
                                            <option value="single">Single Room</option>
                                            <option value="double">Double Room</option>
                                            <option value="family">Family Room</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" id="checkAvailabilityBtn" class="btn btn-primary btn-block text-white"
                                    style="background-color: #992828; border: none; border-radius: 5px;">
                                    Check availability                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="hero-section" style="height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: rgba(255, 255, 255, 0); border-radius: 8px; padding: 20px;">
                            <h1 class="text-center" style="color: #f5f5dc;">A Best Place To Stay</h1>
                            <h2 class="text-center" style="color: #f5f5dc;">Welcome To Wave Hotel</h2>
                        </div>
                    </div>
                </div>
            </div>

            <a class="mouse smoothscroll" href="#next">
                <div class="mouse-icon">
                    <span class="mouse-wheel"></span>
                </div>
            </a>
        </div>
    </div>
</section>

<script>
    document.getElementById('checkAvailabilityBtn').addEventListener('click', function() {
        var roomType = document.getElementById('room_type').value;
        window.location.href = "{{ url('rooms') }}/" + roomType.charAt(0).toUpperCase() + roomType.slice(1);

    });
</script>

<style>
    .small-input {
        max-width: 100%;
        border: 1px solid #ffffff;
        border-radius: 5px;
        font-family: 'Arial', sans-serif;
        font-size: 1rem;
        color: #000000;
        background-color: rgba(255, 255, 255, 0.8);
    }

    #availabilityBox {
        max-width: 400px;
        padding: 15px;
        margin: auto;


    .alert-heading {
        font-size: 1.2rem;
    }
</style>
<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Rooms</h2>
            </div>
        </div>
        <div class="row">
            <!-- Single Room -->
            <div class="col-md-12 col-lg-12 mb-4" data-aos="fade-up">
                <div class="card room-card text-center" style="position: relative; overflow: hidden; border-radius: 15px;">
                    <figure class="img-wrap" style="margin: 0;">
                        <img src="{{ asset('frontend/images/img_1.jpg') }}" alt="Single Room" class="img-fluid room-image" style="width: 100%; height: 250px; object-fit: cover;">
                    </figure>
                    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1)); color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);">
                        <h2 style="color: orange;">Single Room</h2>
                        <p>A comfortable single room, ideal for solo travelers. Offers perfect comfort and privacy.</p>
                        <p><strong>Price: $100 per night</strong></p>
                        <a href="{{ route('rooms.showByType', ['type' => 'Single']) }}" class="btn btn-primary" style="padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; margin-top: 10px;">Check Availability</a>
                    </div>
                </div>
            </div>

            <!-- Double Room -->
            <div class="col-md-12 col-lg-12 mb-4" data-aos="fade-up">
                <div class="card room-card text-center" style="position: relative; overflow: hidden; border-radius: 15px;">
                    <figure class="img-wrap" style="margin: 0;">
                        <img src="{{ asset('frontend/images/img_3.jpg') }}" alt="Double Room" class="img-fluid room-image" style="width: 100%; height: 250px; object-fit: cover;">
                    </figure>
                    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1)); color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);">
                        <h2 style="color: orange;">Double Room</h2>
                        <p>A spacious double room, perfect for couples or friends. Provides all the comforts.</p>
                        <p><strong>Price: $150 per night</strong></p>
                        <a href="{{ route('rooms.showByType', ['type' => 'Double']) }}" class="btn btn-primary" style="padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; margin-top: 10px;">Check Availability</a>
                    </div>
                </div>
            </div>

            <!-- Family Room -->
            <div class="col-md-12 col-lg-12 mb-4" data-aos="fade-up">
                <div class="card room-card text-center" style="position: relative; overflow: hidden; border-radius: 15px;">
                    <figure class="img-wrap" style="margin: 0;">
                        <img src="{{ asset('frontend/images/img_2.jpg') }}" alt="Family Room" class="img-fluid room-image" style="width: 100%; height: 250px; object-fit: cover;">
                    </figure>
                    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1)); color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);">
                        <h2 style="color: orange;">Family Room</h2>
                        <p>A comfortable family room, equipped with everything you need for the family. Ideal for longer stays.</p>
                        <p><strong>Price: $200 per night</strong></p>
                        <a href="{{ route('rooms.showByType', ['type' => 'Family']) }}" class="btn btn-primary" style="padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; margin-top: 10px;">Check Availability</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light pb-0">
    <div class="container">
        <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
            </div>
        </div>
    </div>
</section>







    @endsection
