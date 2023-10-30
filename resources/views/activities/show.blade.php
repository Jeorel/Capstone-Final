@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Id No.{{ $activity->id }}</div>

                <div class="card-body container">
                        <div class="row justify-content-start">
                            @if ($user->roles_id == 2)
                            <div class="col-1">
                                <button type="button" class="btn btn-primary" onclick='window.location.href = "/activity/{{ $activity->id }}/edit"'>Edit</button>
                            </div>
                            <div class="col-2">
                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Activity</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete activity {{ $activity->activity }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="/activity/{{ $activity->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick='window.location.href = "/activities"'>Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-secondary" onclick='window.location.href = "/activities"'>Back</button>
                            </div><br><br>
                            @elseif ($user->roles_id == 1)
                            <!-- <div class="col-2">
                                <button type="button" class="btn btn-primary">Complete</button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-primary">Incomplete</button>
                            </div> -->
                            <div class="col-1">
                                <button type="button" class="btn btn-secondary" onclick='window.location.href = "/activities"'>Back</button>
                            </div>
                        </div>
                            @endif
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <h3>{{ $activity->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $activity->description }}</p>
                        </div>
                    </div><br>
                    @if(session('success'))
                    <h6 class="alert alert-success">
                    {{ session('success') }}
                    </h6>
                    @endif

                    <!-- <div class="card">
                        <img src="#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $activity->title }}</h5>
                            <p class="card-text">{{ $activity->description }}</p>

                            @if ($user->roles_id == 1)
                            <a href="#" class="btn btn-primary">Complete</a>
                            <a href="#" class="btn btn-primary">Incomplete</a>
                            @elseif ($user->roles_id == 2)
                            @endif

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






