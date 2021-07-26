<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('admin.users.index',compact([
            'users',
        ]));
    }
    public function show(User $user)
    {
        $this->authorize('view' ,$user );
        $roles = Role::all();
        return view('admin.users.profile',compact([
            'user',
            'roles']));
    }

    public function attach(User $user){
        $user->roles()->attach(request('role'));
        return back();
    }
    public function detach(User $user){
        $user->roles()->detach(\request('role'));
        return back();
    }
    public function destroy(User $user)
    {
        $user->delete();
    }
    public function edit(User $user){


            $this->authorize('view' ,$user );

        //
        $roles = Role::all();

        return view('admin.users.edit', compact([
            'user',
            'roles'
        ]));
    }
    public function update(User $user ,Request $request){
//        $inputs = $request->validate([
//            'name'=>['required', 'string', 'max:255','alpha_dash'],
//            'name'=>['required' ,'string', 'max:255'],
//            'email'=>['required','email', 'max:255'],
//        ]);
//        $user->update($inputs);
//        return back();
//        dd($user);

        $inputs=request()->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required','email', 'max:255'],
            'avatar'=>['file:jpeg,png'],
        ]);
        if($request->file('avatar')) {
            $file = $request->file('avatar');
            $path = $file->getClientOriginalName();
            $file->move('images',$path);
            $inputs['avatar'] = $path;
        }
        $user->update($inputs);
        return back();
    }

}
