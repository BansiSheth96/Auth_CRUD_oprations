<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index',compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|max:255|unique:roles',
        ]);

        Role::create($request->all());
        return redirect()->route('roles.index')->with('Role Succesfully Added');
    }

    public function edit(Role $role)
    {
        return view('role.edit',compact('role'));
    }

    public function update(Request $request,Role $role)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,role_name,'.$role->id.'|max:255'
        ]);

        $role->update($request->all());
        return redirect()->route('roles.index');

        //return redirect()->route('roles.index')->with('success','Role Updated Succesfully')
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index');
    }
}
