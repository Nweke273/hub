 <section>
     <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8 col-md-10">
                     <div class="subscribe-info-wrap text-center position-relative z-2">
                         <div class="section-heading" data-aos="fade-up">
                             <h6 class="h5 text-warning">Ready to Register?...</h6>
                             <h4>Please make the payment to the account number provided and fill in the following form</h4>
                         </div>
                         <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                             <a href="#contact-form" class="btn btn-primary">Register for Event</a>
                         </div>
                         <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                             <li class="nav-item">
                             <span><i class="far fa-check-circle text-primary me-2"></i>Expert-Hub Software Solutions</span>
                             <span><i class="far fa-check-circle text-primary me-2"></i>United Bank of Africa</span>
                             <span><i class="far fa-check-circle text-primary me-2"></i>1025593483</span>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
             <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
         </div>
     </section>
     @include('layouts.alert')


     <section class="contact-us-form pt-60 pb-120" style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom" id="contact-form">
         <div class="container">
             <div class="row justify-content-lg-between align-items-center">
                 <div class="col-lg-6 col-md-8 span-lg-3">
                     <div class="section-heading">

                     </div>
                     <form action="/event/register" class="register-form" method="post">
                         @csrf
                         <div class="row">

                             <div class="col-sm-12">
                                 <label for="event" class="mb-1">Select Event <span class="text-danger">*</span></label>
                                 <select name="event_id" id="event" class="form-select mb-3">
                                     @forelse($events as $key=>$event)
                                     <option value="{{$key}}">{{$event}}</option>
                                     @empty
                                     @endforelse
                                 </select>
                             </div>
                             <div class="col-sm-12">
                                 <label for="category" class="mb-1">Select Category <span class="text-danger">*</span></label>
                                 <select name="category" id="event" class="form-select mb-3">
                                    
                                    <option value="none" selected disabled>Select game</option>
                                     <option value="Snooker">Snooker</option>
                                     <option value="Table Tennis">Table Tennis</option>
                                     <option value="Chess">Chess</option>
                                     <option value="Whot">Whot</option>
                                     <option value="Ludo">Ludo</option>
                                     <option value="Pro Evolution Soccer">Pro Evolution Soccer</option>

                                     
                                 </select>
                             </div>
                             <div class="col-sm-12">
                                 <label for="name" class="mb-1">Name <span class="text-danger">*</span></label>
                                 <div class="input-group mb-3">
                                     <input type="text" class="form-control" id="name" name="name" required placeholder="Name" aria-label="Name">
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                 <div class="input-group mb-3">
                                     <input type="text" class="form-control" id="phone" name="phone_number" required placeholder="Phone" aria-label="Phone">
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                 <div class="input-group mb-3">
                                     <input type="email" class="form-control" id="email" name="email_address" required placeholder="Email" aria-label="Email">
                                 </div>
                             </div>
                             <div class="col-12">
                                 <label for="yourMessage" class="mb-1">Payment Reference <span class="text-danger">*</span></label>
                                 <div class="input-group mb-3">
                                     <input class="form-control" id="payment_reference" name="payment_reference" required placeholder="Type some information we can use to recognize your transaction" style="height: 120px"></textarea>
                                 </div>
                             </div>
                         </div>
                         <button type="submit" class="btn btn-primary mt-4">Register For This Event</button>
                     </form>
                 </div>
                 <div class="col-lg-5 col-md-10">
                     <div class="contact-us-img">
                         <img src="{{asset('assets/img/contact-us-img-2.svg')}}" alt="contact us" class="img-fluid">
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="contact-promo ptb-120" id="contact">
         <div class="container">
             <div class="row justify-content-center">

                 <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                     <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                         <span class="fad fa-envelope fa-3x text-primary"></span>
                         <div class="contact-promo-info mb-4">
                             <h5>Email Us</h5>
                             <p>Simple drop us an email at <strong>support@experthub.ng</strong>
                                 and you'll receive a reply within 24 hours</p>
                         </div>
                         <a href="mailto:support@experthub.ng" class="btn btn-primary mt-auto">Email Us</a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                     <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                         <span class="fad fa-phone fa-3x text-primary"></span>
                         <div class="contact-promo-info mb-4">
                             <h5>Give us a call</h5>
                             <p>Give us a ring. Our Experts are standing by <strong>tuesday to saturday</strong> from
                                 <strong>9am to 5pm EST.</strong>
                             </p>
                         </div>
                         <a href="tel:+2347067132390" class="btn btn-link mt-auto">+2347067132390</a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                     <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                         <span class="fad fa-comment-alt-lines fa-3x text-primary"></span>
                         <div class="contact-promo-info mb-4">
                             <h5>Visit our office</h5>
                             <p>We are open every week <strong>tuesday to saturday</strong> from
                                 <strong>9am to 5pm EST. <br>@ G.R.A NSUKKA, TOTAL RA.</strong>
                             </p>
                         </div>
                         <a href="#contact-form" class="btn btn-link mt-auto">Drop a message</a>
                     </div>
                 </div>

             </div>
         </div>
     </section>

 </section>