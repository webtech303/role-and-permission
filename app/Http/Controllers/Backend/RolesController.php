<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public $role,$roles,$permissions;
    public function index()
    {
        $this->roles = Role::all();
        return view('backend.pages.roles.index',
        ['roles'=>$this->roles]);
    }
    public function create()
    {
        $this->permissions = Permission::all();
        return view('backend.pages.roles.create',
            ['permissions'=>$this->permissions]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:100||unique:roles'
        ],[
            'name.required' => 'Role Name Required'
        ]);
        $this->role = Role::create(['name' => $request->name]);
//        $role = DB::table('roles')->where('name', $request->name)->first();
        $permissions = $request->input('permissions');
        if (!empty($permissions)) {
            $this->role->syncPermissions($permissions);
        }
        return back();
    }
}
