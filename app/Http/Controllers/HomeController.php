<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;
// use App\Meals;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::all();
        // print_r($user);
        // $user = Auth()->user;
        // print_r($user);
        return view('home');
        // return redirect()->action('UsersController@index');
    }
}
