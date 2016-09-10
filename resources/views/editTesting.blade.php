<h1>Welcome {{$user->name}} with id # {{$id}}</h1>

<form action="/users/{{$user->id}}" method="post">
	{{csrf_field() }}
	{{method_field('PUT')}}
	Name: <input type="test" name="meal" placeholder="meal name">
	<input type="submit" value="update">
</form>