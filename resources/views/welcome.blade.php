@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Welcome to Meal Tracker!</h1>

      <hr class="m-y-2">
      	@if (Auth::check())
        	<a class="btn btn-primary btn-lg" href="{{ url('/meals/create') }}" role="button">Add Meals</a>
        @else
        	<a class="btn btn-primary btn-lg" href="{{ url('/login') }}" role="button">Login</a>
        	<a class="btn btn-primary btn-lg" href="{{ url('/register') }}" role="button">Register</a>	
      	@endif
    </div>
</div>
@endsection
