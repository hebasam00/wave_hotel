<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Yacht Rentals in Aqaba</title>
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
            margin-right: 20px; /* Space between logo and navigation */
        }

        header nav {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        header nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 20px; /* Space between navigation items */
        }

        header nav ul li {
            margin: 0; /* No margin for list items */
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
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
            margin-left: 20px; /* Space between navigation and login button */
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
        <div class="container">
            <img src="logo.png" alt="Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <a href="login.html" class="login-button">Login</a>
        </div>
    </header>

    <div class="container">
        <div class="yacht-section">
            <h2>Our Speed Yachts</h2>
            <div class="yacht-list">
                <!-- Yacht 1 -->
                <div class="yacht-card">
                <img src="{{ asset('img/nnnnnnn.jpg') }}" >
                    <h3>Speed Yacht A</h3>
                    <p><strong>Type:</strong> High-Speed Cruiser</p>
                    <p><strong>Price:</strong> $2500 per day</p>
                    <a href="booking.html" class="book-button">Book Now</a>
                </div>

                <!-- Yacht 2 -->
                <div class="yacht-card">
                <img src="{{ asset('img/ppppp.jpg') }}" >
                    <h3>Speed Yacht B</h3>
                    <p><strong>Type:</strong> Performance Yacht</p>
                    <p><strong>Price:</strong> $2200 per day</p>
                    <a href="booking.html" class="book-button">Book Now</a>
                </div>

                <!-- Yacht 3 -->
                <div class="yacht-card">
                <img src="{{ asset('img/ggggggg.jpg') }}" >
                    <h3>Speed Yacht C</h3>
                    <p><strong>Type:</strong> Racing Yacht</p>
                    <p><strong>Price:</strong> $2700 per day</p>
                    <a href="booking.html" class="book-button">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Speed Yacht Rentals. All Rights Reserved.</p>
    </footer>
</body>
</html>
