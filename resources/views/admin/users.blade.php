@extends('layouts.dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Setting Management</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
          <div class="col-12">
          <div class="card">            
              <div class="card-body">
              <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser"><i class="fa fa-user-plus"></i> Add</a>
            <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>SNO</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>STAFF-ID</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>shirima</td>
                    <td>pharmacy/12</td>
                    <td>pobox12</td>
                    <td>0756007671</td>
                    <td>{{$user->email}}</td>
                    <td>12/12/2022</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              @endforeach
             
                    
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>SNO</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>STAFF-ID</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            </div>
          
          </div>
          <!-- /.col -->
          <div class="modal fade" id="adduser" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="staff_id">Staff Id</label>
                                        <input type="text" class="form-control" id="staff_id" placeholder="Enter Staff id">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Adress</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="">Select Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="manager">Manager</option>
                                            <option value="pharmacist">Pharmacist</option>
                                            <option value="cashier">cashier</option>
                                        </select>                                        
                                    </div>
                                </div>

                            </div>             
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                            </div>  
                        </form>            
                    </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    

@endsection