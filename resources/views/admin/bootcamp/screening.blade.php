@extends('admin.admin_master')
@section('admin')

<div class="page-content">
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
              <div class="col-8">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                      <h4 class="mb-sm-0">GENERAL SCREENING </h4> 

                  </div>
              </div>
          </div>
          <!-- end page title -->
          <br>
          <div class="row">
              <div class="col-10">
                  <div class="card">
                      <div class="card-body">

                          <h4 class="card-title">Applicants Data</h4><br>
                          <form method="post" action="{{route('store.result')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$screening->id}}">

                  <div class="mb-3">
                  <h3 class="d-flex justify-content-center text-dark ">Name: <span  class="text-primary">{{ $screening->firstName}}, {{ $screening->lastName}}</span></h3>
                  <h4 class="d-flex justify-content-center text-dark ">Email : <span  class="text-primary">{{ $screening->email}}</span></h4>
     
                  <div class="d-flex justify-content-center">
                    <h4 class="text-dark">Qualification : <span  class="text-primary">{{ $screening->qualification}}</span></h4>
                
                  </div> 
                  <div class="d-flex justify-content-center align-items-center ">
                    <div><h5 class="text-dark">Age : <span class="text-primary">{{ $screening->age}}</span></h5></div>  
                 
                  </div> 
                  </div>
                  
                  
                  <br><br>  


                  <div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Assessment Criterial</h2>
										</div>
										<div class="card-body">
											<form>
												<div class="row">

                        <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Confirm Full-Name</label>
															<input type="name" name="fullName" class="form-control" >
													</div>

                          <div class="col-md-6">
                          <label class="text-dark font-weight-medium" for="">Confirm Email</label>
															<input type="email" name="cEmail" class="form-control" >
													</div>

													<div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Age Score</label>
															<input type="number" name="age" class="form-control" aria-label="number">
													</div>

                          <div class="col-md-6">
                          <label class="text-dark font-weight-medium" for="">Qualification</label>
															<input type="text" name="qualification" class="form-control" >
													</div>


                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Occupation Score</label>																					
															<input type="number" name="occupation" class="form-control" aria-label="number">	
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Motivation Score</label>				
															<input type="number" name="motivation" class="form-control" aria-label="number">
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Communication Score</label>
															<input type="number" name="communication" class="form-control" aria-label="number">
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Location Score</label>											
															<input type="number" name="location" class="form-control" aria-label="number">
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Own a Laptop Score</label>													
															<input type="number" name="laptop" class="form-control" aria-label="number">
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">Technical Background Score</label>			
															<input type="number" name="technical_background" class="form-control" aria-label="number">
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">personality/morality/logical thinking Score</label>	
															<input type="number" name="logical_reasoning" class="form-control" aria-label="number">
													</div>
													
													
													
												</div>
										
										</div>
									</div>
                          <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit Screening">
                          </form>
                        

                      </div>
                  </div>
              </div> <!-- end col -->
          </div> <!-- end row -->

      </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->
  




@endsection