<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        #$user_id = Auth::id();
        #$todos = App\User::where('user_id', '=', $user_id)->get();
        #return view('home', compac('todos'));
    }


    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit()
    {
        $user_id = Auth::id();
        $usuario = User::find($user_id);
        return view('users.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        $user_id = Auth::id();
        $usuario = User::find($user_id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
     
        if($request->get('status') != null){
            $usuario->status = 0;
        }else{
            $usuario->status = 1;
        }
        $usuario->save();
        return redirect(action('UserController@edit'))->with('status', 'El Usuario ha sido actualizado');

    }


    public function destroy(User $user)
    {
        //
    }
}
