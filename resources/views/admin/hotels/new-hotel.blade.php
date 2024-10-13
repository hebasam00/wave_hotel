@extends('admin.master',['title'=>'New Hotel'])
@section('content')
<div class="col-md-8 container mt-4">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Add New Hotel</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.store.hotel') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" name="image">
            </div>

            <div class="mb-3">
              <label class="form-label">Hotel Name</label>
              <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
              <label class="form-label">Rating</label>
              <div class="col-md">
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="4">
                  <label class="form-check-label" for="inlineRadio1">4 stars</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="5">
                  <label class="form-check-label" for="inlineRadio2">5 stars</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="6">
                  <label class="form-check-label" for="inlineRadio3">6 stars</label>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Location</label>
              <div class="input-group input-group-merge">
                <input type="text" class="form-control" name="location">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea name="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
          </form>

      </div>
    </div>
  </div>
@endsection
