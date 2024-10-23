@extends('admin.master', ['title' => 'Room Images'])

@section('content')

<div class="col-md-8 container mt-4">

    <div class="card mb-4">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Room Images</h5>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>

        <div class="card-body">

            <!-- Form to add new image -->
            <form method="POST" action="{{ route('admin.store.image') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_id" value="{{ $roomId }}"> <!-- Hidden field to store room ID -->

                <div class="mb-3">
                    <label class="form-label">Add New Image</label>
                    <input type="file" class="form-control" name="image"  required>
                </div>

                <button type="submit" class="btn btn-primary">Add Image</button>
            </form>

            <hr> <!-- Divider between form and images -->

            <div class="row mt-4">
                @if($roomImages->isEmpty())
                    <p>No images available for this room.</p>
                @else
                    @foreach($roomImages as $image)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{ asset($image->image_path) }}" class="card-img-top" alt="Room Image">
                                <div class="card-body">

                                        <a href="{{ route('room.images.destroy', ['id' => $image->id]) }}" type="submit" class="btn btn-danger delete-item">Delete Image</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            {{ $roomImages->links() }} <!-- Pagination links -->

        </div>

    </div>

</div>

@endsection
