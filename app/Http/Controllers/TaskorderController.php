<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Taskorder;
use Auth;

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
      switch (strtolower($status)) {
        case 'all':
          $tasks = Taskorder::where('technician', $id)->with('fail','user')->get();
          break;
        case 'opened':
          $tasks = Taskorder::where([
            ['technician', $id],
            ['status', 1]
          ])->with('fail','user')->get();
          break;
        case 'closed':
          $tasks = Taskorder::where([
            ['technician', $id],
            ['status', 2]
          ])->with('fail','user')->get();
          break;
        case 'paused':
          $tasks = Taskorder::where([
            ['technician', $id],
            ['status', 3]
          ])->with('fail','user')->get();
          break;
        default:
          $tasks = Taskorder::where('technician', $id)->get();
          break;
      }
        return $tasks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $tasks = Taskorder::find($id);
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
