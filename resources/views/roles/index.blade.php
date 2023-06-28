@extends('layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Role</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">role</a></li>
                    <li class="breadcrumb-item active">list</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-4">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">Create New Role</div>
            </div>
            <div class="card-body">

                <form action="{{route('roles.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Role Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Assign Permssions</label>
                        <div class="row">
                            @foreach($permissions as $permission)
                            <div class="col-6">
                                {{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'name')) }}
                                {{$permission->name}}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title ">Role List</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-sm table-bordered table-hover">
                    <thead>
                        <th style="width: 10px">#</th>
                        <th>Role Name</th>
                        <th>Guard Name</th>
                        <th>Date Created</th>

                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->guard_name}}</td>
                            <td>{{$role->created_at}}</td>
                            <td>
                                @can('role_edit')
                                <a class="badge bg-danger" href="{{ route('roles.edit',$role->id) }}"style="color: white; background:blue;"><i class="fas fa-edit" title="Edit"></i></a>
                                @endcan

                                @can('role_delete')
                                <a class="badge bg-danger" href="{{ route('roles.delete',$role->id) }}"onclick="confirmation(event)" style="color: white; background:#e64942;"><i
                                        class="fas fa-trash" title="Delete"></i></a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->





@endsection