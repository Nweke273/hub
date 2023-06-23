@extends('admin.admin_master')
@section('admin')

<div class="page-content">
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
              <div class="col-8">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                      <h4 class="mb-sm-0">RESULT </h4> 

                  </div>
              </div>
          </div>
          <!-- end page title -->
          <br>
          <div class="row">
              <div class="col-8">
                  <div class="card">
                      <div class="card-body">

                          <h4 class="card-title">RESULT SHEET</h4><br>
                          <form method="GET" action="{{route('general.result')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$result->id}}">
                 

                  <div class="mb-3">
                  <h3 class="d-flex justify-content-center text-dark ">Full Name: <span  class="text-primary">{{ $result->fullName}}</span></h3>
                  <h4 class="d-flex justify-content-center text-dark ">Email : <span  class="text-primary">{{ $result->cEmail}}</span></h4>
     
                  <div class="d-flex justify-content-center">
                    <h4 class="text-dark">Qualification : <span  class="text-primary">{{ $result->qualification}}</span></h4>
                
                  </div> 
                 
                  </div>
                  
                  
                  <br><br>  


                  <div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Scores</h2>
										</div>
										<div class="card-body">
											<form>
												<div class="row">

                        <div class="col-md-6">
														<label class="text-dark font-weight-medium d-flex" for=""> Age Score <span class="text-primary">: {{ $result->age}}%	</span>	</label>																	
																	
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium d-flex" for=""> OCCUPATION  Score<span class="text-primary">: {{ $result->occupation}}%	</span>	</label>																	
																	
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">MOTIVATION  Score<span class="text-primary">: {{ $result->motivation}}%	</span></label>				
															
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">COMMUNICATION Score<span class="text-primary">: {{ $result->communication}}%	</span></label>
						
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">LOCATION Score<span class="text-primary">: {{ $result->location}}%	</span></label>											
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">OWN A LAPTOP Score<span class="text-primary">: {{ $result->laptop}}%	</span></label>													
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">TECHNICAL BACKGROUND  Score<span class="text-primary">: {{ $result->technical_background}}%	</span></label>																		
													</div>

                          <div class="col-md-6">
														<label class="text-dark font-weight-medium" for="">LOGICAL THINKING Score<span class="text-primary">: {{ $result->logical_reasoning}}%	</span></label>	
													</div>
													<div class="col-md-10">
													<h4 class="text-secondary">TOTAL Score :{{$result->total}}%</h4>
                          @if( $result->total >= 70)
                            <p class="text-info font-weight-small">Congratulation You made it to the Next level.</p>
                          @else
                             <p class="text-danger font-weight-small">Sorry Try Again Next time</p>
                          
                          @endif
                           
                         
                          </div>
												</div>
										
										</div>
									</div>
                        
                          <button class="btn btn-info waves-effect waves-light" onClick="print()">Print Result</button>
                          </form>
                        

                      </div>
                  </div>
              </div> <!-- end col -->
          </div> <!-- end row -->

      </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->
  




@endsection