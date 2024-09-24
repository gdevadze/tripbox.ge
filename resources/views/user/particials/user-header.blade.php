<nav class="navbar top-bar navbar-light py-0 py-xl-3">
                <div class="container-fluid p-0">
                    <div class="d-flex justify-content-between w-100">


                        <div class="d-flex align-items-center d-xl-none">
                            <a class="navbar-brand" @if(currentUser()->user_type == 1) href="{{ route('index') }}" @else href="{{ route('user.orders') }}" @endif>
                                <img class="navbar-brand-item h-40px" src="{{ asset('/assets/images/trip/logo_trips_for_menu.png') }}" style="object-fit: contain;" alt="">
                            </a>
                        </div>



                        <!-- <div class="navbar-expand-xl sidebar-offcanvas-menu">
                            <button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                                <i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
                            </button> 
                        </div>
 -->





                        <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                            <li class="nav-item dropdown ms-3 languages-users">
                                <button class="nav-notification lh-0 btn  p-0 mb-0 mob-width-heads" id="bd-theme"
                                        type="button"
                                        aria-expanded="false"
                                        data-bs-toggle="dropdown"
                                        data-bs-display="static">
                                    <img src="{{ asset('assets/images/svg/global.svg') }}">
                                    <span style="color:#032E2E;margin-left: 5px;">{{ strtoupper(currentLocale()) }}</span>
                                </button>

                                <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">

                          
                                @foreach($languages as $language)

                                <li class="mb-1">
                                <a href="{{LaravelLocalization::getLocalizedURL($language->code, null, [], true)}}"  class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                                {{ strtoupper($language->code) }}
                                    </a>
                                                                        </li>
                              @endforeach

    

                                </ul>
                            </li>


                         

<!-- 
                            <li class="nav-item dropdown ms-3">

                                <a class="nav-notification  p-0 mb-0" href="#" >
                                    <img src="{{ asset('assets/images/svg/sms-notification.svg') }}">
                                </a>




                            </li> -->




<li>
<div class="dropdown" style="    background: #fff;">
  <button class="  p-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="    background: #fff;    border: 0;">
  <div class="d-flex">

<div >
    <img class="avatar-img rounded-2" src="{{ currentUser()->get_image }}" 
    style="    height: 35px;
    object-fit: contain;
    width: 35px;
    margin-top: 3px;"  alt="avatar">
</div>
<!-- <div style="    margin-left: 15px;">
    <p class="small m-0" style="color: #808080;font-size:12px!important;text-transform: uppercase;margin-bottom: 0px!important;">@lang('user')</p>
<a class="h6 mt-2 mt-sm-0" style="font-size:15px!important;" href="#">{{ currentUser()->full_name }}</a>

</div> -->
</div>
  </button>
  <ul class="dropdown-menu" style="    margin-left: -78px;
    --bs-dropdown-min-width: 0;">
    <li><a class="dropdown-item" href="{{ route('user.profile') }}">@lang('profile')</a></li>
    <li><a class="dropdown-item" href="{{ route('user.orders') }}">@lang('bookings')</a></li>
    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">@lang('log_outs')</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
          class="d-none">
        @csrf
    </form>
  </ul>
</div>

</li>

                            <!-- <li class="nav-item ms-3 dropdown mg-left-50">

                                <a class="avatar avatar-sm p-0 dropdown-toggle" href="javascript:0;"  type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex">

                                        <div >
                                            <img class="avatar-img rounded-2" src="{{ currentUser()->get_image }}"  alt="avatar">
                                        </div>
                                        <div style="    margin-left: 15px;">
                                            <p class="small m-0" style="color: #808080;font-size:12px!important;text-transform: uppercase;margin-bottom: 0px!important;">@lang('user')</p>
                                            <a class="h6 mt-2 mt-sm-0" style="font-size:15px!important;" href="#">{{ currentUser()->full_name }}</a>

                                        </div>
                                    </div>
                                </a>

                                <ul class="dropdown-menu" >

                                    <li class="px-3 mb-3">
                                        <div class="d-flex align-items-center">

                                            <div class="avatar me-3">
                                                <img class="avatar-img rounded-circle shadow" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                            </div>
                                            <div>
                                                <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                                <p class="small m-0">example@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>


                                    <li> <hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
                                    <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                                </ul>
                            </li> -->

                        </ul>

                    </div>
                </div>
            </nav>