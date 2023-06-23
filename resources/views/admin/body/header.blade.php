@php
$id = Auth::user()->id;
$adminData = App\Models\User::find($id);
@endphp


<nav class="navbar navbar-static-top navbar-expand-lg d-flex justify-content-between">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
            

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                 
                  
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="" class="user-image" alt="" />
                      <span class="d-none d-lg-inline-block">{{$adminData->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="" class="img-circle" alt="" />
                        <div class="d-inline-block">
                        {{$adminData->name}} <small class="pt-1">{{$adminData->email}}</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{route('admin.profile')}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                     
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="{{route('user.logout')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>