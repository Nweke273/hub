<div class="app-brand">
              <a href="/dashboard">
              <img src="http://127.0.0.1:8000/assets/img/logo-color.png" alt="logo" class="img-fluid logo-color">
                <span class="brand-name">Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">APPLICANTS</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li  class="active" >
                              <a class="sidenav-item-link" href="{{route('reg.applicants')}}">
                                <span class="nav-text">Registered-Applicants</span>
                                
                              </a>
                            </li>
                          
                            <li >
                              <a class="sidenav-item-link" href="/dashboard">
                                <span class="nav-text">Trashed-Application</span>
                                
                                <span class="badge badge-success">new</span>
                                
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                  </li>
                
                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">RESULT</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                      <li  class="active" >
                              <a class="sidenav-item-link" href="{{route('general.result')}}">
                                <span class="nav-text">General-Result-Page</span>
                                
                              </a>
                            </li>

                      </div>
                    </ul>
                  </li>
               
                 

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Security</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{route('admin.profile')}}">
                                <span class="nav-text">User Profile</span>
                                
                              </a>
                            </li>
                      
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="{{route('login')}}">Sign In</a>
                              </li>
                              
                              <li >
                                <a href="{{route('register')}}">Sign Up</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
              
                        
                      </div>
                    </ul>
                  </li>
                

                
              </ul>

            </div>

            <hr class="separator" />

            <div class="sidebar-footer">
              
            </div>