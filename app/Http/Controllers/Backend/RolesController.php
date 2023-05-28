<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public $role,$roles;
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
        $this->role = Role::create(['name' => $request->name]);
        return back();
    }
}
