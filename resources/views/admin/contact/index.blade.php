@extends('admin.master', ['title' => 'Contacts'])
@section('contact-active', 'active')

@section('content')
    <div class="col-lg-12 mt-4 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="card-body">
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header mb-0">Contacts Section</h5>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success m-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (count($contacts) > 0)
                            <div class="table-responsive text-nowrap m-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td>{{ $contact->id }}</td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td>{{ $contact->created_at }}</td>
                                                <td>
                                                    <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div style="text-align: center" class="m-3">
                                <span class="text-danger">No Data</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
