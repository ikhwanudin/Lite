@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">
            {{ config('app.name', 'Lite') }}
            <span class="badge badge-warning"><small>Alpha ver.</small></span>
            Grow up your Network
        </p>
         <hr class="my-4">
        <form action="" method="POST">
            <div class="form-group">
                {{-- <label for="shrt">Add your links</label> --}}
                <input type="text" name="shrt" class="form-control">
            </div>
        </form>
    </div>
@endsection