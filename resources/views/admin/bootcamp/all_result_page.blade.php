@extends('admin.admin_master')
@section('admin')



<div class="page-content">
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                      <h4 class="mb-sm-0">ALL RESULT</h4> 

                  </div>
              </div>
          </div>
          <!-- end page title -->
          <br>
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">

                          <h4 class="card-title">Applicants General Results</h4><br>

                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                              <tr>
                                  <th>S/n</th>
                                  <th> Full-Name</th>
                                  <th>Email</th>
                                  <th>Total Score</th>
                                  <th>Date</th>                               
                                  <th>Action</th>
                              </tr>
                              </thead>

                              <tbody>
                                <!-- to visible the serial number -->
                                <!-- @php($i = 1) -->
                                @foreach($result as $reg)
                              <tr>
                                  <td>{{ $result->firstItem()+$loop->index}}</td>
                                  <td>{{ $reg->fullName}}</td>    
                                  <td>{{ $reg->cEmail}}</td>                             
                                  <td><strong class="text-lg text-primary ">{{$reg->total}}%</strong></td>
                                  
                                  <td>{{ $reg->created_at->diffForHumans()}}</td>
                                  
                                  <td><a href="{{route('view.result',$reg->id)}}" class="btn btn-info sm"  title="screening"> <i class="fas fa-edit"></i>View Result</a>       
                                 </td>                          
                                </tr>
                              @endforeach

                          </table>
                          {{$result->links()}}

                      </div>
                  </div>
              </div> <!-- end col -->
          </div> <!-- end row -->

      </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->
  





@endsection