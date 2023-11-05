@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
@endsection
