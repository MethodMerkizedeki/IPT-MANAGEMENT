@extends('layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manage Application</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Industrial Pt</a></li>
                    <li class="breadcrumb-item active">Manage Application</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Application List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-sm table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Student</th>
                    <th>Category</th>
                    <th>Region</th>
                    <th>Vacancy</th>
                    <th>Remark</th>

                </tr>
            </thead>
            <tbody>

                @foreach($users as $pt)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$pt->user->name}}</td>
                    <td>{{$pt->ipt->category}}</td>
                    <td>{{$pt->ipt->region}}</td>
                    <td>{{$pt->ipt->vacancy}}</td>
                    <td>
                        @if($pt->remark=='Reject')
                        <a href="{{ route('useript.remark',$pt->id) }}" class="btn btn-success btn-sm">APPROVE</a>
                        @else
                        <a href="{{ route('useript.remark',$pt->id) }}" class="btn btn-danger btn-sm">REGECT</a>

                        @endif
                    </td>

                </tr>
                @endforeach
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection