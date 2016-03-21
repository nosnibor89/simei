<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

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
        // return "Your are a tech";
         //return view('home');
         $user = Auth::user();
         if($user->role == 'technician'){
             return redirect('tech/home');
         }
         else{
            return redirect('user/home');
         }

     }

    public function techIndex()
    {
        if (Auth::user()->role == 'technician' ) {
            //return "Tech";
            return view('user.techindex');
        }
        else{
            return back()->with('error', 'Sorry, not allowed');
        }

    }

    public function userIndex(){
        if (Auth::user()->role == 'user' ) {
            //return "User";
            return view('user.userindex');
        }
        else{
            return back()->with('error', 'Sorry, not allowed');
        }

    }
}
