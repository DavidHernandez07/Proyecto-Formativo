<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Role;
use Auth;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('user.index', ['users'=>$users]);
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
       $user= new User();
       $user->telefono=$request->telefono;
       $user->direccion=$request->direccion;
       $user->save();
       return redirect('/perfil');
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
        $user = User::find($id);
        return view('user.show', ['user'=>$user]);
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

    public function cambiarRole(Request $request) {
        $user_id = $request->user_id;
        $roles = Role::all();
        return view('user.cambiarRoles',['user_id'=>$user_id, 'roles'=>$roles]);
    }

    public function guardarRole(Request $request) {
        $user_id = $request->user_id;
        $role_id = $request->role_id;
        $user = User::find($user_id);
        $user->roles()->sync([$role_id]);
        return redirect()->route('user.index',['user'=>$user_id]);
    }

      public function perfil(){
        return view('perfil', array('user' => Auth::user()) );
    }

     public function subir_perfil(Request $request){
            
            $user =User::find(Auth::User()->id);
            if($request->hasFile('icono')){
            $avatar = $request->file('icono');
            $filename = $avatar->getClientOriginalName();
            $avatar->move(public_path("/imagenes/"),$filename);
            $user->avatar =$filename;
            }
            if(empty($user)){
            Flash::error('mensaje error');
            return redirect()->back();
            }
            $user->fill($request->all());
            $user->save();

            return redirect('/perfil')->with("success","Datos Actualizados Correctamente");

    }
}
