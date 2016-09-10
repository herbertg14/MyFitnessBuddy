@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Meal</div>

                <div class="panel-body">

                    <form action="/meals/" method="post">
                        {{ csrf_field() }}
                        
                        <div class='form-group'>
                            <label for="exampleInputEmail1">Meal Name</label>
                            <input type="text" class="form-control" name="mealName" placeholder="Meal Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                       <!--  Name: <input type="text" name="name">
                        <input type="submit" value="update"> -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection