<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Luxury Car Booking Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .car-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 320px;
            margin: 15px;
            text-align: center;
            padding: 20px;
            transition: transform 0.2s;
        }

        .car-card:hover {
            transform: scale(1.05);
        }

        .car-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            max-height: 200px; /* تكبير الصورة */
        }

        .car-title {
            font-size: 1.4em; /* تقليل حجم النص */
            margin: 10px 0;
            color: #333;
        }

        .car-description {
            padding: 0 10px; /* تقليل padding */
            color: #666;
            font-size: 0.9em; /* تقليل حجم النص */
        }

        .car-details {
            margin: 5px 0; /* تقليل المسافة */
            color: #333;
            font-weight: bold;
            font-size: 0.9em; /* تقليل حجم النص */
        }

        .days-input {
            margin: 10px 0;
            width: 50%; /* صغر حجم حقل الإدخال */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.9em; /* تقليل حجم النص */
        }

        .book-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 8px 15px; /* تقليل padding */
            margin: 10px 0; /* تقليل المسافة */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 0.9em; /* تقليل حجم النص */
        }

        .book-button:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
@include('nav')

    <div class="container">
        <div class="car-card">
            <img src="{{ asset('img/OIP (2).jpeg') }}" class="car-image" alt="Luxury Car">
            <h2 class="car-title">Economy Car</h2>
            <p class="car-description">Experience unmatched driving with our luxury car.</p>
            <p class="car-details"><strong>Type:</strong> SUV</p>
            <p class="car-details"><strong>Passengers:</strong> 5</p>
            <p class="car-details"><strong>Price per day:</strong> 200 SAR</p>
            <label for="days">Number of days:</label>
            <input type="number" id="days" class="days-input" min="1" placeholder="Days">
            <button class="book-button">Book Now</button>
        </div>
    </div>
    @include('footer')

</body>
</html>
