<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    //
    public function index(){
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));

    }
    public function create(){
        return view('admin.roles.create');
    }
    public function store()
    {
        request()->validate([
            'name'=>'required',
        ]);
        Role::create([
            'name' =>Str::ucfirst(request('name')),
            'description'=>Str::lower(request('description')),
        ]);
        return back();
    }
    public function destroy(Role $role){
//        dd($role);
//        $name = $role->name;
        $role->delete();
//        session()->falsh('role_deleted','the Role - '.$name.'Deleted');
        return back();

    }
    public function edit (Role $role){
        return view('admin.roles.edit',compact('role'));
    }
    public function update(Role $role ){

//        $name = $role->name;
//        if($role->isDirty('name')){
//            session()->flash('update-role','The Role - '.$name.' - Updated');
//            $role->save();
//        }
//        else{
//            session()->flash('noUpdate-role','Nothing To Update');
//        }
        $role->name = Str::ucfirst(\request('name'));
        $role->description = \request('description');
        $role->save();
        return redirect('admin/roles');
    }
    public function attach(Role $role){
        //
    }
    public function detach(Role $role){
        //
    }
}
