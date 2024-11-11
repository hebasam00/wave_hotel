@extends('admin.master',['title'=>'Dashboard'])
@section('dashboard-active','active')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <!-- Main Card -->
      <div class="col-12 mb-4">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations {{Auth::user()->name}}! 🎉</h5>
                        <p class="mb-4">
                            You have achieved a <span class="fw-bold">72%</span> increase in bookings today. Check out your updated stats in your profile.
                        </p>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Stats</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img
                            src="{{asset('assets')}}/assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Stats"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>


      <!-- Display Cards for Different Sections with Background Images and Blue Overlay -->
      <div class="col-12">
        <div class="row">
          <!-- Rooms -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card" style="background-image: linear-gradient(rgba(105, 108, 255, 0.6), rgba(105, 108, 255, 0.6)), url('{{asset('img/2.-Superior-King-Sea-view-Double1-768x512.jpg')}}'); background-size: cover; background-position: center;">
              <div class="card-body text-white d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <span class="fw-semibold d-block mb-1">Rooms</span>
                @php
                    $rooms = \App\Models\Room::count();
                @endphp
                <h3 class="card-title mb-2" style="font-size: 2em; color: #FFD700; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);">{{$rooms}}</h3>
              </div>
            </div>
          </div>

          <!-- Contacts -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card" style="background-image: linear-gradient(rgba(105, 108, 255, 0.6), rgba(105, 108, 255, 0.6)), url('{{asset('img/pexels-jeshoots-4831.jpg')}}'); background-size: cover; background-position: center;">
              <div class="card-body text-white d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <span class="fw-semibold d-block mb-1">Contacts</span>
                @php
                    $contacts = \App\Models\Contact::count();
                @endphp
                <h3 class="card-title mb-2" style="font-size: 2em; color: #FFD700; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);">{{$contacts}}</h3>
              </div>
            </div>
          </div>

          <!-- Users -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card" style="background-image: linear-gradient(rgba(105, 108, 255, 0.6), rgba(105, 108, 255, 0.6)), url('{{asset('img/pexels-cottonbro-3585095.jpg')}}'); background-size: cover; background-position: center;">
              <div class="card-body text-white d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <span class="fw-semibold d-block mb-1">Users</span>
                @php
                    $users = \App\Models\User::count();
                @endphp
                <h3 class="card-title mb-2" style="font-size: 2em; color: #FFD700; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);">{{$users}}</h3>
              </div>
            </div>
          </div>

          <!-- Manage Bookings -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card" style="background-image: linear-gradient(rgba(105, 108, 255, 0.6), rgba(105, 108, 255, 0.6)), url('{{asset('img/pexels-mikhail-nilov-7820326.jpg')}}'); background-size: cover; background-position: center;">
              <div class="card-body text-white d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <span class="fw-semibold d-block mb-1">Manage Bookings</span>
                @php
                    $bookings = \App\Models\Booking::count();
                @endphp
                <h3 class="card-title mb-2" style="font-size: 2em; color: #FFD700; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);">{{$bookings}}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
