@extends('admin.admin_master')
@section('admin')

<div class="page-content">
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                      <h4 class="mb-sm-0">APPLICANTS</h4> 

                  </div>
              </div>
          </div>
          <!-- end page title -->
          <br>
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">

                          <h4 class="card-title">Applicants Data</h4><br>

                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                              <tr>
                                  <th>S/n</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>Qualification</th>
                                  <th>Age</th>    
                                  <th>Date</th>                               
                                  <th>Action</th>
                              </tr>
                              </thead>

                              <tbody>
                                <!-- to visible the serial number -->
                                <!-- @php($i = 1) -->
                                @foreach($applicants as $reg)
                              <tr>
                                  <td>{{ $applicants->firstItem()+$loop->index}}</td>
                                  <td>{{ $reg->firstName}}</td>
                                  <td>{{ $reg->lastName}}</td>
                                  <td>{{ $reg->email}}</td>
                                  <td>{{ $reg->qualification}}</td>
                                  <td>{{ $reg->age}}</td>
                                  <td>{{ $reg->created_at->diffForHumans()}}</td>
                                  
                                  <td><a href="{{route('screen.applicant',$reg->id)}}" class="btn btn-primary sm"  title="screening"> <i class="fas fa-edit"></i>Screen</a>       
                                 <a href="{{route('delete.applicant',$reg->id)}}" class="btn btn-danger sm"  title="Temporary Delete" id="delete"> <i class="fas fa-trash-alt"></i>Delete</a></td>                          
                                </tr>
                              @endforeach

                         
                              </tbody>
                             
                          </table>
                          {{$applicants->links()}}

                      </div>
                  </div>
              </div> <!-- end col -->
          </div> <!-- end row -->

      </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->
  





@endsection