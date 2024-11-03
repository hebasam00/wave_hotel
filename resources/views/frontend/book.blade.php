@extends('frontend.master')

@section('content')
    <div class="navbar"> <!-- النافبار -->
        <!-- محتويات النافبار هنا -->
    </div>

    <div class="main-content">
        @if (isset($room))
            <div class="booking-card">
                <h2>Booking Details</h2>

                <form action="{{ route('rooms.confirm') }}" method="POST" class="booking-form">
                    @csrf
                    <input type="hidden" name="room_number" value="{{ $room->room_number }}">
                    <input type="hidden" name="price_per_night" value="{{ $room->price_per_night }}">
                    <input type="hidden" name="total_price" value="{{ $totalPrice }}">

                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" name="full_name" >
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number:</label>
                            <input type="tel" name="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Check-in Date:</label>
                            <input type="date" name="checkin" value="{{ $checkin }}" required>
                        </div>
                        <div class="form-group">
                            <label>Check-out Date:</label>
                            <input type="date" name="checkout" value="{{ $checkout }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Number of Adults:</label>
                            <input type="number" name="adults" value="1" min="1" required>
                        </div>
                        <div class="form-group">
                            <label>Number of Children:</label>
                            <input type="number" name="children" value="0" min="0" required>
                        </div>
                    </div>

                    <button type="submit">Confirm Booking</button>
                </form>

            </div>
        @else
            <p>Room not found.</p>
        @endif
    </div>



    <script>
        document.getElementById('confirmBookingBtn').addEventListener('click', function() {
            const fullName = document.getElementById('full_name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const checkinDate = document.getElementById('checkin').value;
            const checkoutDate = document.getElementById('checkout').value;
            const roomType = '{{ $room->name }}';
            const roomNumber = '{{ $room->room_number }}';
            const totalPrice = '{{ $totalPrice }}';
            const adults = document.getElementById('adults').value;
            const children = document.getElementById('children').value;

            const confirmationMessage = `
                Please confirm your booking details:
                \nFull Name: ${fullName}
                \nRoom Type: ${roomType}
                \nRoom Number: ${roomNumber}
                \nCheck-in Date: ${checkinDate}
                \nCheck-out Date: ${checkoutDate}
                \nTotal Price: $${totalPrice}
                \nNumber of Adults: ${adults}
                \nNumber of Children: ${children}
                \nEmail: ${email}
                \nPhone Number: ${phone}
            `;

            if (confirm(confirmationMessage)) {
                document.getElementById('bookingForm').submit();
            }
        });
    </script>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection

<style>
    body {
        background-image: url('{{ asset('img/pexels-pixabay-261181(1).jpg') }}') !important;
        background-size: cover !important;
        /* جعل الصورة تغطي كامل الشاشة */
        background-position: center;
        /* محاذاة الصورة إلى المنتصف */
        background-repeat: no-repeat !important;
        height: 100vh;
        /* تعيين ارتفاع الجسم ليكون 100% من ارتفاع نافذة العرض */
        margin: 0;
        /* إزالة الهوامش الافتراضية */
    }

    .navbar {
        background-color: #f8f9fa00;
        position: fixed;
        /* اجعل النافبار ثابتة */
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
        /* تأكد من أن قيمة z-index عالية */
    }

    .main-content {
        margin-top: 70px;
        /* تعديل الهامش العلوي بناءً على ارتفاع النافبار */
        position: relative;
        /* إضافة هذه الخاصية */
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #343a40;
    }

    .booking-card {
        max-width: 800px;
        /* عرض البوكس */
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #dddddd00;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.806);
        /* صندوق شفاف قليلاً */
    }

    .booking-card h2 {
        text-align: center;
        color: #0b2746;
        margin-bottom: 15px;
    }

    .booking-info p {
        margin: 5px 0;
        color: #495057;
    }

    .booking-info strong {
        color: #343a40;
        /* لون النص الغامق */
    }

    .booking-form {
        margin-top: 20px;
    }

    .form-row {
        display: flex;
        /* عرض الحقول بجانب بعضها */
        justify-content: space-between;
    }

    .form-group {
        flex: 1;
        margin-right: 10px;
        /* مسافة بين الحقول */
    }

    .form-group:last-child {
        margin-right: 0;
        /* إزالة المسافة للعنصر الأخير */
    }

    .booking-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .booking-form input,
    .booking-form textarea,
    .booking-form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1em;
    }

    .booking-form button {
        background-color: #28a745;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        width: 100%;
        transition: background-color 0.3s, transform 0.3s;
    }

    .booking-form button:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }

    .alert-success {
        margin: 20px auto;
        max-width: 500px;
        padding: 10px;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        color: #155724;
        text-align: center;
    }
</style>
