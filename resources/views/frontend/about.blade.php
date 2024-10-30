@extends('frontend.master')

@section('content')
<section class="site-hero overlay" style="background-image: url({{ asset('/img/pexels-ken123films-635041.jpg') }})" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span class="custom-caption text-uppercase text-white d-block mb-3">
                    A Best Place To Stay
                </span>
                <span class="fa fa-star text-primary"></span>
                <h1 class="heading" style="font-size: 2.5rem; font-weight: bold;">
                    About <span style="color: beige;">Wave</span> Hotel
                </h1>
                <p class="text-white mt-3">Discover our story, values, and commitment to providing a unique experience for our guests.</p> <!-- نص إضافي يوضح الصفحة -->
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>

<section class="py-5 bg-light" id="next">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <figure class="img-absolute">
                    <img src="{{asset('frontend/images/food-1.jpg')}}" alt="Food Image" class="img-fluid">
                </figure>
                <img src="{{asset('frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h2 class="heading">Welcome!</h2>
                <p class="mb-4">Located in the heart of the tourist area, our hotel combines modern elegance with authentic hospitality. Whether you're seeking a peaceful retreat or an adventure-filled trip, Wave offers everything you need for an unforgettable stay.</p>
            </div>
        </div>
    </div>
</section>

<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Photos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-carousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="slider-item">
                        <a href="{{asset('frontend/images/slider-1.jpg')}}" data-fancybox="gallery" data-caption="Caption for this image"><img src="{{asset('frontend/images/slider-1.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="{{asset('frontend/images/slider-2.jpg')}}" data-fancybox="gallery" data-caption="Caption for this image"><img src="{{asset('frontend/images/slider-2.jpg')}}" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <!-- Remaining slider items -->
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 mb-5">
                <h2 class="heading" data-aos="fade">History</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Phase 1 -->
                <div class="timeline-item" date-is='2005' data-aos="fade">
                    <h3>Phase 1: The Beginning (2005)</h3>
                    <p>In 2005, Wave Hotel opened its doors with a vision to offer guests an exceptional seaside experience. Starting as a small establishment, it quickly gained popularity for its high-quality service and stunning views.</p>
                </div>

                <!-- Phase 2 -->
                <div class="timeline-item" date-is='2015' data-aos="fade">
                    <h3>Phase 2: Expansion and Growth (2015)</h3>
                    <p>By 2015, Wave Hotel had expanded significantly, adding luxurious rooms and new amenities such as a rooftop restaurant and a spa, making it a top destination for visitors and tourists.</p>
                </div>

                <!-- Phase 3 -->
                <div class="timeline-item" date-is='2022' data-aos="fade">
                    <h3>Phase 3: Modernization and Sustainability (2022)</h3>
                    <p>In 2022, the hotel underwent a complete modernization, adopting eco-friendly practices by installing solar panels and using sustainable materials, establishing itself as a leader in luxury and sustainability.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
