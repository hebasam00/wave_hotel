<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyatt Regency Aqaba</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 90%;
            margin: auto;
            max-width: 1200px;
        }

        /* Navbar */
        header {
            background-color: #007bff;
            padding: 20px 0;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .container {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        header .logo {
            max-height: 40px; /* Adjusted logo size */
            margin-right: auto;
        }

        header nav {
            flex-grow: 1;
            text-align: center;
        }

        header nav ul {
            display: inline-flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        header .search-login-wrapper {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        header .search-bar {
            margin-right: 10px;
            display: flex;
            align-items: center;
        }

        header .search-bar input {
            padding: 10px;
            width: 200px;
            border-radius: 5px;
            border: none;
        }

        header .search-bar button {
            padding: 10px 15px;
            background-color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 5px;
        }

        header .login-button {
            background-color: #fff;
            color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: auto; /* Align to the right */
        }

        header .login-button:hover {
            background-color: #0056b3;
            color: #fff;
        }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: url('@yield('hero-image')') no-repeat center center / cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 24px;
        }

        /* Hotel Details */
        .hotel-details {
            padding: 60px 0;
            background-color: #fff;
            text-align: center;
        }

        .hotel-details h1 {
            margin-bottom: 20px;
            color: #007bff;
        }

        .hotel-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .hotel-gallery img {
            width: 30%;
            margin: 10px;
            border-radius: 10px;
        }

        /* Sections */
        .section {
            padding: 60px 0;
            text-align: center;
            background-color: #f9f9f9;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #007bff;
        }

        /* Services Section */
        .services {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 0;
        }

        .services h2 {
            margin-bottom: 30px;
            color: #007bff;
        }

        .service-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .service-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px; /* Add margin-bottom to separate image from text */
        }

        .service-item h3 {
            margin-bottom: 10px;
            color: #007bff;
        }

        .service-item p {
            margin: 0;
        }

        /* Rooms Section */
        .room-list {
            display: flex;
            flex-direction: row; /* Display rooms side by side */
            flex-wrap: wrap; /* Allow wrapping of items if they don't fit in one row */
            gap: 20px; /* Adjust gap between items */
            justify-content: center; /* Center items horizontally */
        }

        .room-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%; /* Ensure cards take full width of container */
            max-width: 400px; /* Restrict max width of cards */
        }

        .room-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            object-fit: cover; /* Maintain aspect ratio */
        }

        .room-item h3 {
            margin-top: 0;
        }

        .book-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .book-button:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer .social-links a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        footer .social-links a:hover {
            text-decoration: underline;
        }

        /* Responsive Improvements */
        @media (max-width: 768px) {
            header .container {
                flex-direction: column;
                align-items: center;
            }

            header nav ul {
                flex-direction: column;
                align-items: center;
            }

            header .search-login-wrapper {
                margin-top: 10px;
                justify-content: center;
            }

            header .logo {
                margin-bottom: 10px;
                max-height: 30px; /* Adjusted for smaller screens */
            }

            .hotel-gallery img {
                width: 90%;
            }

            .room-list {
                flex-direction: column; /* Stack items vertically on small screens */
            }

            .room-item {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .room-item img {
                width: 100%;
                height: auto;
            }

            .services {
                flex-direction: column;
                align-items: center;
            }

            .service-items {
                flex-direction: column;
                align-items: center;
            }

            .service-item {
                width: 100%;
                max-width: 600px;
            }

            .service-item img {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    @include('nav')
    <div class="container">
        <div class="hotel-details">
            <h1>Hyatt Regency Aqaba</h1>
            <div class="hotel-gallery">
                <img src="{{ asset('img/Hyatt-Regency-Aqaba-P003-Tree-Function-Area.16x9.webp') }}" alt="hotel1">
                <img src="{{ asset('img/Hyatt-Regency-Aqaba-P015-Vista-Lounge-and-Bar-Sunset.4x3.webp') }}" alt="hotel2">
                <img src="{{ asset('img/Hyatt-Regency-Aqaba-P018-Regency-Club-Terrace.16x9.webp') }}" alt="hotel3">
            </div>
        </div>

        <div class="section services">
            <h2>Our Services</h2>
            <div class="service-items">
                <div class="service-item">
                    <h3>24/7 Room Service</h3>
                    <p>Enjoy round-the-clock room service with a diverse menu.</p>
                </div>
                <div class="service-item">
                    <h3>Spa & Wellness</h3>
                    <p>Relax and rejuvenate with our luxurious spa and wellness facilities.</p>
                </div>
                <div class="service-item">
                    <h3>Fitness Center</h3>
                    <p>Stay fit with our state-of-the-art fitness center, available to all guests.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Rooms</h2>
            <div class="room-list">
                <div class="room-item">
                    <img src="{{ asset('img/DSC07003-HDR-Edit-Edit-1.jpg') }}" alt="singleRoom">
                    <div>
                        <h3>Single Room</h3>
                        <p><strong>Price:</strong> $180</p><br>
                        <a href="#" class="book-button">Book Now</a>
                    </div>
                </div>

                <div class="room-item">
                    <img src="{{ asset('img/DDNSM_1-1.jpg') }}" alt="doubleRoom">
                    <div>
                        <h3>Double Room</h3>
                        <p><strong>Price:</strong> $180</p><br>
                        <a href="#" class="book-button">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include footer here -->
    @include('footer')
</body>
</html>
