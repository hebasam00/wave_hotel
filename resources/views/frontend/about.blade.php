@extends('frontend.master')

@section('content')
<section class="site-hero inner-page overlay" style="background-image: url({{asset('frontend/images/hero_4.jpg')}})" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">About Us</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="index.html">Home</a></li>
            <li>&bullet;</li>
            <li>About</li>
          </ul>
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
          <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
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
          <div class="timeline-item" date-is='2019' data-aos="fade">
            <h3>Phase 1: The Beginning (2005)</h3>
            <p>In 2005, Wave Hotel opened its doors for the first time with a vision to provide guests with an exceptional experience by the sea...</p>
          </div>
          <!-- Remaining timeline items -->
        </div>
      </div>
    </div>
</div>

<section class="section bg-image overlay" style="background-image: url('{{asset('frontend/images/hero_4.jpg')}}');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
          <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
          <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
        </div>
      </div>
    </div>
</section>

@endsection
