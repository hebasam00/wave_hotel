
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Aqaba Tourist Guide')</title>
<link rel="stylesheet" href="{{ asset('styles.css') }}">
 

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
        }

        .card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* About Aqaba Section */
        #About-rentals p {
            text-align: center;
            font-size: 18px;
            line-height: 1.8;
            color: #666;
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


<body>
@include('nav') 
@include('hero') 
@include('hotels') 
@include('yachts') 
@include('restaurants') 
@include('car-rentals') 
@include('Things') 
@include('footer') 

</body>
</html>
