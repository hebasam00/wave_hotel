<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Yacht Rentals in Aqaba</title>
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


        /* Yacht Section */
        .yacht-section {
            padding: 60px 0;
            text-align: center;
        }

        .yacht-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .yacht-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .yacht-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .yacht-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .yacht-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .yacht-card h3 {
            margin-top: 15px;
            color: #007bff;
        }

        .yacht-card p {
            margin: 10px 0;
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

    </style>
</head>
<body>
    <header>
        @include('nav')
    </header>

    <div class="container">
        <div class="yacht-section">
            <h2>Our Luxury Yachts</h2>
            <div class="yacht-list">
                <!-- Yacht 1 -->
                <div class="yacht-card">
                <img src="{{ asset('img/Luxury-motor-yacht-Galaxy-Photo-by-Jeff-Brown.jpg') }}" >

                    <h3>Yacht A</h3>
                    <p><strong>Type:</strong> Luxury Motor Yacht</p>
                    <p><strong>Price:</strong> $2000 per day</p>
                    <a href="booking.html" class="book-button">Book Now</a>
                </div>

                <!-- Yacht 2 -->
                <div class="yacht-card">
                <img src="{{ asset('img/hgj.jpg') }}" >
                    <h3>Yacht B</h3>
                    <p><strong>Type:</strong> Sailing Yacht</p>
                    <p><strong>Price:</strong> $1500 per day</p>
                    <a href="booking.html" class="book-button">Book Now</a>
                </div>

                <!-- Yacht 3 -->
                <div class="yacht-card">
                <img src="{{ asset('img/ggggggg.jpg') }}" >
                    <h3>Yacht C</h3>
                    <p><strong>Type:</strong> Mega Yacht</p>
                    <p><strong>Price:</strong> $3000 per day</p>
                    <a href="booking.html" class="book-button">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
    @include('footer')
    </footer>
</body>
</html>
