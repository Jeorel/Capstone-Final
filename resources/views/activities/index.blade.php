@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Activities') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if ($user->roles_id == 1)
                    <p>Teacher</p>
                    @elseif ($user->roles_id == 2)
                    <p>Student</p>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" onclick='window.location.href = "/activity"'>Create an activity</button>
                    </p>
                    @endif





                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Activity Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                            <tr>
                            <th scope="row">{{ $activity->id }}</th>
                            <td><a href="/activity/{{ $activity->id }}">{{ $activity->title }}</a></td>
                            <td>{{ $activity->description }}</td>
                            <td>{{ $activity->status }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    @if(session('success'))
                    <h6 class="alert alert-success">
                        {{ session('success') }}
                    </h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






