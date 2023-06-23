<!DOCTYPE html>
<html lang="en">
<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--custom css end-->

</head>
 <body>

 <div class="page-content">
   <div class="container-fluid">

   <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">

                  <form method="post" action="{{route('store.bootcamp')}}" enctype="multipart/form-data">
                    @csrf
												<div class="form-row">
                       
													<div class="col-md-4 mb-3">
														<label for="validationServer01">First name</label>
														<input type="text" class="form-control" name="firstName" id="validationServer01" required="">
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-4 mb-3">
														<label for="validationServer02">Last name</label>
														<input type="text" class="form-control" name="lastName" id="validationServer02"   required="">
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
													<div class="col-md-4 mb-3">
														<label for="validationServerUsername">email</label>
														<input type="email" class="form-control" name="email" id="validationServerUsername"  aria-describedby="inputGroupPrepend3" required="">
														<div class="invalid-feedback">
															Please choose a username.
														</div>
													</div>

													<div class="col-md-4 mb-3">
														<label for="validationServerUsername">Qualification</label>
														<input type="text" class="form-control" name="qualification" id="validationServerUsername"  aria-describedby="inputGroupPrepend3" required="">
														<div class="invalid-feedback">
															Please choose a username.
														</div>
													</div>

													<div class="col-md-4 mb-3">
														<label for="validationServerUsername">Age</label>
														<input type="number" class="form-control" name="age" id="validationServerUsername"  aria-describedby="inputGroupPrepend3" required="">
														<div class="invalid-feedback">
															Please choose a username.
														</div>
													</div>
												</div>
												<div class="form-row">
												
												<button class="btn btn-primary" type="submit">Submit form</button>
                     
											</form>
                      </div>   
                    </div>  
                   </div>   
                  </div>   
                </div>
                      </div>


 </body>









<!--build:js-->
<script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--endbuild-->
</body>

</html>
