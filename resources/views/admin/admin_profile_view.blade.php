@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
          <div class="content">							<div class="bg-white border rounded">
								<div class="row no-gutters">
									<div class="col-lg-4 col-xl-3">
										<div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
											<div class="card text-center widget-profile px-0 border-0">
												<div class="card-img mx-auto rounded-circle">
													<img src="{{asset('backend/assets/img/user/u6.jpg')}}" alt="user image">
												</div>
												<div class="card-body">
													<h4 class="py-2 text-dark">{{$adminData->name}}</h4>
													
													<a class="btn btn-primary btn-pill btn-lg my-4" href="#">Edit Profile</a>
												</div>
											</div>
											
											<hr class="w-100">
										
										</div>
									</div>
									<div class="col-lg-8 col-xl-9">
										<div class="profile-content-right py-5">
                      <center><h3 class="text-dark">Admin-Portfolio : Chief Admin</h3></center>
										
											<div class="tab-content px-3 px-xl-5" id="myTabContent">
												<div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
													<div class="media mt-5 profile-timeline-media">
														
														<div class="media-body">
															<h5 class="mt-0 text-secondary">Name : {{$adminData->name}}</h5>
                              <hr>
															<h4><span>Role : Manager</span></h4>
                              <hr>
															<h4>User Email : {{$adminData->email}}</h4>
														</div>
													</div>
													
													
												</div>
												<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
												<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
											</div>
										</div>
									</div>
								</div>
							</div></div>

          


        </div>


@endsection