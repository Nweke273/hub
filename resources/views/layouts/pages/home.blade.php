
@if(Session::has('message'))
<script>
swal("Great Job!", "{!! Session::get('message') !!}","success",{
    button:"Ok",
});
</script>
@endif

        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url('assets/img/hero-9-img.png')no-repeat center center" id="home">
            <div class="container">
                <div class="row align-items-center">
                     @if ($message = Session::get('status'))
                  <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                    </div>
                      @endif
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5">Smart Hub Software Solution Company</h1>
                            <p class="lead">
                               Don't just dream it, make it a reality. <br>
                               We can help you bring your digital dream to life.
                            </p>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="#get-started" class="btn btn-primary me-3">Ready for a project ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="assets/img/banner_image.png" alt="hero hero-it-solution " class="img-fluid" />
                            <div class="dots">
                                <img src="assets/img/banner_dot.png" alt="dot" class="dot-1" />
                                <img src="assets/img/banner_dot.png" alt="dot" class="dot-2" />
                            </div>
                            <div class="bubble">
                                <span class="bubble-1"></span>
                                <span class="bubble-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        