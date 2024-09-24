

<footer class="bg-dark pt-5 mt-8">
    <div class="container">

        <div class="row g-4">


            <div class="col-lg-3">

                <a href="#">
                    <img class="h-40px" src="{{ asset('/assets/images/logo.png') }}" alt="logo">
                </a>
                <p class="my-3 text-body-secondary" style="color:#3A3E5E!important;">@lang('footer_text')</p>

                <img src="{{ asset('assets/images/social/telegram.svg') }}">
                <img src="{{ asset('assets/images/social/viber.svg') }}">
                <img src="{{ asset('assets/images/social/whatsaap.svg') }}">

            </div>


            <div class="col-lg-8 ms-auto">
                <div class="row g-4">


                    <div class="col-md-4">

                        <ul class="nav flex-column text-primary-hover">
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('trips')</a></li>
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">FAQ</a></li>
                       
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('get_partner')</a></li>
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('contact')</a></li>

                        </ul>
                    </div>




                    <div class="col-md-4">

                        <ul class="nav flex-column text-primary-hover">
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#"> @lang('about_us')</a></li>
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('login')</a></li>
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('register')</a></li>
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('my_profile')</a></li>
                

                        </ul>
                    </div>

                    <div class="col-md-4">

                        <ul class="nav flex-column text-primary-hover">
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('write_us')</a>

                                <a href="" style="color: #232538!important; font-weight: bold; font-size: 20px;">info@tripbox.ge</a></li>
                            <li class="nav-item"><a class="nav-link text-body-secondary" href="#">@lang('call_to_us')</a>

                                <a href="" style="color: #232538!important; font-weight: bold; font-size: 20px;"> +995 591 30 09 98</a></li>
                                  


                        </ul>
                    </div>



                </div>
            </div>

        </div>






        <hr class="mt-4 mb-0">


        <div class="row">
            <div class="container">
                <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">

                    <div class="text-body-secondary text-primary-hover" style="color:#232538!important;"> 2024 © TripBox</div>

                    <div class="nav mt-2 mt-lg-0">
                        <ul class="list-inline text-primary-hover mx-auto mb-0">
                            <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#" style="color:#232538!important;">@lang('confidencialoba')</a></li>
                            <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#" style="color:#232538!important;">@lang('privicy_rules')</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="back-top"></div>


<div class="navbar navbar-mobile">
    <ul class="navbar-nav">


    @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1)
    <li class="nav-item">
            <a class="nav-link " href="{{ route('user.calendar.index') }}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M7 4V2.5" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <path d="M17 4V2.5" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <circle cx="16.5" cy="16.5" r="1.5" stroke="#61657e" stroke-width="1.5"/> <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke="#61657e" stroke-width="1.5" stroke-linecap="round"/> </g>

</svg>
        
                <span class="mb-0 nav-text">@lang('calendar') </span>
            </a>
        </li>

        @else

        <li class="nav-item">
            <a class="nav-link " href="{{ route('index') }}">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="#1C274C" stroke-width="1.5"/> <path d="M15 18H9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/> </g>

</svg>
                <span class="mb-0 nav-text">@lang('home')</span>
            </a>
        </li>

        @endif


        @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1)


        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.cars.index') }}">

            <img style="    width: 20px;" src="{{ asset('assets/images/svg/cars-icon.svg') }}">


                <span class="mb-0 nav-text">@lang('my_cars')</span>
            </a>
        </li>



        @else

        <li class="nav-item">
            <a class="nav-link" href="/contact">

            <img style="    width: 20px;" src="{{ asset('assets/images/svg/help-in-info.svg') }}">


                <span class="mb-0 nav-text">@lang('contact')</span>
            </a>
        </li>

        @endif

        {{-- 
        <li class="nav-item">
            <a class="nav-link" href="/tripclub">

            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M8.57385 20.3523L11.9553 13.5894C11.9737 13.5526 12.0263 13.5526 12.0447 13.5894L15.4261 20.3523C15.4483 20.3965 15.3996 20.4426 15.3566 20.4181L12.0248 18.5142C12.0094 18.5054 11.9906 18.5054 11.9752 18.5142L8.64338 20.4181C8.60043 20.4426 8.55173 20.3965 8.57385 20.3523Z" stroke="#33363F" stroke-linecap="round"/> <path d="M20.5 18.5L16.5 3.5" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/> <path d="M3.5 18.5L7.5 3.5" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/> <path d="M12 10.5V8.5" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/> <path d="M12 5.5V3.5" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/> </g>

</svg>


                <span class="mb-0 nav-text">Trip Club</span>
            </a>
        </li>

        --}}
      


        @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1)

        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.orders') }}">

         <img src="{{asset('/assets/images/svg/securitysafe.svg')}}" style="height: 20px;">


                <span class="mb-0 nav-text"> @lang('bookings') </span>
            </a>
        </li>
       


        @else
        <li class="nav-item">
            <a class="nav-link" href="/discover-georgia">

         <img src="{{asset('/assets/images/trip/logo_trips_for_menu.png')}}" style="height: 20px;">


                <span class="mb-0 nav-text">Trip</span>
            </a>
        </li>

        @endif




        <li class="nav-item">
        @auth

            <a class="nav-link" href="/user/orders">

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99997 10C10.8653 10 11.7111 9.74341 12.4306 9.26268C13.1501 8.78195 13.7108 8.09867 14.0419 7.29924C14.3731 6.49982 14.4597 5.62015 14.2909 4.77148C14.1221 3.92281 13.7054 3.14326 13.0936 2.53141C12.4817 1.91956 11.7022 1.50288 10.8535 1.33407C10.0048 1.16526 9.12516 1.2519 8.32573 1.58303C7.5263 1.91416 6.84302 2.47492 6.36229 3.19438C5.88156 3.91385 5.62497 4.75971 5.62497 5.625C5.62629 6.78492 6.08766 7.89695 6.90784 8.71713C7.72803 9.53732 8.84006 9.99868 9.99997 10ZM9.99997 2.5C10.618 2.5 11.2222 2.68328 11.7361 3.02666C12.25 3.37004 12.6506 3.8581 12.8871 4.42912C13.1236 5.00013 13.1855 5.62847 13.0649 6.23466C12.9443 6.84085 12.6467 7.39767 12.2097 7.83471C11.7726 8.27175 11.2158 8.56938 10.6096 8.68996C10.0034 8.81053 9.3751 8.74865 8.80409 8.51213C8.23307 8.2756 7.74501 7.87506 7.40163 7.36116C7.05825 6.84726 6.87497 6.24307 6.87497 5.625C6.87596 4.7965 7.20552 4.00223 7.79136 3.41639C8.37719 2.83055 9.17147 2.50099 9.99997 2.5ZM17.7643 16.3313C17.227 14.6992 16.1858 13.2797 14.7907 12.2768C13.3955 11.2739 11.7182 10.7393 9.99997 10.75C8.28177 10.7393 6.60446 11.2739 5.20928 12.2768C3.8141 13.2797 2.77296 14.6992 2.2356 16.3313C2.1457 16.6052 2.12279 16.8966 2.16879 17.1812C2.21479 17.4658 2.32836 17.7352 2.49997 17.9669C2.67557 18.2087 2.90577 18.4057 3.17184 18.5418C3.43792 18.6778 3.73237 18.7492 4.03122 18.75H15.9687C16.2676 18.7492 16.562 18.6778 16.8281 18.5418C17.0942 18.4057 17.3244 18.2087 17.5 17.9669C17.6716 17.7352 17.7851 17.4658 17.8311 17.1812C17.8771 16.8966 17.8542 16.6052 17.7643 16.3313ZM16.4893 17.2325C16.4298 17.315 16.3516 17.3822 16.2611 17.4286C16.1706 17.4751 16.0704 17.4996 15.9687 17.5H4.03122C3.9295 17.4996 3.82933 17.4751 3.73885 17.4286C3.64838 17.3822 3.57017 17.315 3.5106 17.2325C3.45576 17.1602 3.41921 17.0758 3.40409 16.9863C3.38896 16.8968 3.3957 16.805 3.42372 16.7188C3.88872 15.3433 4.77329 14.1482 5.95296 13.3018C7.13264 12.4553 8.54803 12.0001 9.99997 12.0001C11.4519 12.0001 12.8673 12.4553 14.047 13.3018C15.2267 14.1482 16.1112 15.3433 16.5762 16.7188C16.6042 16.805 16.611 16.8968 16.5959 16.9863C16.5807 17.0758 16.5442 17.1602 16.4893 17.2325Z" fill="#74788E"></path>
</svg>


                <span class="mb-0 nav-text">@lang('profile')</span>
            </a>

            @else
             <a class="nav-link" href="javascript:0;" data-bs-toggle="modal" data-bs-target="#exampleModal">

<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99997 10C10.8653 10 11.7111 9.74341 12.4306 9.26268C13.1501 8.78195 13.7108 8.09867 14.0419 7.29924C14.3731 6.49982 14.4597 5.62015 14.2909 4.77148C14.1221 3.92281 13.7054 3.14326 13.0936 2.53141C12.4817 1.91956 11.7022 1.50288 10.8535 1.33407C10.0048 1.16526 9.12516 1.2519 8.32573 1.58303C7.5263 1.91416 6.84302 2.47492 6.36229 3.19438C5.88156 3.91385 5.62497 4.75971 5.62497 5.625C5.62629 6.78492 6.08766 7.89695 6.90784 8.71713C7.72803 9.53732 8.84006 9.99868 9.99997 10ZM9.99997 2.5C10.618 2.5 11.2222 2.68328 11.7361 3.02666C12.25 3.37004 12.6506 3.8581 12.8871 4.42912C13.1236 5.00013 13.1855 5.62847 13.0649 6.23466C12.9443 6.84085 12.6467 7.39767 12.2097 7.83471C11.7726 8.27175 11.2158 8.56938 10.6096 8.68996C10.0034 8.81053 9.3751 8.74865 8.80409 8.51213C8.23307 8.2756 7.74501 7.87506 7.40163 7.36116C7.05825 6.84726 6.87497 6.24307 6.87497 5.625C6.87596 4.7965 7.20552 4.00223 7.79136 3.41639C8.37719 2.83055 9.17147 2.50099 9.99997 2.5ZM17.7643 16.3313C17.227 14.6992 16.1858 13.2797 14.7907 12.2768C13.3955 11.2739 11.7182 10.7393 9.99997 10.75C8.28177 10.7393 6.60446 11.2739 5.20928 12.2768C3.8141 13.2797 2.77296 14.6992 2.2356 16.3313C2.1457 16.6052 2.12279 16.8966 2.16879 17.1812C2.21479 17.4658 2.32836 17.7352 2.49997 17.9669C2.67557 18.2087 2.90577 18.4057 3.17184 18.5418C3.43792 18.6778 3.73237 18.7492 4.03122 18.75H15.9687C16.2676 18.7492 16.562 18.6778 16.8281 18.5418C17.0942 18.4057 17.3244 18.2087 17.5 17.9669C17.6716 17.7352 17.7851 17.4658 17.8311 17.1812C17.8771 16.8966 17.8542 16.6052 17.7643 16.3313ZM16.4893 17.2325C16.4298 17.315 16.3516 17.3822 16.2611 17.4286C16.1706 17.4751 16.0704 17.4996 15.9687 17.5H4.03122C3.9295 17.4996 3.82933 17.4751 3.73885 17.4286C3.64838 17.3822 3.57017 17.315 3.5106 17.2325C3.45576 17.1602 3.41921 17.0758 3.40409 16.9863C3.38896 16.8968 3.3957 16.805 3.42372 16.7188C3.88872 15.3433 4.77329 14.1482 5.95296 13.3018C7.13264 12.4553 8.54803 12.0001 9.99997 12.0001C11.4519 12.0001 12.8673 12.4553 14.047 13.3018C15.2267 14.1482 16.1112 15.3433 16.5762 16.7188C16.6042 16.805 16.611 16.8968 16.5959 16.9863C16.5807 17.0758 16.5442 17.1602 16.4893 17.2325Z" fill="#74788E"></path>
</svg>


    <span class="mb-0 nav-text">@lang('profile')</span>
</a>


            @endauth
        </li>
        <li class="nav-item">
            <a class="nav-link openbtn" href="javascript:0;"  onclick="openNavMenu()">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M9 12C9 12.5523 8.55228 13 8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11C8.55228 11 9 11.4477 9 12Z" fill="#1C274C"/> <path d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z" fill="#1C274C"/> <path d="M17 12C17 12.5523 16.5523 13 16 13C15.4477 13 15 12.5523 15 12C15 11.4477 15.4477 11 16 11C16.5523 11 17 11.4477 17 12Z" fill="#1C274C"/> <path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/> </g>

</svg>
                <span class="mb-0 nav-text">@lang('menu')</span>
            </a>
        </li>
    </ul>
</div>


<!-- user -->
<div class="modal fade" id="exampleModal" style="
--bs-modal-bg: #fff0;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body" style="
		--bs-modal-bg: #fff0;">

                <section class="" style="    padding-top: 0px;
		 padding-bottom: 0px;">
                    <div class="container h-100 d-flex px-0 px-sm-4">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style=" position: absolute;
    right: 0;
    margin-right: 100px;
    margin-top: 20px;"></button>
                                <div class="bg-mode shadow rounded-3 overflow-hidden">
                                    <div class="row g-0">

                                        <div class="col-lg-6 align-items-center order-2 order-lg-1">
                                            <div class="">
                                                

                                                <div class="video-wrapper">
	<div class="video-container" id="video-container">
		<video controls id="video" preload="metadata" poster="{{asset('/assets/images/home/login.jpeg')}}">
			<source src="{{asset('/assets/video/video_2.mp4')}}" type="video/mp4">
		</video>

		<div class="play-button-wrapper">
			<div title="Play video" class="play-gif" id="circle-play-b">
			
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
					<path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
				</svg>
			</div>
		</div>
	</div>
</div>

                                            </div>


                                        </div>


                                        <div class="col-lg-6 order-1">
                                            <div class="p-4 p-sm-7">

                                                <h1 class="mb-2 h3 text-center" style="font-size:25px; margin-bottom:50px!important">@lang('new_profile')</h1>



                                                <form class="mt-4 text-start" >

                                                    <div class="vstack gap-3" >
                                                        <!-- <a href="#" class="btn btn-light mb-0" style="background: #fff; border: 1px solid #78BC61; border-radius: 40px; color: #232538;"><i class="fab fa-fw fa-google text-google-icon me-2"></i> @lang('login') Google</a>
                                                        <a href="#" class="btn btn-light mb-0" style="background: #fff; border: 1px solid #78BC61; border-radius: 40px; color: #232538;"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i> @lang('login') Facebook</a>
                                                        <a href="#" class="btn btn-light mb-0" style="background: #fff; border: 1px solid #78BC61; border-radius: 40px; color: #232538;"><i class="fab fa-fw fa-apple text-facebook me-2" style="color:#000000;"></i> @lang('login') Apple</a> -->
                                                        <a href="{{ route('login') }}" class="btn btn-light mb-0" style="background: #fff; border: 1px solid #78BC61; border-radius: 40px; color: #232538;">
<!--                                                             
                                                        <i class="fab fa-fw fa-envelope  me-2"  style="color:#000000;"></i> -->
                                                        
                                                        @lang('login') E-mail</a>

                                                    </div>

                                                    <p class="text-center" style="    margin-top: 30px;">@lang('with_registration_you_agree')  <a href="/rules" style="color:#48713A;">@lang('rules_and_conditions')</a></p>
                                                    <p class="text-center">@lang('do_you_have_a_profile') <a href="{{ route('login') }}" style="color:#48713A;">@lang('login')</a></p>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>

        </div>
    </div>
</div>
<!-- ... user -->

