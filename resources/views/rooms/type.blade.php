@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Available {{ ucfirst($type) }} Rooms</h2>
    <div class="row">
        @foreach($rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/images/' . $room->image) }}" class="card-img-top" alt="Room Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->name }}</h5>
                        <p class="card-text">{{ $room->description }}</p>
                        <p><strong>Price: ${{ $room->price }} per night</strong></p>
                        <a href="{{ route('booking.form', $room->id) }}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
