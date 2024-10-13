<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fine Dining Restaurants in Aqaba</title>
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
   
      
    
    </header>
    @include('nav')  
    <div class="container">
        <section class="section">
            <h2>Fine Dining Restaurants in Aqaba</h2>
            <div class="cards">
                <!-- Restaurant 1 -->
                <div class="card">
                <img src="{{ asset('img/leeeeeeeeeee.jpg') }}" >
                    <h3>Le Gourmet</h3>
                    <p>Experience exquisite French cuisine with a view of the sea.</p>
                    <div class="contact-info">
                        <p><strong>Address:</strong> 123 Seaside Blvd, Aqaba</p>
                        <p><strong>Phone:</strong> +962 7 1234 5678</p>
                        <p><strong>Email:</strong> <a href="mailto:info@legourmet.com">info@legourmet.com</a></p>
                    </div>
                </div>

                <!-- Restaurant 2 -->
                <div class="card">
                <img src="{{ asset('img/sssssssssss.jpg') }}" >
                    <h3>Ocean Delights</h3>
                    <p>Fresh seafood dishes with a stunning ocean view.</p>
                    <div class="contact-info">
                        <p><strong>Address:</strong> 456 Coral Reef St, Aqaba</p>
                        <p><strong>Phone:</strong> +962 7 2345 6789</p>
                        <p><strong>Email:</strong> <a href="mailto:contact@oceandelights.com">contact@oceandelights.com</a></p>
                    </div>
                </div>

                <!-- Restaurant 3 -->
                <div class="card">
                <img src="{{ asset('img/aaaaaaaaaaaa.jpg') }}" >
                    <h3>Sea Breeze</h3>
                    <p>Enjoy Mediterranean flavors with a relaxing ambiance.</p>
                    <div class="contact-info">
                        <p><strong>Address:</strong> 789 Harbor View Ave, Aqaba</p>
                        <p><strong>Phone:</strong> +962 7 3456 7890</p>
                        <p><strong>Email:</strong> <a href="mailto:reservations@seabreeze.com">reservations@seabreeze.com</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
@include('footer')    </footer>
</body>
</html>
