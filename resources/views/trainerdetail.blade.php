@extends('layouts.template')

@section('content')
<div class="container card mx-5 article" id="creativity">
    <div class="row">
      <div class="col pt-5 text-center">
        <div class="rounded-circle mx-auto my-2" style="width: 150px; height: 150px; overflow: hidden;">
          <img src="{{$trainer->profile_picture}}" alt="..."  style="width: 100%; max-width: 150px; height: 150px; border-radius: 50%; margin: 0 auto; object-fit:cover">
          
        </div>

        <h2>{{$trainer->name}}</h2>
        <p><small>Age: {{$trainer->age}} </small></p>

        <a href="">

            <img src="https://1000logos.net/wp-content/uploads/2017/02/ig-logo.png" style="width: 8rem; ">
        </a>

        
      </div>
      <div class="col pt-4">
        <p class="p-4">{{$trainer->bio}}</p>
      </div>
    </div>
</div>
@endsection

