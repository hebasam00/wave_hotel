@extends('admin.master', ['title' => 'New Room'])
@section('content')
    <div class="col-md-8 container mt-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add New Room</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.store.room')}}" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label class="form-label">Room Number</label>
                        <input type="text" class="form-control" name="room_number">
                    </div>



                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Room Type</label>
                        <select name="room_type" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <optionn value="Available" selected>Select Type</optionn>
                            <option value="single">Single Room</option>
                            <option value="double">Double Room</option>
                            <option value="family">Family Room</option>


                        </select>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <div class="input-group input-group-merge">
                            <input type="number" class="form-control" name="price_per_night">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Room Status</label>
                        <select name="room_status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <optionn value="Available" selected>Select Status</optionn>
                            <option value="Available">Available</option>
                            <option value="Reserved">Reserved</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect12" class="form-label">Select Hotel</label>
                        <select name="hotel_id" class="form-select" id="exampleFormControlSelect12" aria-label="Default select example">
                            <optionn value="Available" selected>Select Hotel</optionn>
                            @foreach ($hotels as $hotel)
                                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                </form>

            </div>
        </div>
    </div>
@endsection
