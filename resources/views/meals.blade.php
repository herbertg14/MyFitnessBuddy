@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->name}}, here are all your meals!</div>

                <div class="panel-body">
                	<ul class="list-group">
                		@foreach ($meals as $meal)
                			<li class="list-group-item">
                				<a href="/meals/{{$meal->id}}">{{$meal->meal_name}}</a>
                			</li>							
						@endforeach
                	</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection