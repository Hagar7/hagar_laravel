<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        $users =User::all();
         return view('layouts.Users',compact('users'));
     }

     public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('all.users');

    }
    public function create(){
        return view ('layouts.create-user');
    }
    public Function store()
     {
         $users = User::create(
         [
             'name' => request ('name'),
             'email' => request('email'),
             'password' => bcrypt(request('password')) ,
             'user_type' => request('user_type'),

         ]
         );
         return redirect()->route('all.users');
        }

        public function update($id){
            $user = User::find($id);
            return view ('layouts.update-user',compact('user'));
        }
        public function edit (Request $request,$id) {
            $user = User::find($id);
            $user->update(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt(request('password')) ,
                    'user_type' => $request->user_type,
                ]
            );
            return redirect()->route('all.users');
        }
}


