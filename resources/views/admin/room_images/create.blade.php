@extends('admin.master', ['title' => 'Add New Image'])

@section('content')
<div class="col-md-8 container mt-4">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add New Image</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.store.image') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_id" value="{{ $roomId }}">

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
