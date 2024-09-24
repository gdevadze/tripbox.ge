<ul class="navbar-nav flex-column" id="navbar-sidebar">




    <li class="nav-item ms-2 my-2 text-uppercase" style="font-size: 12px!important;">@lang('menu')</li>

    <li class="nav-item">
        <a href="/" class="btn btn-primary-soft mb-0" style="background: #20B486;border: 0;color:#fff;font-size: 12px!important;width: 90%;text-align: left;">
            <img src="{{ asset('assets/images/svg/category-2.svg') }}" style="margin-right: 10px;"> @lang('home')
        </a>
    </li>

    
    @if(currentUser()->hasRole('მენეჯერი') || currentUser()->hasRole('Admin'))

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}" target="_blank" style="font-size:15px!important;">
         ადმინში გადასვლა 
        </a>
    </li>

    @endif


{{-- 
    <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/gift.svg') }}">   Достижения </a>
    </li>
    --}}


    <li class="nav-item ms-2 my-2 text-uppercase" style="font-size: 12px!important; color: #000 !important; font-weight: bold; margin-top: 20px!important;">@lang('mainss')</li>
    @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1)
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.cars.index') }}" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/cars-icon.svg') }}">   @lang('my_cars') </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.orders') }}#bookings" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/securitysafe.svg') }}">   @lang('bookings') </a>
    </li>

    @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1)
    <li class="nav-item">
        <a class="nav-link" href="javascript:0;" style="font-size:15px!important;">
        
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M12.5 7.04148C12.3374 7.0142 12.1704 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 9.82964 14.9858 9.6626 14.9585 9.5" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <path d="M5 15.2161C4.35254 13.5622 4 11.8013 4 10.1433C4 5.64588 7.58172 2 12 2C16.4183 2 20 5.64588 20 10.1433C20 14.6055 17.4467 19.8124 13.4629 21.6744C12.5343 22.1085 11.4657 22.1085 10.5371 21.6744C9.26474 21.0797 8.13831 20.1439 7.19438 19" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> </g>

</svg>
        
        MAP <span style="color:#21b486">Soon</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.calendar.index') }}" style="font-size:15px!important;">
        
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M7 4V2.5" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <path d="M17 4V2.5" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <circle cx="16.5" cy="16.5" r="1.5" stroke="#61657e" stroke-width="1.5"/> <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> </g>

</svg>
        
        
        @lang('calendar') </a>
    </li>
    @endif



   

    {{--
    <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px!important;"><i class="fa-regular fa-user"></i>   Рекомендации </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px!important;"><i class="fa-regular fa-user"></i>   Мои путешествия </a>
    </li>

    --}}


    @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1)




    <li class="nav-item">
        <a class="nav-link" href="/user/faq" style="font-size:15px!important;">
        
        <svg style="    margin-top: -4px;" fill="#61657e" height="19px" width="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502 502" xml:space="preserve">

            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

            <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M428.483,73.516C381.076,26.108,318.045,0,251,0C183.956,0,120.924,26.108,73.516,73.516S0,183.956,0,251 s26.108,130.076,73.516,177.484C120.924,475.892,183.956,502,251,502c67.045,0,130.076-26.108,177.483-73.516 C475.892,381.076,502,318.044,502,251S475.892,120.924,428.483,73.516z M251,482C123.626,482,20,378.374,20,251 S123.626,20,251,20s231,103.626,231,231S378.374,482,251,482z"/> <path d="M251,41.36c-71.131,0-129,57.869-129,129c0,19.299,15.701,35,35,35s35-15.701,35-35c0-32.533,26.467-59,59-59 c32.532,0,59,26.467,59,59c0,32.809-26.468,59.5-59,59.5c-19.299,0-35,15.701-35,35v68.781c0,19.299,15.701,35,35,35 s35-15.702,35-34.999v-38.638c25.275-7.181,48.08-22.162,64.871-42.763C369.655,229.195,380,200.116,380,170.36 C380,99.229,322.131,41.36,251,41.36z M273.893,277.422c-4.605,0.992-7.893,5.064-7.893,9.775v46.443c0,8.271-6.729,15-15,15 s-15-6.729-15-15v-68.781c0-8.271,6.729-15,15-15c43.561,0,79-35.664,79-79.5c0-43.561-35.439-79-79-79c-43.561,0-79,35.44-79,79 c0,8.271-6.729,15-15,15s-15-6.729-15-15c0-60.103,48.897-109,109-109c60.103,0,109,48.897,109,109 C360,221.641,323.787,266.667,273.893,277.422z"/> <path d="M251,386.641c-19.299,0-35,15.701-35,35v4c0,19.299,15.701,35,35,35s35-15.702,35-35v-4 C286,402.342,270.299,386.641,251,386.641z M266,425.641c0,8.271-6.729,15-15,15s-15-6.729-15-15v-4c0-8.271,6.729-15,15-15 s15,6.729,15,15V425.641z"/> <path d="M59.077,290.972C56.372,277.911,55,264.462,55,251c0-5.523-4.477-10-10-10s-10,4.477-10,10 c0,14.822,1.512,29.636,4.492,44.028c0.979,4.724,5.14,7.974,9.782,7.974c0.672,0,1.355-0.068,2.039-0.21 C56.721,301.672,60.197,296.38,59.077,290.972z"/> <path d="M172.982,430.859c-43.999-19.113-79.407-53.593-99.701-97.088c-2.335-5.005-8.287-7.169-13.29-4.834 c-5.005,2.335-7.169,8.285-4.834,13.29c22.36,47.925,61.375,85.916,109.856,106.976c1.297,0.564,2.649,0.831,3.979,0.831 c3.862,0,7.54-2.25,9.178-6.019C180.37,438.949,178.047,433.059,172.982,430.859z"/> </g> </g> </g> </g>

        </svg>
        
        FAQ </a>
    </li>

    

    @else
    {{--- 
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.my.trips') }}" target="_blank" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/favourite-main.svg') }}">   Trips </a>
    </li>
    ---}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.favorites') }}" target="_blank" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/favourite-main.svg') }}">   @lang('wishlist') </a>
    </li>

    @endif

    <li class="nav-item ms-2 my-2 text-uppercase" style="font-size: 12px!important; color: #000 !important; font-weight: bold; margin-top: 20px!important;">@lang('personal_infoss')</li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.profile') }}" style="font-size:15px!important;"><i class="fa-regular fa-user"></i> @lang('profile') <img style="width: 12px;margin-left: 5px;" src="{{ asset('assets/images/svg/edit-button.svg') }}"></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.payments') }}" style="font-size:15px!important;"><img style="    width: 18px;" src="{{ asset('assets/images/svg/money-send.svg') }}"> @lang('payments') <img style="width: 12px;margin-left: 5px;" src="{{ asset('assets/images/svg/edit-button.svg') }}"></a>
    </li>

    {{--
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking" style="font-size: 13px;">
            <img style="    width: 20px;" src="{{ asset('assets/images/svg/settings-main.svg') }}">  Settings
        </a>

        <ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
            <li class="nav-item"> <a class="nav-link" href="#">Settings</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Settings</a></li>
        </ul>
    </li>

    --}}
    <li class="nav-item ms-2 my-2 text-uppercase" style="font-size: 12px!important; color: #000 !important; font-weight: bold; margin-top: 20px!important;">@lang('helps_us')</li>

    <li class="nav-item">
        <a class="nav-link" href="javascript:0;" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/sms-notification.svg') }}">   @lang('messages') <span style="color:#21b486">Soon</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/money-send@2x.svg') }}">   Отзывы </a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" href="/contact" target="_blank" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/help-in-info.svg') }}">   @lang('contact') </a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="#" style="font-size:15px!important;"><img style="    width: 20px;" src="{{ asset('assets/images/svg/trip-box-icon.svg') }}">   TripBox </a>
    </li> -->


</ul>
<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
    <a class="h6 fw-light mb-0 text-body" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
        <i class="fa-solid fa-arrow-right-from-bracket"></i> @lang('log_outs')
    </a>
    <a class="h6 mb-0 text-body" href="#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
        <i class="bi bi-gear-fill"></i>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
          class="d-none">
        @csrf
    </form>
</div>
