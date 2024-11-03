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
                    <!-- صندوق الحجز -->
                    <div class="col-md-5">
                        <div id="availabilityBox" class="alert"
                            style="background-color: rgba(66, 25, 0, 0.8); border: 1px solid rgba(54, 29, 5, 0.8); border-radius: 8px; padding: 15px;">
                            <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">                                @csrf
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
                                    Check availability
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- الهيروسكشن -->
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
        // إعادة توجيه المستخدم إلى الصفحة المناسبة
        window.location.href = "{{ url('rooms') }}/" + roomType.charAt(0).toUpperCase() + roomType.slice(1);

    });
</script>

<style>
    /* CSS لتصغير حجم الحقول وتنسيقها */
    .small-input {
        max-width: 100%; /* اجعل الحقول مناسبة للحجم المطلوب */
        border: 1px solid #ffffff;
        border-radius: 5px;
        font-family: 'Arial', sans-serif; /* تغيير نوع الخط */
        font-size: 1rem; /* تغيير حجم الخط */
        color: #000000; /* لون النص داخل الحقول */
        background-color: rgba(255, 255, 255, 0.8); /* لون الخلفية مع الشفافية */
    }

    /* تضييق الحاوية لتنسيق أفضل */
    #availabilityBox {
        max-width: 400px; /* تم تصغير العرض */
        padding: 15px; /* تم تقليل الحواف الداخلية */
        margin: auto; /* مركزية */
    }

    /* جعل الخط في العنوان أصغر */
    .alert-heading {
        font-size: 1.2rem; /* حجم الخط */
    }
</style>




    <!-------------------------------- END WELCOME -------------------------------------->

    <!----------------------------------- ABOUT ----------------------------------------->
    <section class="py-5 bg-light" id="next">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                    <figure class="img-absolute">
                        <img src="{{ asset('frontend/images/food-1.jpg') }}" alt="Food Image" class="img-fluid">
                    </figure>
                    <img src="{{ asset('frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                    <h2 class="heading">Welcome!</h2>
                    <p class="mb-4">Located in the heart of the tourist area, our hotel combines modern elegance with
                        authentic hospitality. Whether you're seeking a peaceful retreat or an adventure-filled trip, Wave
                        offers everything you need for an unforgettable stay.</p>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- END ABOUT ---------------------------------------->




    <!---------------------------------- ROOMS ------------------------------------------->
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
                    <!-- يمكنك إضافة محتوى آخر هنا إذا لزم الأمر -->
                </div>
            </div>
        </div>
    </section>





    <!-------------------------------- END ROOMS ----------------------------------------->



    <!---------------------------------- PHOTOS ------------------------------------------>
    <section class="section slider-section bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading" data-aos="fade-up">Gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider major-carousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                        @foreach (range(1, 7) as $number)
                            <div class="slider-item">
                                <a href="{{ asset('frontend/images/slider-' . $number . '.jpg') }}"
                                    data-fancybox="{{ asset('frontend/images') }}/"
                                    data-caption="Caption for image {{ $number }}">
                                    <img src="{{ asset('frontend/images/slider-' . $number . '.jpg') }}"
                                        alt="Image placeholder" class="img-fluid"
                                        style="max-width: 100%; height: auto; border-radius: 10px;">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- END slider -->
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1 // عرض صورة واحدة على الشاشات الصغيرة
                    },
                    600: {
                        items: 2 // عرض صورتين على الشاشات المتوسطة
                    },
                    1000: {
                        items: 3 // عرض ثلاث صور على الشاشات الكبيرة
                    }
                }
            });
        });
    </script>
    <!-------------------------------- END PHOTOS ---------------------------------------->




    <!------------------------------ RESTAURANT MENU ------------------------------------->
    <section class="section bg-image overlay"
        style="background-image: url('{{ asset('img/pexels-19x14-8480697.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
                </div>
            </div>
            <div class="food-menu-tabs" data-aos="fade">
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains"
                            role="tab" aria-controls="mains" aria-selected="true">Mains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts"
                            role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks"
                            role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
                    </li>
                </ul>
                <div class="tab-content py-5" id="myTabContent">
                    <!-- Mains Tab -->
                    <div class="tab-pane fade show active text-left" id="mains" role="tabpanel"
                        aria-labelledby="mains-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">$20.00</span>
                                    <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a>
                                    </h3>
                                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from
                                        the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                                <!-- Add more food items here -->
                            </div>
                            <div class="col-md-6">
                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">$10.00</span>
                                    <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a>
                                    </h3>
                                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from
                                        the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                                <!-- Add more food items here -->
                            </div>
                        </div>
                    </div>

                    <!-- Desserts Tab -->
                    <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">$11.00</span>
                                    <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from
                                        the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                                <!-- Add more dessert items here -->
                            </div>
                            <div class="col-md-6">
                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">$7.35</span>
                                    <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from
                                        the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                                <!-- Add more dessert items here -->
                            </div>
                        </div>
                    </div>

                    <!-- Drinks Tab -->
                    <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">$32.00</span>
                                    <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from
                                        the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                                <!-- Add more drink items here -->
                            </div>
                            <div class="col-md-6">
                                <div class="food-menu mb-5">
                                    <span class="d-block text-primary h4 mb-3">$18.00</span>
                                    <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon
                                            Squash</a></h3>
                                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from
                                        the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                                <!-- Add more drink items here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------- END RESTAURANT MENU ----------------------------------->




    <!-------------------------------- CONTACT US ---------------------------------------->
    <section class="section contact-section" id="next">
        <div class="container">
            <h2 class="text-center" style="margin-bottom: 30px;">Contact us</h2> <!-- Section Title -->
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf <!-- Secure the form using CSRF -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Enter your message" rows="6"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Address:</span> <span>Aqaba, Jordan</span></p>
                            <p><span class="d-block">Email:</span> <span>hepsam22@gmail.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------- CONTACT US ---------------------------------------->


@endsection
