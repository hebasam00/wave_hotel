@extends('admin.master')

@section('content')
<div class="col-lg-12 mt-4 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="card-body">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-header mb-0">Users List</h5>
                    </div>

                    @if(count($users) > 0)
                        <div class="table-responsive text-nowrap m-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Image</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Email Verified At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>
                                            @if($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}" alt="User Image" width="50">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->email_verified_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center m-3">
                            <span class="text-danger">No Users Found</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
