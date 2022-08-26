@if(session()->has('info-alert'))
    <div class="alert bg-blue font-13 info-alert" role="alert"><i class="fa fa-info-alert-circle m-r-5"></i> {{ session()->get('info-alert') }}</div>
@endif

@if(session()->has('success'))
    <div class="alert bg-green font-13 info-alert" role="alert"><i class="fa fa-check-circle m-r-5"></i> {{ session()->get('success') }}</div>
@endif

@if(session()->has('warning'))
    <div class="alert bg-orange font-13 info-alert" role="alert"><i class="fa fa-warning m-r-5"></i> {{ session()->get('warning') }}</div>
@endif

@if(session()->has('danger'))
    <div class="alert bg-red font-13 info-alert" role="alert"><i class="fa fa-warning m-r-5"></i> {{ session()->get('danger') }}</div>
@endif
