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
         $user = Auth::user();
         if($user->role == 'technician'){
             return redirect()->route('tech', ['id'=>$user->id]);
         }
         else{
            return redirect()->route('user',['id'=>$user->id]);
         }

     }

     //Load tech home data
    public function techIndex($id)
    {
        if (Auth::user()->role == 'technician' ) {

            $totalTasks = \App\Taskorder::where('technician_id', $id)->get()->count();
            $openTasks = \App\Taskorder::where([
                ['technician_id', $id],
                ['status_id', 1]
                ])->get()->count();
            $closedTasks = \App\Taskorder::where([
                ['technician_id', $id],
                ['status_id', 2]
                ])->get()->count();
            $pausedTasks = \App\Taskorder::where([
                ['technician_id', $id],
                ['status_id', 3]
                ])->get()->count();

            return view('home.techindex',[
                'total' => $totalTasks,
                'open' => $openTasks,
                'closed' => $closedTasks,
                'paused' => $pausedTasks
            ]);
        }
        else{
            return back()->with('error', 'Sorry, not allowed');
        }

    }
    //Load tech home data

    //Load user home data
    public function userIndex($id){

        if (Auth::user()->role == 'user' ) {
            //return "User";
            return view('home.userindex', ['id' => $id]);
        }
        else{
            return back()->with('error', 'Sorry, not allowed');
        }

    }
    //Load user home data
}
