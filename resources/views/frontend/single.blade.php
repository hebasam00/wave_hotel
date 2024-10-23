@extends('frontend.master')

@section('content')
<section class="site-hero inner-page overlay" style="background-image: url({{asset('img/pexels-ken123films-635041.jpg')}})" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">Single Rooms</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="index.html">Home</a></li>
            <li>&bullet;</li>
            <li>Single Rooms</li>
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

<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>

            </div>
        </div>

        <div class="row">
            @foreach ($data as $item)
            <div class="col-md-4" data-aos="fade-up">
                    <figure class="img-wrap">
                        <img src="{{ asset('frontend/images/img_1.jpg') }}" alt="Free website template" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                        <h2>Room Number: {{$item->room_number}}</h2>
                        <span class=" letter-spacing-1">Price: {{$item->price_per_night}} $</span>
                    </div>
            </div>
            @endforeach
        </div>







        </div>
    </div>
</section>


@endsection
