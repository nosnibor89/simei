<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreFailRequest;
use App\Http\Controllers\Controller;
use App\Fail;
use App\Priority;
use App\Impact;

class FailController extends Controller
{

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
        $fails = Fail::with('impact','priority')->get();
        return view('fail.index', ['fails' => $fails]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $prioritys = Priority::all();
        $impacts = Impact::all();
        return view('fail.create', [
          'prioritys' => $prioritys,
          'impacts' => $impacts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFailRequest $request)
    {
            $fail = new Fail();
            $fail->name =  $request->name;
            $fail->priority_id = $request->priority;
            $fail->impact_id = $request->impact;

            try {
                $fail->save();
                return redirect()->back()->with('notification', 'La falla fue creada');
            } catch (Exception $e) {
                return redirect()->back()->with('error', "Oops, no se pudo crear la falla. Intenta de nuevo");
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prioritys = Priority::all();
        $impacts = Impact::all();
        $fail = Fail::find($id);
        return view('fail.edit', [
          'fail' => $fail,
          'prioritys' => $prioritys,
          'impacts' => $impacts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFailRequest $request)
    {
            $fail = Fail::find($request->id);
            $fail->name =  $request->name;
            $fail->priority_id = $request->priority;
            $fail->impact_id = $request->impact;

            try {
                $fail->save();
                return redirect()->back()->with('notification', 'La falla fue actualizado');
            } catch (Exception $e) {
                return redirect()->back()->with('error', "Oops, no se pudo actualizar la falla. Intenta de nuevo");
            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fail::destroy($id);
    }

}
