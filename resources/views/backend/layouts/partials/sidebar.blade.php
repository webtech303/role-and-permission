<!-- sidebar menu area start -->
<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('backend/assets/images/icon/logo.png')}}"> </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Redowan</span></a>
                                <ul class="collapse">
                                    <li class="{{ Route::is('admin.dashboard') ? 'active':''}}"><a href="{{ route('admin.dashboard') }}">dashboard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Roles & Permissions</span></a>
                                <ul class="collapse {{ Route::is('roles.create')|| Route::is('roles.index')|| Route::is('roles.edit')|| Route::is('roles.show') ? 'in':''}}">
                                    <li class="{{ Route::is('roles.index')|| Route::is('roles.edit') ? 'active':''}}"><a href="{{ route('roles.index') }}">All role</a></li>
                                    <li class="{{ Route::is('roles.create') ? 'active':''}}"><a href="{{ route('roles.create') }}">Create role</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Users</span></a>
                                <ul class="collapse {{Route::is('users.index')|| Route::is('users.edit') || Route::is('users.create') ? 'in':''}}">
                                    <li class="{{ Route::is('users.index') || Route::is('users.edit') ? 'active':''}}"><a href="{{ route('users.index') }}">All User</a></li>
                                    <li class="{{ Route::is('users.create') ? 'active':''}}"><a href="{{ route('users.create') }}">Create User</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->