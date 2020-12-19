@extends('admin.master')

@section('title','Employee | Create Information')

@section('breadcrumb','Employee | Create Information')

@section('main-content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
            <a href="{{ route('employee.index') }}" class="btn btn-primary float-right" style="border-radius: 0px"><i class="fas fa-table"></i> All Employee</a>
            <h3 class="card-title">Employee | Create Information</h3>
        </div>
        <!-- /.card-header -->
        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" >Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" >Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address" >Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                     </div>
      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" >Phone</label>
                            <input type="telephone" class="form-control" name="phone">
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nid" >NID</label>
                            <input type="number" class="form-control" name="nid">
                        </div>
                    </div>
      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" >Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="">--Select Gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="designation" >Designation</label>
                            <input type="text" class="form-control" name="designation">
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="blood_group" >Blood Group</label>
                            <select name="blood_group" id="" class="form-control">
                                <option value="">--Select Blood Group--</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB-">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="joining_date" >Joining Date</label>
                            <input type="date" class="form-control" name="joining_date">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ending_date" >Ending Date</label>
                            <input type="date" class="form-control" name="ending_date">
                        </div>
                    </div>
      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="photo" >Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status" >Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">--Select Blood Group--</option>
                                <option value="1">Open</option>
                                <option value="0">Close</option>
                            </select>
                        </div>
                    </div>
      
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
              </div>
        </form>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection