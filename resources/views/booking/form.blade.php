@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Book {{ $room->name }}</h2>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <div class="form-group">
            <label for="checkin_date">Check-in Date</label>
            <input type="date" name="checkin_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="checkout_date">Check-out Date</label>
            <input type="date" name="checkout_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="guests">Number of Guests</label>
            <input type="number" name="guests" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Confirm Booking</button>
    </form>
</div>
@endsection
