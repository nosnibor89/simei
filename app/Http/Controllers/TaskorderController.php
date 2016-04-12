<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreTaskorderRequest;
use App\Http\Controllers\Controller;
use App\Fail;
use App\Taskorder;
use Auth;
use Carbon\Carbon;
use Mail;

class TaskorderController extends Controller
{
    //Constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status = 'all')
    {
        $id = Auth::user()->id;
        $queryKey = Auth::user()->role == "technician" ? "technician_id" : "user_id";
      switch (strtolower($status)) {
        case 'all':
          $tasks = Taskorder::where($queryKey, $id)->with('fail','user','technician')->get();
          break;
        case 'opened':
          $tasks = Taskorder::where([
            [$queryKey, $id],
            ['status_id', 1]
          ])->with('fail','user','technician')->get();
          break;
        case 'closed':
          $tasks = Taskorder::where([
            [$queryKey, $id],
            ['status_id', 2]
          ])->with('fail','user','technician')->get();
          break;
        case 'paused':
          $tasks = Taskorder::where([
            [$queryKey, $id],
            ['status_id', 3]
          ])->with('fail','user','technician')->get();
          break;
      }
        return $tasks;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $tasks = Taskorder::with('status','fail', 'user', 'technician')->get();
        //return $tasks;
        return view('taskorder.all', ['tasks' => $tasks]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fails = Fail::all();
        return view('taskorder.create',['fails' => $fails]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskorderRequest $request)
    {

        $taskorder = new Taskorder();
        $taskorder->title = $request->title;
        $taskorder->desription = $request->description;
        $taskorder->fail_id = $request->fail;
        $taskorder->startDate = Carbon::now();
        $taskorder->status_id = 1;
        $taskorder->user_id = auth()->user()->id;

        try {
            $taskorder->save();
            $orderId = $taskorder->id;

            Mail::send('emails.ordercreate', ['orderId' => $orderId ], function($m){
               $m->from('hello@app.com', 'Your Application');

               $m->to(auth()->user()->email, auth()->user()->name)->subject('Orden Creada');
           });





            return redirect('taskorder/all')->with('notification', 'La incidencia fue creada');
        } catch (Exception $e) {
            return redirect()->back()->with("error", "No se puedo crear la incidencia. Intente de nuevo");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $task = Taskorder::find($id)->with('fail','user','technician')->first();
         return view('taskorder.detail', ['task' => $task]);
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

    public function test(){
        return "test";
    }
}
