 <section class="sign-up-in-section bg-dark ptb-120"
     style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right" id="get-started">
     <div class="container">
         <h2 class="fw-bold text-white text-center display-5">Bring Your Projects</h1>

             <div class="row align-items-center justify-content-between">
                 <div class="col-xl-5 col-lg-5 col-md-12 order-1 order-lg-0">
                     <div class="testimonial-tab-slider-wrap mt-5">
                         <h1 class="fw-bold text-white display-5">Start Your Project with Us</h1>
                         <p>Whatever your goal or project size we will handel it utilize standards compliant. We hope
                             you
                             will be 100% satisfied.</p>
                         <hr>
                         <div class="tab-content testimonial-tab-content text-white-80" id="pills-tabContent">
                             <div class="tab-pane fade show active" id="testimonial-tab-1" role="tabpanel">
                                 <blockquote class="blockquote">
                                     <em>"Globally actualize economically sound alignments before tactical systems.
                                         Rapidiously actualize processes technically sound infomediaries. Holisticly
                                         pursue team building catalysts for change before team driven products. "</em>
                                 </blockquote>
                                 <div class="author-info mt-3">
                                     <span class="h6">Veronica P. Byrd</span>
                                     <span class="d-block small">Lorem Ipsum</span>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">
                                 <blockquote class="blockquote">
                                     <em>"Synergistically evisculate market positioning technology vis-a-vis team driven
                                         innovation. Phosfluorescently morph tactical communities for superior
                                         applications. Distinctively pontificate resource-leveling infomediaries and
                                         parallel models. "</em>
                                 </blockquote>
                                 <div class="author-info mt-3">
                                     <span class="h6">Raymond H. Gilbert</span>
                                     <span class="d-block small">Forest fire inspector</span>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">
                                 <blockquote class="blockquote">
                                     <em>"Professionally myocardinate corporate e-commerce through alternative
                                         functionalities. Compellingly matrix distributed convergence with goal-oriented
                                         synergy. Professionally embrace interactive opportunities through parallel
                                         innovation. "</em>
                                 </blockquote>
                                 <div class="author-info mt-3">
                                     <span class="h6">Donna R. Book</span>
                                     <span class="d-block small">Extractive engineer</span>
                                 </div>
                             </div>
                         </div>
                         <ul class="nav nav-pills mb-0 testimonial-tab-indicator mt-5" id="pills-tab" role="tablist">
                             <li class="nav-item" role="presentation">
                                 <button class="nav-link active" data-bs-toggle="pill"
                                     data-bs-target="#testimonial-tab-1" type="button" role="tab"
                                     aria-selected="true">
                                     <img src="assets/img/testimonial/1.jpg" alt="testimonial" width="45"
                                         class="img-fluid rounded-circle">
                                 </button>
                             </li>
                             <li class="nav-item" role="presentation">
                                 <button class="nav-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-2"
                                     type="button" role="tab" aria-selected="false">
                                     <img src="assets/img/testimonial/4.jpg" alt="testimonial" width="55"
                                         class="img-fluid rounded-circle">
                                 </button>
                             </li>
                             <li class="nav-item" role="presentation">
                                 <button class="nav-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-3"
                                     type="button" role="tab" aria-selected="false">
                                     <img src="assets/img/testimonial/6.jpg" alt="testimonial" width="55"
                                         class="img-fluid rounded-circle">
                                 </button>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-5 col-lg-7 col-md-12 order-0 order-lg-1">
                     <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                         <h3 class="fw-medium h4">Fill out the form and we'll be in touch as soon as possible.</h3>
                         <a href="/api/get-started">retrieve</a>
                         <form action="/api/get-started" class="mt-4 register-form" method="POST">
                             @csrf
                             <div class="row">
                                 <div class="col-sm-6">
                                     <div class="input-group mb-3">
                                         <input type="text" class="form-control" placeholder="Name" aria-label="name"
                                             name="name">
                                     </div>
                                 </div>
                                 <div class="col-sm-6 ">
                                     <div class="input-group mb-3">
                                         <input type="email" class="form-control" placeholder="Email"
                                             aria-label="email" name="email">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="input-group mb-3">
                                         <input type="text" class="form-control" placeholder="Company website"
                                             aria-label="company-website" name="website">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="input-group mb-3">
                                         <input type="email" class="form-control" placeholder="Work email"
                                             aria-label="work-Email" name="country">
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="input-group mb-3">
                                         <select class="form-control form-select" name="budget" id="budget"
                                             required="" data-msg="Please select your budget.">
                                             <option value="" selected="" disabled="">Budget</option>
                                             <option value="budget1">None, just getting started</option>
                                             <option value="budget1">Less than $20,000</option>
                                             <option value="budget1">$20,000 to $50,000</option>
                                             <option value="budget1">$50,000 to $100,000</option>
                                             <option value="budget2">$100,000 to $500,000</option>
                                             <option value="budget3">More than $500,000</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="input-group mb-3">
                                         <select class="form-control form-select" name="country" id="country"
                                             required="" data-msg="Please select your country.">
                                             <option value="" selected="" disabled="">Country</option>
                                             <option value="AF">Afghanistan</option>
                                             <option value="AX">Åland Islands</option>
                                             <option value="AL">Albania</option>
                                             <option value="DZ">Algeria</option>
                                             <option value="AS">American Samoa</option>
                                             <option value="AD">Andorra</option>
                                             <option value="AO">Angola</option>
                                             <option value="AI">Anguilla</option>
                                             <option value="AQ">Antarctica</option>
                                             <option value="AG">Antigua and Barbuda</option>
                                             <option value="AR">Argentina</option>
                                             <option value="AM">Armenia</option>
                                             <option value="AW">Aruba</option>
                                             <option value="AU">Australia</option>
                                             <option value="AT">Austria</option>
                                             <option value="AZ">Azerbaijan</option>
                                             <option value="BS">Bahamas</option>
                                             <option value="BH">Bahrain</option>
                                             <option value="BD">Bangladesh</option>
                                             <option value="BB">Barbados</option>
                                             <option value="BY">Belarus</option>
                                             <option value="BE">Belgium</option>
                                             <option value="BZ">Belize</option>
                                             <option value="BJ">Benin</option>
                                             <option value="BM">Bermuda</option>
                                             <option value="BT">Bhutan</option>
                                             <option value="BO">Bolivia, Plurinational State of</option>
                                             <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                             <option value="BA">Bosnia and Herzegovina</option>
                                             <option value="BW">Botswana</option>
                                             <option value="BV">Bouvet Island</option>
                                             <option value="BR">Brazil</option>
                                             <option value="IO">British Indian Ocean Territory</option>
                                             <option value="BN">Brunei Darussalam</option>
                                             <option value="BG">Bulgaria</option>
                                             <option value="BF">Burkina Faso</option>
                                             <option value="BI">Burundi</option>
                                             <option value="KH">Cambodia</option>
                                             <option value="CM">Cameroon</option>
                                             <option value="CA">Canada</option>
                                             <option value="CV">Cape Verde</option>
                                             <option value="KY">Cayman Islands</option>
                                             <option value="CF">Central African Republic</option>
                                             <option value="TD">Chad</option>
                                             <option value="CL">Chile</option>
                                             <option value="CN">China</option>
                                             <option value="CX">Christmas Island</option>
                                             <option value="CC">Cocos (Keeling) Islands</option>
                                             <option value="CO">Colombia</option>
                                             <option value="KM">Comoros</option>
                                             <option value="CG">Congo</option>
                                             <option value="CD">Congo, the Democratic Republic of the</option>
                                             <option value="CK">Cook Islands</option>
                                             <option value="CR">Costa Rica</option>
                                             <option value="CI">Côte d'Ivoire</option>
                                             <option value="HR">Croatia</option>
                                             <option value="CU">Cuba</option>
                                             <option value="CW">Curaçao</option>
                                             <option value="CY">Cyprus</option>
                                             <option value="CZ">Czech Republic</option>
                                             <option value="DK">Denmark</option>
                                             <option value="DJ">Djibouti</option>
                                             <option value="DM">Dominica</option>
                                             <option value="DO">Dominican Republic</option>
                                             <option value="EC">Ecuador</option>
                                             <option value="EG">Egypt</option>
                                             <option value="SV">El Salvador</option>
                                             <option value="GQ">Equatorial Guinea</option>
                                             <option value="ER">Eritrea</option>
                                             <option value="EE">Estonia</option>
                                             <option value="ET">Ethiopia</option>
                                             <option value="FK">Falkland Islands (Malvinas)</option>
                                             <option value="FO">Faroe Islands</option>
                                             <option value="FJ">Fiji</option>
                                             <option value="FI">Finland</option>
                                             <option value="FR">France</option>
                                             <option value="GF">French Guiana</option>
                                             <option value="PF">French Polynesia</option>
                                             <option value="TF">French Southern Territories</option>
                                             <option value="GA">Gabon</option>
                                             <option value="GM">Gambia</option>
                                             <option value="GE">Georgia</option>
                                             <option value="DE">Germany</option>
                                             <option value="GH">Ghana</option>
                                             <option value="GI">Gibraltar</option>
                                             <option value="GR">Greece</option>
                                             <option value="GL">Greenland</option>
                                             <option value="GD">Grenada</option>
                                             <option value="GP">Guadeloupe</option>
                                             <option value="GU">Guam</option>
                                             <option value="GT">Guatemala</option>
                                             <option value="GG">Guernsey</option>
                                             <option value="GN">Guinea</option>
                                             <option value="GW">Guinea-Bissau</option>
                                             <option value="GY">Guyana</option>
                                             <option value="HT">Haiti</option>
                                             <option value="HM">Heard Island and McDonald Islands</option>
                                             <option value="VA">Holy See (Vatican City State)</option>
                                             <option value="HN">Honduras</option>
                                             <option value="HK">Hong Kong</option>
                                             <option value="HU">Hungary</option>
                                             <option value="IS">Iceland</option>
                                             <option value="IN">India</option>
                                             <option value="ID">Indonesia</option>
                                             <option value="IR">Iran, Islamic Republic of</option>
                                             <option value="IQ">Iraq</option>
                                             <option value="IE">Ireland</option>
                                             <option value="IM">Isle of Man</option>
                                             <option value="IL">Israel</option>
                                             <option value="IT">Italy</option>
                                             <option value="JM">Jamaica</option>
                                             <option value="JP">Japan</option>
                                             <option value="JE">Jersey</option>
                                             <option value="JO">Jordan</option>
                                             <option value="KZ">Kazakhstan</option>
                                             <option value="KE">Kenya</option>
                                             <option value="KI">Kiribati</option>
                                             <option value="KP">Korea, Democratic People's Republic of</option>
                                             <option value="KR">Korea, Republic of</option>
                                             <option value="KW">Kuwait</option>
                                             <option value="KG">Kyrgyzstan</option>
                                             <option value="LA">Lao People's Democratic Republic</option>
                                             <option value="LV">Latvia</option>
                                             <option value="LB">Lebanon</option>
                                             <option value="LS">Lesotho</option>
                                             <option value="LR">Liberia</option>
                                             <option value="LY">Libya</option>
                                             <option value="LI">Liechtenstein</option>
                                             <option value="LT">Lithuania</option>
                                             <option value="LU">Luxembourg</option>
                                             <option value="MO">Macao</option>
                                             <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                             <option value="MG">Madagascar</option>
                                             <option value="MW">Malawi</option>
                                             <option value="MY">Malaysia</option>
                                             <option value="MV">Maldives</option>
                                             <option value="ML">Mali</option>
                                             <option value="MT">Malta</option>
                                             <option value="MH">Marshall Islands</option>
                                             <option value="MQ">Martinique</option>
                                             <option value="MR">Mauritania</option>
                                             <option value="MU">Mauritius</option>
                                             <option value="YT">Mayotte</option>
                                             <option value="MX">Mexico</option>
                                             <option value="FM">Micronesia, Federated States of</option>
                                             <option value="MD">Moldova, Republic of</option>
                                             <option value="MC">Monaco</option>
                                             <option value="MN">Mongolia</option>
                                             <option value="ME">Montenegro</option>
                                             <option value="MS">Montserrat</option>
                                             <option value="MA">Morocco</option>
                                             <option value="MZ">Mozambique</option>
                                             <option value="MM">Myanmar</option>
                                             <option value="NA">Namibia</option>
                                             <option value="NR">Nauru</option>
                                             <option value="NP">Nepal</option>
                                             <option value="NL">Netherlands</option>
                                             <option value="NC">New Caledonia</option>
                                             <option value="NZ">New Zealand</option>
                                             <option value="NI">Nicaragua</option>
                                             <option value="NE">Niger</option>
                                             <option value="NG">Nigeria</option>
                                             <option value="NU">Niue</option>
                                             <option value="NF">Norfolk Island</option>
                                             <option value="MP">Northern Mariana Islands</option>
                                             <option value="NO">Norway</option>
                                             <option value="OM">Oman</option>
                                             <option value="PK">Pakistan</option>
                                             <option value="PW">Palau</option>
                                             <option value="PS">Palestinian Territory, Occupied</option>
                                             <option value="PA">Panama</option>
                                             <option value="PG">Papua New Guinea</option>
                                             <option value="PY">Paraguay</option>
                                             <option value="PE">Peru</option>
                                             <option value="PH">Philippines</option>
                                             <option value="PN">Pitcairn</option>
                                             <option value="PL">Poland</option>
                                             <option value="PT">Portugal</option>
                                             <option value="PR">Puerto Rico</option>
                                             <option value="QA">Qatar</option>
                                             <option value="RE">Réunion</option>
                                             <option value="RO">Romania</option>
                                             <option value="RU">Russian Federation</option>
                                             <option value="RW">Rwanda</option>
                                             <option value="BL">Saint Barthélemy</option>
                                             <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                             </option>
                                             <option value="KN">Saint Kitts and Nevis</option>
                                             <option value="LC">Saint Lucia</option>
                                             <option value="MF">Saint Martin (French part)</option>
                                             <option value="PM">Saint Pierre and Miquelon</option>
                                             <option value="VC">Saint Vincent and the Grenadines</option>
                                             <option value="WS">Samoa</option>
                                             <option value="SM">San Marino</option>
                                             <option value="ST">Sao Tome and Principe</option>
                                             <option value="SA">Saudi Arabia</option>
                                             <option value="SN">Senegal</option>
                                             <option value="RS">Serbia</option>
                                             <option value="SC">Seychelles</option>
                                             <option value="SL">Sierra Leone</option>
                                             <option value="SG">Singapore</option>
                                             <option value="SX">Sint Maarten (Dutch part)</option>
                                             <option value="SK">Slovakia</option>
                                             <option value="SI">Slovenia</option>
                                             <option value="SB">Solomon Islands</option>
                                             <option value="SO">Somalia</option>
                                             <option value="ZA">South Africa</option>
                                             <option value="GS">South Georgia and the South Sandwich Islands
                                             </option>
                                             <option value="SS">South Sudan</option>
                                             <option value="ES">Spain</option>
                                             <option value="LK">Sri Lanka</option>
                                             <option value="SD">Sudan</option>
                                             <option value="SR">Suriname</option>
                                             <option value="SJ">Svalbard and Jan Mayen</option>
                                             <option value="SZ">Swaziland</option>
                                             <option value="SE">Sweden</option>
                                             <option value="CH">Switzerland</option>
                                             <option value="SY">Syrian Arab Republic</option>
                                             <option value="TW">Taiwan, Province of China</option>
                                             <option value="TJ">Tajikistan</option>
                                             <option value="TZ">Tanzania, United Republic of</option>
                                             <option value="TH">Thailand</option>
                                             <option value="TL">Timor-Leste</option>
                                             <option value="TG">Togo</option>
                                             <option value="TK">Tokelau</option>
                                             <option value="TO">Tonga</option>
                                             <option value="TT">Trinidad and Tobago</option>
                                             <option value="TN">Tunisia</option>
                                             <option value="TR">Turkey</option>
                                             <option value="TM">Turkmenistan</option>
                                             <option value="TC">Turks and Caicos Islands</option>
                                             <option value="TV">Tuvalu</option>
                                             <option value="UG">Uganda</option>
                                             <option value="UA">Ukraine</option>
                                             <option value="AE">United Arab Emirates</option>
                                             <option value="GB">United Kingdom</option>
                                             <option value="US">United States</option>
                                             <option value="UM">United States Minor Outlying Islands</option>
                                             <option value="UY">Uruguay</option>
                                             <option value="UZ">Uzbekistan</option>
                                             <option value="VU">Vanuatu</option>
                                             <option value="VE">Venezuela, Bolivarian Republic of</option>
                                             <option value="VN">Viet Nam</option>
                                             <option value="VG">Virgin Islands, British</option>
                                             <option value="VI">Virgin Islands, U.S.</option>
                                             <option value="WF">Wallis and Futuna</option>
                                             <option value="EH">Western Sahara</option>
                                             <option value="YE">Yemen</option>
                                             <option value="ZM">Zambia</option>
                                             <option value="ZW">Zimbabwe</option>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <div class="input-group mb-3">
                                         <textarea class="form-control" placeholder="Tell us more about your project, needs and budget" style="height: 120px"
                                             name="about"></textarea>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value=""
                                             id="flexCheckChecked">
                                         <label class="form-check-label small" for="flexCheckChecked">
                                             Yes, I'd like to receive occasional marketing emails from us. I have the
                                             right to opt out at any time.
                                             <a href="#"> View privacy policy</a>.
                                         </label>
                                     </div>
                                 </div>
                                 <div class="col-12">
                                     <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
     </div>
 </section>
