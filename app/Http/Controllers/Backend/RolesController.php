<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public $roles;
    public function index()
    {
        $this->roles = Role::all();
        return view('backend.pages.roles.index',
        ['roles'=>$this->roles]);
    }
}
