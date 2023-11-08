@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Trainer Detail</div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{$trainer->profile_picture}}" class="img-fluid" style="max-width: 100px;" alt="Profile Picture">
                    </div>
                    <h2 class="text-center">{{$trainer->name}}</h2>
                    <p class="text-center">Age: {{$trainer->age}}</p>
                    <p class="text-center">{{$trainer->bio}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
