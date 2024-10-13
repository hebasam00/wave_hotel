
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     /* Navbar */
     header {
            background-color: #786387;
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
            font-size: 11px;
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
     </style>
</head>
<body>
    
</body>
</html>
<header>
    <div class="container">
        <img src="{{ asset('img/Sun Wave Logo (1).png') }}" alt="logo" class="logo">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#hotels">Hotels</a></li>
                <li><a href="#yachts">Yachts</a></li>
                <li><a href="#car-rentals">Car Rentals</a></li>
                <li><a href="#Things-rentals ">Things To Do</a></li>
            </ul>
        </nav>
        <div class="search-login-wrapper">
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
            <a href="{{ route('login') }}" class="login-button">Log In</a>
        </div>
    </div>
</header>
