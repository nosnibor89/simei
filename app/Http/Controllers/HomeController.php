<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Taskorder;
use DB;

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


    //Load user home data
    public function userIndex($id){

      if (Auth::user()->role == 'user' ) {

          $totalTasks = \App\Taskorder::where('user_id', $id)->get()->count();
          $openTasks = \App\Taskorder::where([
              ['user_id', $id],
              ['status_id', 1]
              ])->get()->count();
          $closedTasks = \App\Taskorder::where([
              ['user_id', $id],
              ['status_id', 2]
              ])->get()->count();
          $pausedTasks = \App\Taskorder::where([
              ['user_id', $id],
              ['status_id', 3]
              ])->get()->count();

          return view('home.userindex',[
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function tms()
     {
         return view('home.tms');

     }

     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Http\Response
      */
      public function report()
      {
          // $techTaks =  DB::table('taskorderes')
          //           ->join('users', 'users.id', '=', 'taskorderes.technician_id')->groupBy('technician_id')->get([
          //           DB::raw('users.name as name'),
          //           DB::raw('COUNT(*) as value')
          //           ]);
          // return json_encode($techTaks);
         return view('reports.index');
      }
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Http\Response
      */
      public function reportajax()
      {
          $techTaks =  DB::table('taskorderes')
                    ->join('users', 'users.id', '=', 'taskorderes.technician_id')->groupBy('technician_id')->get([
                    DB::raw('users.name as name'),
                    DB::raw('COUNT(*) as value')
                    ]);
          return json_encode($techTaks);
        // return view('reports.index', ['techTaks' => json_encode($techTaks)]);
      }
}
