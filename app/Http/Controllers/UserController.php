<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
             $users = User::all();
             return view('user.index', ['users' => $users]);
        } catch (Exception $e) {
            redirect('/');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        if ($request->password == $request->passwordRepeat) {
            $user = new User();
            $user->name =  $request->name;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->role = $request->role;
            try {
                $user->save();
                return redirect()->back()->with('notification', 'El usuario fue creado');
            } catch (Exception $e) {
                return redirect()->back()->with('error', "Oops, no se pudo crear el usuario. Intenta de nuevo");
            }
        }
        else {
            return redirect()->back()->with('error', "Contraseñas no coinciden");
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
          return $users = User::find($id);
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
