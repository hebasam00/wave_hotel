@extends('admin.master', ['title' => 'Edit Booking'])

@section('content')
<div class="col-lg-12 mt-4 mb-4 order-0">
    <div class="card">
        <div class="card-body">
            <h5 class="card-header mb-4">Edit Booking</h5>

            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="checkin_date" class="form-label">Check-in Date</label>
                    <input type="date" id="checkin_date" name="checkin_date" class="form-control" value="{{ $booking->checkin_date }}" required>
                </div>

                <div class="mb-3">
                    <label for="checkout_date" class="form-label">Check-out Date</label>
                    <input type="date" id="checkout_date" name="checkout_date" class="form-control" value="{{ $booking->checkout_date }}" required>
                </div>

                <div class="mb-3">
                    <label for="adults" class="form-label">Number of Adults</label>
                    <input type="number" id="adults" name="adults" class="form-control" value="{{ $booking->adults }}" required>
                </div>

                <div class="mb-3">
                    <label for="children" class="form-label">Number of Children</label>
                    <input type="number" id="children" name="children" class="form-control" value="{{ $booking->children }}">
                </div>

                <div class="mb-3">
                    <label for="room_type" class="form-label">Room Type</label>
                    <input type="text" id="room_type" name="room_type" class="form-control" value="{{ $booking->room_type }}" required>
                </div>

                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" id="full_name" name="full_name" class="form-control" value="{{ $booking->full_name }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $booking->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $booking->phone }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Booking</button>
            </form>
        </div>
    </div>
</div>
@endsection
