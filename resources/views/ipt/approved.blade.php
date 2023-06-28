@extends('layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>My Application</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Industrial Pt</a></li>
                    <li class="breadcrumb-item active">My Application</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                </a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>                           
                            <th>Category</th>
                            <th>Region</th> 
                            <th>Date Applied</th>                           
                            <th width="200">Application Status</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($users as $pt)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$pt->ipt->category}}</td>
                            <td>{{$pt->ipt->region}}</td>
                            <td>{{$pt->created_at}}</td>                            
                            <td>                        
                           
                            @if($pt->remark=='Accept')
                                <a class="btn btn-success btn-sm"
                                    href="#">Accepted </a>
                                @else
                                <label href="#" class="btn btn-primary btn-sm"
                                   >Waiting</label>

                                @endif
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