@extends('frontend.master')

@section('content')
<section class="site-hero inner-page overlay" style="background-image: url({{ asset('frontend/images') }}/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Contact</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="index.html">Home</a></li>
                    <li>&bullet;</li>
                    <li>Contact</li>
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

<section class="section contact-section" id="next">
    <div class="container">
        <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf <!-- Secure the form using CSRF -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Enter your message" rows="6" required></textarea>
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

<section class="section bg-image overlay" style="background-image: url('{{ asset('frontend/images') }}/hero_4.jpg');">
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
