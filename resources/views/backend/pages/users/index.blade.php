@extends('backend.layouts.master')

@section('title')
    Role - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('admin-content')
<div>
        <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">Users</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                    <li><span>All Users</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            @include('backend.layouts.partials.logout')
                        </div>
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">

            <div class="row">
                    <!-- data table start -->
                    <div class="col-md-12 mt-4">
                        <h3 style="padding-bottom: 10px;">User List</h3>
                        <a class="btn btn-primary text-wtite" href="{{ route('users.create')}}">Create User</a>
                        <div class="clearfix"></div>
                    <div class="mt-4">
                    @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%; text-align:center">
                        <thead>
                            <tr>
                                <th class="text-center">Si</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Roles</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            <span class="badge badge-info mr-1">
                                                {{$role->name}}
                                            </span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn btn-info text-wtite" href="{{ route('users.edit',['id'=>$user->id]) }}">Edit</a>
                                        <a class="btn btn-danger text-wtite" href="{{route('users.destroy',['id'=>$user->id])}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>    
</div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
</div>
@endsection


@section('scripts')
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
         /*================================
    datatable active
    ==================================*/
    $(document).ready(function () {
    $('#dataTable').DataTable();
    });
    </script>
@endsection