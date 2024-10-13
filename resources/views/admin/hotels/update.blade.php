@extends('admin.master', ['title' => 'Update Hotel'])
@section('content')
    <div class="col-md-8 container mt-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5  class="mb-0">Update Hotel </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.submit.hotel')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <img src="{{ $data->image }}" alt="Hotel Image" width="200" height="200">
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hotel Name</label>
                        <input value="{{ $data->name }}" type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <div class="col-md">
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="rating" id="inlineRadio1"
                                    value="4" {{$data->rating =='4'? 'checked':''}}>
                                <label class="form-check-label" for="inlineRadio1">4 stars</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rating" id="inlineRadio2"
                                    value="5" {{$data->rating =='5'? 'checked':''}}>
                                <label class="form-check-label" for="inlineRadio2">5 stars</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rating" id="inlineRadio3"
                                    value="6" {{$data->rating =='6'? 'checked':''}}>
                                <label class="form-check-label" for="inlineRadio3">6 stars</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <div class="input-group input-group-merge">
                            <input value="{{ $data->location }}" type="text" class="form-control" name="location">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control"> {{ $data->description }} </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
