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
         //return $user->id;
         $user = Auth::user();
         if($user->role == 'technician'){
             return redirect()->route('tech', ['id'=>$user->id]);
         }
         else{
            return redirect()->route('user',['id'=>$user->id]);
         }

     }

    public function techIndex($id)
    {
        if (Auth::user()->role == 'technician' ) {
            // $tasks = \App\Taskorder::where('technician', Auth::user()->id);
                        $tasks = \App\Taskorder::all();
            return view('user.techindex',['tasks' => $tasks]);
        }
        else{
            return back()->with('error', 'Sorry, not allowed');
        }

    }

    public function userIndex($id){

        if (Auth::user()->role == 'user' ) {
            //return "User";
            return view('user.userindex', ['id' => $id]);
        }
        else{
            return back()->with('error', 'Sorry, not allowed');
        }

    }
}
