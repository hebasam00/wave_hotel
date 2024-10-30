@extends('admin.master', ['title' => 'Bookings']) <!-- Change title to Bookings -->
@section('booking-active', 'active') <!-- Activate the item in the sidebar -->
@section('content')
    <style>
        .table th, .table td {
            font-size: 12px; /* تغيير حجم الخط */
            padding: 5px; /* تقليل الحشو */
        }
        .table {
            width: auto; /* عرض الجدول تلقائي */
        }
    </style>

    <div class="col-lg-12 mt-4 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="card-body">
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header mb-0">Booking List</h5> <!-- Updated title -->
                            {{-- <a href="{{ route('admin.new.booking') }}" class="btn btn-primary ml-auto">Add New</a> <!-- Add New Booking Button --> --}}
                        </div>
                        @if (count($bookings) > 0) <!-- Check if there are bookings -->
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Check-in Date</th>
                                            <th>Check-out Date</th>
                                            <th>Number of Adults</th>
                                            <th>Number of Children</th>
                                            <th>Room Type</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{ $booking->id }}</td>
                                                <td>{{ $booking->checkin_date }}</td>
                                                <td>{{ $booking->checkout_date }}</td>
                                                <td>{{ $booking->adults }}</td>
                                                <td>{{ $booking->children }}</td>
                                                <td>{{ $booking->room_type }}</td>
                                                <td>{{ $booking->full_name }}</td>
                                                <td>{{ $booking->email }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>
                                                    <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete-item" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div style="text-align: center">
                                <span class="text-danger">No Data</span>
                            </div>
                        @endif
                    </div>
                    <!--/ Basic Bootstrap Table -->
                </div>
            </div>
        </div>
    </div>
@endsection
