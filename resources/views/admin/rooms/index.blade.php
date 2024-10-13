@extends('admin.master', ['title' => 'Rooms'])
@section('room-active', 'active')
@section('content')
    <div class="col-lg-12 mt-4 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">

                <div class="card-body">
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header mb-0">All Rooms</h5>
                            <a href="{{ route('admin.new.room') }}" class="btn btn-primary ml-auto">Add New</a>
                        </div>
                        @if (count($data) > 0)

                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Room Type</th>
                                            <th>Price per Night</th>
                                            <th>Room Status</th>
                                            <th>Hotel</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($data as $room) <!-- تأكد من أن $rooms يتم تمريره من الـ Controller -->
                                            <tr>
                                                <td>{{ $room->room_number }}</td>
                                                <td>{{ $room->room_type }}</td>
                                                <td>{{ $room->price_per_night }}</td>
                                                <td>{{ $room->room_status }}</td>
                                                <td>{{ $room->hotel_id }}</td> <!-- تأكد من تعريف العلاقة في الموديل -->
                                                <td>
                                                    <a href="{{ route('admin.update.room', ['id' => $room->id]) }}" class="btn btn-warning">Update</a>
                                                    <a href="{{ route('admin.delete.room', ['id' => $room->id]) }}" class="btn btn-danger delete-item">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->
                @else
                    <div style="text-align: center">
                        <span class="text-danger">No Data</span>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
