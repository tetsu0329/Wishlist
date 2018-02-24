@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @include('layouts.messages')
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{--  <img style = "width:100%; height:150px" src = "/storage/userImages/{{Auth::user()->photoimage}}" alt="Chania">  --}}
                    <ul>
                    @if(count($wish)>0)
                    @foreach ($wish as $wishs) 
                             <div class = "row">
                                <div class = "col-md-8 col-sm-8">
                                    <h3>{{$wishs->wishlist_name}}</h3>
                                    <small>Note: {{$wishs->wishlist_desc}}</small><br><br>
                                    <a href = "wish/{{$wishs->wishlist_id}}" class = "btn btn-success">Edit Wish</a>   
                                </div>  
                            </div>

                    @endforeach
                    @else
                    <a href = "/wish/create" class = "btn btn-primary">Create Wish</a> <br>
                    No wish
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
