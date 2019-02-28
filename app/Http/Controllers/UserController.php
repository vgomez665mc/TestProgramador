<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Cargo;
use  \App\Http\Requests\UserRequest;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=  User::with('cargo')->orderBy('id','Desc')->paginate(10);
       // return view('users.index',compact('usuarios','cargos'));
        return view("users.index")->with(['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new User;
        $cargos=Cargo::all();

       return view('users.create')->with(['usuario' => $usuario,'cargos' => $cargos]);


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsuarioRequest $request)
    {
        $usuario = new User();
        $usuario->fill(
        $request->only('nombre', 'correo', 'cedula', 'cargo_id')
       );


       //$usuario->usuario_id = $request->user()->id;

       $usuario->save();
       return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=User::find($id);

        return view('users.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=User::find($id);
        $cargos=Cargo::all();
     //   dd($cargos);

        //return view('users.edit',compact('usuario'));
        return view('users.edit')->with(['usuario' => $usuario,'cargos' => $cargos]);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, User $user)    {
       $user->update(
        $request->only('nombre', 'correo', 'cedula', 'cargo_id')
       );

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=User::find($id);
        $usuario->delete();
        return back()->with('info','el usuario se elimino');
    }
}
