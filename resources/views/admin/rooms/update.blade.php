@extends('admin.master', ['title' => 'Update Room'])
@section('content')
    <div class="col-md-8 container mt-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Update Hotel </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.submit.room') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">

                    <div class="mb-3">
                        <label class="form-label">Room Number</label>
                        <input type="text" value="{{ $data->room_number }}" class="form-control" name="room_number">
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Room Type</label>
                        <div class="input-group input-group-merge">
                            <input type="text" value="{{ $data->room_type }}" class="form-control" name="room_type">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <div class="input-group input-group-merge">
                            <input type="number" value="{{ $data->price_per_night }}" class="form-control"
                                name="price_per_night">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Room Status</label>
                        <select name="room_status" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option {{ $data->room_status == 'Available' ? 'selected' : '' }} value="Available">Available
                            </option>
                            <option {{ $data->room_status == 'Reserved' ? 'selected' : '' }} value="Reserved">Reserved
                            </option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect12" class="form-label">Select Hotel</label>
                        <select name="hotel_id" class="form-select" id="exampleFormControlSelect12"
                            aria-label="Default select example">
                            <option value="" disabled {{ !$data->hotel_id ? 'selected' : '' }}>Select Hotel</option>
                            @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}" {{ $data->hotel_id == $hotel->id ? 'selected' : '' }}>
                                    {{ $hotel->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                </form>

            </div>
        </div>
    </div>
@endsection
