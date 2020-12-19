@extends('admin.master')

@section('title','Employee | All Information')

@section('breadcrumb','Employee | All Information')

@section('main-content')
<div class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
                <a href="{{ route('employee.create') }}" class="btn btn-primary float-right" style="border-radius: 0px"> <i class="fa fa-plus-circle"></i> Add New</a>
                <h5 class="m-0">Employee | All Information</h5>
            </div>
            <div class="card-body">
                <table id="employeeTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>SL NO</th>
                          <th>Name</th>
                          <th>Basic Info</th>
                          <th>Designation</th>
                          <th>Photo</th>
                          <th>Joining Date</th>
                          <th>Ending Date</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                      @foreach ($employees as $employee)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $employee->name }}</td>
                          <td style="width: 100%">
                            <strong>Email: </strong> {{ $employee->email }} <br>
                            <strong>Phone: </strong> {{ $employee->phone }} <br>
                            <strong>Address: </strong> {{ $employee->address }} <br>
                            <strong>Gender: </strong> {{ $employee->gender }} <br>
                            <strong>Blood Group:</strong> {{ $employee->blood_group }}
                          </td>
                          <td>{{ $employee->designation }}</td>
                          <td>
                            <img class="card-img-top feature-image" style="height: 100px; width: 100px;" src="{{ asset('uploads/employee/'.$employee->photo) }}" alt="Employee image">
                          </td>
                          <td>{{ $employee->joining_date }}</td>
                          <td>{{ $employee->ending_date }}</td>
                          <td>
                            <a href="" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> </a>
                            <a href="{{ route('employee.delete',$employee->id) }}" class="btn btn-danger btn-xs"> <i class="fa fa-trash-alt"></i> </a>
                          </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('custom_script')
<script>
    $(function () {
      $("#employeeTable").DataTable();
    //   $('#example2').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //   });
    });
  </script>
@endsection