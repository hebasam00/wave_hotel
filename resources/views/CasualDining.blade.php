<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casual Dining Restaurants in Aqaba</title>
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

        .section {
            padding: 60px 0;
            text-align: center;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px; /* Space between cards */
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card h3 {
            margin-top: 15px;
            color: #007bff;
        }

        .card p {
            margin: 10px 0;
        }

        .card .contact-info {
            margin-top: 10px;
        }

        .card .contact-info p {
            margin: 5px 0;
        }

        .card a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            @include('nav')
        </nav>
    </header>

    <div class="container">
        <section class="section">
            <h2>Casual Dining Restaurants in Aqaba</h2>
            <div class="cards">
                <!-- Restaurant 1 -->
                <div class="card">
                    <img src="img/casual1.jpg" alt="Casual Restaurant 1">
                    <h3>The Cozy Corner</h3>
                    <p>Relaxed atmosphere with comfort food and friendly service.</p>
                    <div class="contact-info">
                        <p><strong>Address:</strong> 321 Main St, Aqaba</p>
                        <p><strong>Phone:</strong> +962 7 5678 1234</p>
                        <p><strong>Email:</strong> <a href="mailto:info@thecozycorner.com">info@thecozycorner.com</a></p>
                    </div>
                </div>

                <!-- Restaurant 2 -->
                <div class="card">
                    <img src="img/casual2.jpg" alt="Casual Restaurant 2">
                    <h3>Family Feast</h3>
                    <p>Enjoy a hearty meal with family in a laid-back setting.</p>
                    <div class="contact-info">
                        <p><strong>Address:</strong> 654 Relax Ave, Aqaba</p>
                        <p><strong>Phone:</strong> +962 7 6789 1234</p>
                        <p><strong>Email:</strong> <a href="mailto:contact@familyfeast.com">contact@familyfeast.com</a></p>
                    </div>
                </div>

                <!-- Restaurant 3 -->
                <div class="card">
                    <img src="img/casual3.jpg" alt="Casual Restaurant 3">
                    <h3>Chill & Grill</h3>
                    <p>Casual dining with a focus on grilled favorites and casual eats.</p>
                    <div class="contact-info">
                        <p><strong>Address:</strong> 987 Chill Blvd, Aqaba</p>
                        <p><strong>Phone:</strong> +962 7 7890 1234</p>
                        <p><strong>Email:</strong> <a href="mailto:reservations@chillgrill.com">reservations@chillgrill.com</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        @include('footer')
    </footer>
</body>
</html>
