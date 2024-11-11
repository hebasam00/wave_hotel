<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <!-- Logo -->
        <a href="{{ route('admin.dashbord') }}" class="app-brand-link">
            <img src="{{ asset('img/Orange Cream Simple Modern Initial W Logo(2).png') }}" alt="Logo" style="width: 40px; height: 40px;">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @yield('dashboard-active')">
            <a href="{{ route('admin.dashbord') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Hotels -->
        <li class="menu-item @yield('hotel-active')">
            <a href="{{ route('admin.hotels') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Hotels</div>
            </a>
        </li>

        <!-- Rooms -->
        <li class="menu-item @yield('room-active')">
            <a href="{{ route('admin.rooms') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Rooms</div>
            </a>
        </li>

        <!-- Contact -->
        <li class="menu-item @yield('contact-active')">
            <a href="{{ route('admin.contact') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-phone"></i>
                <div data-i18n="Contact">Contact</div>
            </a>
        </li>

        <!-- Users -->
        <li class="menu-item @yield('user-active')">
            <a href="{{ route('admin.users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>

        <!-- Booking -->
        <li class="menu-item @yield('booking-active')">
            <a href="{{ route('bookings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Bookings">Manage Bookings</div>
            </a>
        </li>
    </ul>
</aside>
