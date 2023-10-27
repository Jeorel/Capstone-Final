@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $activity->activity }}</div>

                <div class="card-body">
                    <p class="text-right">
                        <div class="row g-3">
                            <div class="col-sm">
                                <button type="button" class="btn btn-primary" onclick='window.location.href = "/activity/{{ $activity->id }}/edit"'>Edit Activity</button>
                            </div>
                            <div class="col-sm">
                                <form action="/activity/{{ $activity->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick='window.location.href = "/activities"'>Delete Activity</button>
                                </form>
                            </div>
                        </div>
                    </p>

                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $activity->title }}</h5>
                            <p class="card-text">{{ $activity->description }}</p>
                            <a href="#" class="btn btn-primary">Approve</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection






