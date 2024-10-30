<!-- إضافة خط Poppins في قسم <head> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <header class="site-header js-site-header" style="background-color: rgba(0, 0, 0, 0.5); padding: 5px 0;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-4 site-logo text-left" data-aos="fade">
                    <a href="{{ route('home') }}">
                        <img src="img/Orange Cream Simple Modern Initial W Logo(1).png" alt="Wave Hotel Logo" style="max-width: 100px; height: auto;">
                    </a>
                </div>
                <div class="col-6 col-lg-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-collapse" id="navbarNav">
                            <ul class="list-unstyled menu navbar-nav d-flex flex-row justify-content-end" style="gap: 20px;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('home') }}" style="color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('rooms') }}" style="color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}" style="color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}" style="color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white; font-family: 'Poppins', sans-serif; font-weight: 400;">Register</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
