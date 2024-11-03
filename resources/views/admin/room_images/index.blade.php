@extends('admin.master', ['title' => 'Room Images'])
@section('content')
    <div class="col-lg-12 mt-4 mb-4 order-0">
        <div class="card">
            <div class="card-body">
                <h5>Images for Room {{ $roomId }}</h5>
                <form method="POST" action="{{ route('admin.roomImages.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $roomId }}">

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>                <div class="row">
                    @if ($images->isEmpty())
                        <div class="col-12">
                            <p>No images found for this room.</p>
                        </div>
                    @else
                        @foreach ($images as $image)
                            <div class="col-md-3 mb-3">
                                <img src="{{ asset($image->image_path) }}" alt="Room Image" class="img-fluid">
                            </div>
                        @endforeach
                    @endif
                </div>
                <a href="{{ route('admin.rooms') }}" class="btn btn-secondary mt-4">Back to Rooms</a>
            </div>
        </div>
    </div>
@endsection
