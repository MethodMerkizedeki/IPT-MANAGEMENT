@extends('layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Permission</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">permssion</a></li>
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
                <div class="card-title">Add Permission</div>
            </div>
            <div class="card-body">
                <form action="{{route('permission.create')}}" method="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="">Perminssion Name:</label>
                        <input type="text" name="name" class="form-control">
                        <input type="hidden" name="guard_name" value="web">
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
                <div class="card-title ">Permission List</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Permission Name</th>
                            <th>Gurd name</th>
                            <th>Date Created</th>
                            <th>Date Updated</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $permission)
                        <tr>

                            <td>{{++$i}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->guard_name}}</td>
                            <td>{{$permission->created_at}}</td>
                            <td>{{$permission->updated_at}}</td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm toastrDefaultError"
                                    href="{{route('permission.delete', $permission->id)}}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach

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