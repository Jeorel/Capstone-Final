@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
        <button type="button" class="btn btn-primary" onclick='window.location.href = "/home"' id="btn-index">Back</button>

            <div class="card" id="card-index">
                <div class="card-header">

                    @if ($user->roles_id == 1)
                    <h1 class="header-table-teacher">{{ __('Activities') }}</h1>
                    @elseif ($user->roles_id == 2)
                    <h1 class="text-right">{{ __('Activities') }}<button type="button" class="btn btn-success" onclick='window.location.href = "/activity"' id="btn-create">Create an activity</button>
                    
                </h1>
                    @endif

                    

                </div>

                <div class="card-body" id="table-whole">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table" id="table-index">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Owner</th>

                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">File</th>
                            <th scope="col">Activity Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                            <tr>
                            <th scope="row">{{ $activity->id }}</th>
                            <td><a href="/activity/{{ $activity->id }}">{{ $activity->name }}</a></td>

                            <td>{{ $activity->title }}</td>
                            <td>{{ $activity->description }}</td>
                            <!-- <td>{{ $activity->file }}</td> -->
                            <td>
                                <img src="{{URL::asset('/storage/images/'.substr($activity->file, 14))}}" height="50" width="50" class="img-index"></img>
                            </td>
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






