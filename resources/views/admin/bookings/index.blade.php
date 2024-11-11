@extends('admin.master', ['title' => 'Bookings'])
@section('hotel-active', 'active')
@section('content')
    <div class="col-lg-12 mt-4 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="card-body">
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header mb-0">All Bookings</h5>
                            {{-- إذا كنت ترغب في إضافة زر لحذف جميع الحجوزات، يمكنك إضافة زر هنا --}}
                            {{-- <form action="{{ route('admin.bookings.destroyAll') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete all bookings?')">Delete All</button>
                            </form> --}}
                        </div>

                        @if (count($bookings) > 0)
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Check-in</th>
                                            <th>Check-out</th>
                                            <th>Adults</th>
                                            <th>Children</th>
                                            <th>Room Number</th>
                                            <th>Total Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>{{ $booking->id }}</td>
                                                <td>{{ $booking->full_name }}</td>
                                                <td>{{ $booking->email }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->checkin_date }}</td>
                                                <td>{{ $booking->checkout_date }}</td>
                                                <td>{{ $booking->adults }}</td>
                                                <td>{{ $booking->children }}</td>
                                                <td>{{ $booking->room_number }}</td>
                                                <td>{{ $booking->total_price }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('admin.edit.booking', ['id' => $booking->id]) }}" class="btn btn-warning btn-sm">Update</a> --}}

                                                    {{-- <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div style="text-align: center">
                                <span class="text-danger">No Bookings Available</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
