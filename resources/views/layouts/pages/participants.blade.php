<section>
     <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8 col-md-10">
                     <div class="subscribe-info-wrap text-center position-relative z-2">
                         <div class="section-heading" data-aos="fade-up">
                             <h6 class="h5 text-warning">Expert Hub 1st October Event</h6>
                             <h4>Registered Participants</h4>
                         </div>
                         <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                             <a href="/event/register" class="btn btn-primary">Register for Event</a>
                         </div>
                        
                     </div>
                 </div>
             </div>
             <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
             <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
         </div>
     </section>
     @include('layouts.alert')
     <section class="contact-promo ptb-120" id="contact">
         <div class="container">
             <div class="row justify-content-center">

                 
                 <div class="col-lg-8 col-md-12 mt-4 mt-lg-0">
                 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach(\App\Models\Participant::all() as $participant)
    <tr>
      <th scope="row">{{$participant->id}}</th>
      <td>{{$participant->name}}</td>
      <td>{{$participant->category}}</td>
      @if($participant->status === "unverified")
      <td class="text-danger">{{$participant->status}}</td>
      @else
      <td class="text-success">{{$participant->status}}</td>
      @endif
    </tr>
@endforeach
  </tbody>
</table>
                 </div>
                

             </div>
         </div>
     </section>

 </section>