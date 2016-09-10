<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

// use App\Http\Controllers\Auth;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->middleware('auth');
        // $users = User::all();
        // var_dump($users);
        $id = Auth::user()->id;
        // var_dump($id);

        $user = User::find($id);
        $meals = $user->meals;

        // return view('home');
        return view('meals', compact('user', 'id', 'meals'));
    }   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $users = User::all();
        // var_export($users);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_export($request);
        // $meal = $request->mealName;
        // var_export($meal);
        // return view('addMeal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);
        // $meals = $user->meals;
        // var_export($user);

        // print_r($meals);

        // return view('testing', compact('user', 'id', 'meals'));
        // return view('testing');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('editTesting', compact('user', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_export($id);
        var_export($request->meal);
        // $user = User::find($id);
        // if ($request->name != ""){
        //     $user->name = $request->name;
        // }
        // $user->save();
        // return redirect()->action('UsersController@show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
