@extends('layouts.template')

@section('content')

<style>

.card img {
  width: 100%;
  max-width: 100px;
  height: 100px;
  border-radius: 50%;
  margin: 0 auto;
  object-fit: cover;
}
.card {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
}

</style>
<div class="container d-flex flex-wrap justify-content-evenly creativity mt-5" id="creativity">
@foreach ($trainers as $trainer )

<div class="article mb-4 p-3" style="width: 440px;">
    <div class="row">
      <div class="col">
        <a href="trainerdetail/{{$trainer->id}}">
          <img src="{{$trainer->profile_picture}}"  alt="..." style="width: 100%; max-width: 150px; height: 150px; border-radius: 50%; margin: 0 auto; object-fit:cover">

        </a>
      </div>
      <div class="col m-4">
        <div class="card-body">
          <h5 class="card-title">{{$trainer->name}}</h5>
          <p class="card-text">Age : {{$trainer->age}}</p>
        
        </div>
      </div>
    </div>
  </div>
  
@endforeach


   

</div>
@endsection
