@extends('layouts.template')

@section('content')


<div class="container text-center articles pt-4">
    <div class="row gx-5">
        @foreach ($challenges as $challenge)
            <div class="article col m-4">
                <img src="{{ $challenge->image }}" alt="{{ $challenge->judul }}">
                <h3>{{ $challenge->judul }}</h3>
                <p>{{ $challenge->deskripsi }}</p>
                <a href="challengedetail/{{$challenge->id}}">Read More</a>
            </div>
        @endforeach
    </div>
</div>

@endsection