<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('backend/assets/css/sleek.css')}}" />

  

  <!-- FAVICON -->
  <link href="{{asset('backend/assets/img/favicon.png" rel="shortcut icon')}}" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="{{route('login')}}">
                <img src="http://127.0.0.1:8000/assets/img/logo-color.png" alt="logo" class="img-fluid logo-color">
                  <span class="brand-name">ExpertHub</span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">

              <h5 class="text-secondary mb-3"><strong>No problem.</strong> <i>Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</i></h5>

              <form method="POST" action="{{ route('password.email') }}">
        @csrf
                <div class="row">
                  <div class="form-group col-md-12 mb-4 block mt-1 w-full">
                    <input type="email" id="email" name="email" class="form-control input-lg" aria-describedby="emailHelp" placeholder="Email">
                  </div>

                 

                  <div class="col-md-12">
                    
                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Email Password Reset Link</button>
                    
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright pl-0">
        <p class="text-center">&copy; 2023 Copyright ExpertHub Tech Solution Services
          <a class="text-primary" href="http://www.experthub.ng" target="_blank">eXpertHub</a>.
        </p>
      </div>
    </div>
</body>
</html>