@extends('frontend.master')

@section('content')

    <h1 class="page-title">Rooms of Type: {{ $type }}</h1>

    @if ($rooms->isEmpty())
        <p>No available rooms of this type.</p>
    @else
        <div class="rooms-container">
            @foreach ($rooms as $room)
                <div class="room-card">
                    <div class="room-image-container">
                        @if ($room->images->isNotEmpty())
                            <img src="{{ asset($room->images->first()->image_path) }}" alt="{{ $room->name }}" class="room-image">
                        @else
                            <img src="{{ asset('images/default-room.jpg') }}" alt="Default Room" class="room-image">
                        @endif
                    </div>
                    <div class="room-details">
                        <h2 class="room-name">{{ $room->name }}</h2>
                        <p class="room-price">Price: <span>${{ $room->price_per_night }}</span> per night</p>
                        <p class="room-description">{{ $room->description }}</p>
                        <a href="{{ route('rooms.book', ['id' => $room->id, 'checkin' => request('checkin_date'), 'checkout' => request('checkout_date'), 'room_type' => $type]) }}" class="book-button">Book Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

@endsection

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #f8f9fa00;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    .page-title {
        text-align: center;
        margin: 80px 0 30px; /* إضافة مسافة أعلى لتعويض النافبار الثابت */
        font-size: 2em;
        color: #333;
    }

    .rooms-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px auto;
        max-width: 1200px;
    }

    .room-card {
        border: 1px solid #ddd;
        border-radius: 15px;
        overflow: hidden;
        width: calc(33.33% - 20px);
        margin: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .room-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .room-image-container {
        position: relative;
        overflow: hidden;
        height: 200px;
    }

    .room-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }

    .room-image-container:hover .room-image {
        transform: scale(1.1);
    }

    .room-details {
        padding: 15px;
        background-color: #fff;
        text-align: center;
    }

    .room-name {
        font-size: 1.5em;
        margin: 0 0 10px;
        color: #333;
    }

    .room-price {
        color: #28a745;
        font-weight: bold;
        margin: 0 0 10px;
    }

    .room-description {
        font-size: 0.9em;
        margin: 0 0 15px;
        color: #666;
    }

    .book-button {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
        display: inline-block;
    }

    .book-button:hover {
        background-color: #218838;
        transform: translateY(-2px);
    }
</style>
