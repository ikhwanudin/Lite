@extends('layouts.master')

@section('init')
    <div id="app">
        @include('layouts.navbar')
		<div class="mb-4">
			@yield('content')
		</div>
    </div>
@endsection