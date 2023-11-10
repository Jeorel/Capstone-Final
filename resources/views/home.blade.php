@extends('layouts.app')

@section('content')

<div class="container" id="home-con">
    <div class="profile-box">
            <!-- <div class="card" id="home-card"> -->
                <div class="card-header" id="home-dash">
                    
                    <!-- <h4>{{ __('Profile') }}</h4> -->
                    <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="home-logo"> 
                    <img src="{{ asset('images/menu.jpg') }}" alt="menu" class="menu-icon">

            </div>
                <!-- <hr> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    @if ($user->roles_id == 1)
                    <h3 class="user-name">{{ Auth::user()->name }}</h3>
                    <h5>Teacher</h5>
                    

                    @elseif ($user->roles_id == 2)
                    <h3 class="user-name">{{ Auth::user()->name }}</h3>
                    <h5>Student</h5>
                    @endif

                    <button type="button" class="btn btn-primary" onclick='window.location.href = "/activities"' id="btn-home">View activities</button>

                    <!-- <p>Welcome {{ Auth::user()->name }}!</p> -->
                <!-- </div> -->
            </div>
        </div>
</div>



<!-- <div class="container" id="home-con">
    <div class="profile-box">
    <div class="row justify-content-center" id="home-row">
        <div class="col-md-12">
            <div class="card" id="home-card">
                <div class="card-header" id="home-dash">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($user->roles_id == 1)
                    <h2>Welcome {{ Auth::user()->name }}! (Teacher)</h2>
                    @elseif ($user->roles_id == 2)
                    <h2>Welcome {{ Auth::user()->name }}! (Student)</h2>
                    @endif

                    <button type="button" class="btn btn-primary" onclick='window.location.href = "/activities"'>View activities</button>

                    <!-- <p>Welcome {{ Auth::user()->name }}!</p> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</div> 
@endsection
