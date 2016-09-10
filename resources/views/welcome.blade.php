@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Welcome to Meal Tracker!</h1>

      <hr class="m-y-2">
        <a class="btn btn-primary btn-lg" href="{{ url('/add') }}" role="button">Add Meals</a>
      
    </div>
</div>
@endsection
