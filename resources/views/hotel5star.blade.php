<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5-Star Hotels</title>
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
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            color: #fff;
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
            color: #000000;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 24px;
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

        .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .card {
            background-color: #fefdfd;
            margin: 55px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex-basis: 30%;
            position: relative;
        }

        .card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .card .book-now {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-block;
            margin-top: 10px;
        }

        .card .book-now:hover {
            background-color: #0056b3;
        }

        /* About Aqaba Section */
        #About-rentals p {
            text-align: center;
            font-size: 18px;
            line-height: 1.8;
            color: #666;
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

        /* Wel Class */
        .wel {
            color: rgb(254, 155, 75);
            text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
        }

        /* Responsive Improvements */
        @media (max-width: 768px) {
            header .container {
                flex-direction: column;
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
            }
        }

        .logo {
            width: 66px;
        }
    </style>
</head>
<body>
    @include('nav')
    <!-- Hotels Section -->
    <section id="hotels" class="section">
        <div class="container">
            <h2>5-Star Hotels</h2>
            <div class="cards">
                <!-- Card 1 -->
                <div class="card">
                    <img src="{{ asset('img/267383171.jpg') }}" alt="Hotel 1">
                    <h3>Movenpick</h3>
                    <p>Experience the ultimate luxury with breathtaking views and top-notch amenities.</p>
                    <a href="{{ route('Movenpick') }}" class="book-now">Book Now</a>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <img src="{{ asset('img/248726e3_z.webp') }}" alt="Hotel 2">
                    <h3>Hyatt Regency Aqaba</h3>
                    <p>Discover serenity and luxury with world-class services and stunning surroundings.</p>
                    <a href="{{ route('HyattRegencyAqaba') }}" class="book-now">Book Now</a>
                </div>

               
            </div>
        </div>
    </section>

    @include('footer')
</body>
</html>
