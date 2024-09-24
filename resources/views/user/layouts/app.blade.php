<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('/assets/favicon//site.webmanifest')}}">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/apps.min.css') }}">

    <style>
        .navbar-nav {
            margin: inherit;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-link {
            text-align: left;
        }
        .text-primary {
    --bs-text-opacity: 1;
    color: #AAE2D1!important;
}
.dropdown .dropdown-toggle:after {
    display: none!important;
}
.languages-users {
    margin-right: 20px;
}
.sidebar_user,.sidepanel_user{height:100%;width:0;position:fixed;left:0;background-color:#fff;overflow-x:hidden;padding-top:60px;transition:.5s}.sidebar_user{z-index:22222;top:0}.sidebar_user a,.sidepanel_user a{padding:8px 8px 8px 32px;text-decoration:none;font-size:25px;color:#818181;display:block;transition:.3s}.sidebar_user a:hover,.sidepanel_user a:hover{color:#f1f1f1}.sidebar_user .closebtn,.sidepanel_user .closebtn{position:absolute;top:0;right:25px;font-size:36px;margin-left:50px}#main{transition:margin-left .5s;padding:20px}.sidepanel_user{z-index:2222;top:0}

@media only screen and (max-width: 600px) {
    .mobile_user_flexs {
    display: block!important;
}
.mg-left-50 {
    margin-left: 50px;
}
.mob-width-heads {
    width: 100px!important;
}
.languages-users {
    margin-right: 0px;
    margin-left: 0px!important;
}


.mobile-lefts-side-button {
        text-align: left!important;
    }
}
@media only screen and (max-width: 360px) {
  .mob-width-heads {
        width: 80px !important;
    }

}
   
.invoice-box {
    /* width: 70%; */
    padding: 20px;
}

.invoice-main-block{
    margin-top: 30px;
    margin-bottom: 30px;
}
.invoice-main-block h5 {
    margin-bottom: 20px;
}
.invoice-main-block p {
    margin-bottom: 0px;
}
.invoice-main-block h6 {
    margin-bottom: 20px;
}
.invoice-main-block ul {
    padding-left: 0px;
}
.invoice-main-block ul li {
    list-style: none;
    margin-bottom: 10px;
    color:#0b0a12;
    border-bottom: 1px solid #e1e1e1;
    padding-bottom: 10px;
}
</style>
    @stack('css')
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6676af229d7f358570d249e8/1i0vpo7m7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body>
<div id="mySidepanel_user" class="sidepanel_user">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavMenu()">&times;</a>
  <a href="#">@lang('trips')</a>
  <a href="/faq">FAQ</a>
  <a href="/become-partner">@lang('get_partner')</a>
  <a href="/contact">@lang('contact')</a>
  
</div>
@yield('content')




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
    <a class="nav-link" href="/user/wishlist">

    <svg width="20" height="20" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 16C8.74371 16 8.4967 15.9072 8.30415 15.7387C7.57698 15.1035 6.87593 14.5065 6.25739 13.9799L6.25423 13.9772C4.4408 12.4332 2.87483 11.0998 1.78527 9.78628C0.567316 8.31795 0 6.92567 0 5.40472C0 3.92701 0.507164 2.5637 1.42794 1.5658C2.35972 0.556099 3.63825 0 5.02843 0C6.06748 0 7.01902 0.328208 7.85661 0.975421C8.2793 1.30208 8.66243 1.70191 9 2.16827C9.33768 1.70191 9.7207 1.30208 10.1435 0.975421C10.9811 0.328208 11.9327 0 12.9717 0C14.3617 0 15.6404 0.556099 16.5722 1.5658C17.493 2.5637 18 3.92701 18 5.40472C18 6.92563 17.4328 8.31792 16.2149 9.78614C15.1253 11.0998 13.5594 12.433 11.7463 13.9769C11.1267 14.5043 10.4245 15.1022 9.69571 15.739C9.5031 15.9073 9.25589 16.0001 9 16ZM5.02843 1.05347C3.93627 1.05347 2.93295 1.48898 2.20303 2.27982C1.46229 3.08264 1.05427 4.19238 1.05427 5.40472C1.05427 6.6839 1.53011 7.82792 2.59703 9.11413C3.62823 10.3573 5.16206 11.6633 6.93802 13.1755L6.94129 13.1782C7.56214 13.7068 8.26597 14.3062 8.99849 14.9461C9.7354 14.3049 10.4403 13.7047 11.0624 13.1752C12.8382 11.663 14.3719 10.3573 15.4031 9.11413C16.4699 7.82792 16.9457 6.6839 16.9457 5.40472C16.9457 4.19234 16.5377 3.08261 15.797 2.27982C15.0672 1.48898 14.0638 1.05347 12.9717 1.05347C12.1716 1.05347 11.437 1.3076 10.7884 1.80866C10.2104 2.25541 9.80779 2.82015 9.57168 3.21531C9.45032 3.41851 9.23664 3.53979 9 3.53979C8.76336 3.53979 8.54968 3.41851 8.42829 3.21531C8.19239 2.82015 7.78971 2.25541 7.21153 1.80866C6.56297 1.3076 5.82838 1.05347 5.02843 1.05347Z" fill="#61657E"></path>
</svg>


        <span class="mb-0 nav-text">@lang('wishlist')</span>
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

            <a class="nav-link" href="javascript:0;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">

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


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>


<script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
<script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>


<script src="{{ asset('assets/js/functions.js') }}"></script>

@stack('js')

<style>
    .modal-content {
        background:#fff;
    }
</style>



   

        <!-- add routes ...-->
        <link rel="stylesheet" href="{{asset('/assets/css/iziToast.min.css')}}">
        <script src="{{asset('/assets/js/iziToast.min.js')}}"></script>
        <script>
            function notify(status, message) {
                if(typeof message == 'string'){
                    iziToast[status]({
                        message: message,
                        position: "topRight"
                    });
                }else{

                    console.log(message);
                    $.each(message, function(i, val) {
                        iziToast[status]({
                            message: val,
                            position: "topRight"
                        });
                    });
                }
            }
        </script>
<script>
function openNav() {
  document.getElementById("mySidebar_user").style.width = "100%";
  document.getElementById("main").style.marginLeft = "100%";
}

function closeNav() {
  document.getElementById("mySidebar_user").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function openNavMenu() {
  document.getElementById("mySidepanel_user").style.width = "100%";
}

function closeNavMenu() {
  document.getElementById("mySidepanel_user").style.width = "0";
}
</script>
<script type="text/javascript">
	var Tawk_API = Tawk_API || {};

	Tawk_API.customStyle = {
		visibility : {
			desktop : {
				position : 'br',
				xOffset : '60px',
				yOffset : 20
			},
			mobile : {
				position : 'br',
				xOffset : 20,
				yOffset : 90
			},
			bubble : {
				rotate : '0deg',
			 	xOffset : -20,
			 	yOffset : 0
			}
		}
	};
</script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <script>
$(function() {
  $('input[name="date_from"]').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(48, 'hours'), // Default to a 2-day range
    minDate: moment().startOf('day'), // Minimum date selectable is today
    locale: {
      format: 'Y-MM-DD HH:mm'
    }
  });

  $('input[name="date_from"]').on('apply.daterangepicker', function(ev, picker) {
    var startDate = picker.startDate;
    var endDate = picker.endDate;
    
    if (endDate.diff(startDate, 'days') < 2) {
      Swal.fire('Error','Please select a range of at least 2 days.','warning');
      picker.setStartDate(startDate);
      picker.setEndDate(startDate.clone().add(2, 'days'));
    }
  });
});


</script>
</body>
</html>
