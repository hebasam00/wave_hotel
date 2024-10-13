@extends('admin.master', ['title' => 'Hotels'])
@section('hotel-active', 'active')
@section('content')
    <div class="col-lg-12 mt-4 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">

                <div class="card-body">
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header mb-0">All Hotels</h5>
                            <a href="{{ route('admin.new.hotel') }}" class="btn btn-primary ml-auto">Add New</a>
                        </div>
                        @if (count($data) > 0)

                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Raiting</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th>update</th>


                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td><img width="250" src="{{ $item->image }}" /></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->rating }}</td>
                                                <td>{{ $item->location }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <a href="{{ route('admin.update.hotel', ['id' => $item->id]) }}"
                                                        class="btn btn-warning">Update</a>
                                                        <a href="{{ route('admin.delete.hotel', ['id' => $item->id]) }}" class="btn btn-danger delete-item">Delete</a>


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
