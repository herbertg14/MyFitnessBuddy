<h1>Welcome {{$user->name}} with id # {{$id}}</h1>

@foreach ($meals as $meal)
	<p>{{$meal->meal_name}}</p>
@endforeach