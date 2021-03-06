@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Wish</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class = "wells">

                        <form method = "POST" action = "{{ action('WishlistController@store') }}">
                            <input type= "hidden" value = "{{ csrf_token() }}" name="_token">
                            <label>Wish Title:</label>
                            <input type = "text" class = "form-control" name="wishtitle">
                            <label>Description</label>
                            <textarea style="width:500px" name="wishdescription" class="form-control"></textarea><br>
                            <input type = "submit" class="btn btn-primary" name="submitwish">
                        </form>

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection