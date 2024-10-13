<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Restaurants in Aqaba</title>
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
            overflow: hidden; /* Ensure the image doesn't overflow */
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

        .btn-book {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <section id="restaurants" class="section">
        <div class="container">
            <h2>Popular Restaurants in Aqaba</h2>
            <div class="cards">
                <!-- Restaurant 1 -->
                <div class="card">
                    <a href="{{ route('fine') }}" class="btn-book">
                        <img src="{{ asset('img/OIP.jpg') }}" alt="Restaurant 1" />
                        <h3>Fine Dining</h3> 
                        <p>Exceptional cuisine with a sophisticated atmosphere.</p>
                    </a>
                </div>
                <!-- Restaurant 2 -->
                <div class="card">
                    <a href="{{ route('casual') }}" class="btn-book">
                        <img src="{{ asset('img/OIP (1).jpg') }}" alt="Restaurant 2" />
                        <h3>Casual Dining</h3>
                        <p>Relaxed setting with delicious comfort food.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
