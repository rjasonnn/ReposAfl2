@extends('layouts.template')

@section('content')

<style>

/* Add this to your existing CSS or create a new stylesheet */
.article img {
    height: 200px; /* Set the desired height or remove this line to maintain aspect ratio */
    object-fit: cover;
}


</style>

<div class="container text-center articles pt-4">
    <div class="row gx-5">
        @foreach ($challenges as $challenge)
            <div class="article col m-4">
                <img src="{{ $challenge->image }}" alt="{{ $challenge->judul }}" >
                <h3>{{ $challenge->judul }}</h3>
                <p>{{ $challenge->deskripsi }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection