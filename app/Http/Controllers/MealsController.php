<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meals;
// use App\User;

use Auth;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        if (Auth::check()) {
            return view('addMeal');
        }else{
            return view('welcome');
        }
        // return view('addMeal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->mealName);
        $newMeal = new Meals;

        $user_id = Auth::user()->id;
        $mealName = $request->mealName;

        $newMeal->meal_name = $mealName;
        $newMeal->user_id = $user_id;

        $newMeal->save();

        // $newId = Meals::where('user_id', $user_id)->count();
        $newId = $newMeal->id;
        // print_r($newId);

        return redirect()->action('MealsController@show', [$newId]);
        // return view('welcome');
        // var_dump($req);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user_id = Auth::user()->id;
        $meal = Meals::find($id);
        // $query = DB::select('select * from meals where id = ?', array($id));
        // $meals = $user->meals;
        // var_dump($user_id);
        // var_dump($meal->meal_name);
        return view('meal', compact('meal'));
        // var_dump($id);
        // return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
