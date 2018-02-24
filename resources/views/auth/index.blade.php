@extends('layouts.app')

@section('content')

    {{--  <img src = "/public/uploads/files/{{Auth::user()->photoimage}}" alt="chania">  --}}
    <div class = "container">
        @foreach($wish as $wishs)
            <div class="card" style="width: 20rem; float:left">
                    <div class="card-block" style="margin-left:40px">
                      <h4 class="card-title">{{$wishs->wishlist_name}}</h4>
                      <p class="card-text"><strong>Wisher's Note: </strong>{{$wishs->wishlist_desc}}</p>
                      <a href="#" class="btn btn-primary" style="enabled:false">By: {{$wishs->user->name}} </a>
                    </div>
                  </div>
        @endforeach
    </div>

@endsection
