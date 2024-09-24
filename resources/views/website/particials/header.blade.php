<header class="navbar-light header-sticky">

    <nav class="navbar navbar-expand-xl">
        <div class="container">

            <a class="navbar-brand" href="{{ route('index') }}">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('/assets/images/logo.png') }}" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{ asset('/assets/images/logo.png') }}" alt="logo">
            </a>


       


         
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll me-auto">


                <li class="nav-item ">

                <a class="nav-link" href="/" >@lang('cars_rent')</a>

                </li>


                    <li class="nav-item ">

                        <a class="nav-link" href="/discover-georgia" >@lang('trips')</a>

                    </li>
                    
                    <li class="nav-item ">

                        <a class="nav-link" href="/faq" >FAQ</a>

                    </li>
                    <li class="nav-item ">

                        <a class="nav-link" href="/become-partner" >@lang('get_partner')</a>

                    </li>
                    <li class="nav-item ">

                        <a class="nav-link" href="/contact" >@lang('contact')</a>

                    </li>



                </ul>
            </div>



            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
            <li class="nav-item dropdown ms-0 ms-md-3 d-hide-mobile">
            {{--- 
					<a class="home-menu-buttons" href="/tripclub"  style="background: #31344B; color: #fff; padding: 6px 15px; border-radius: 8px; font-size: 13px;">
						Trip Club
					</a>
---}}
				</li>
                <li class="nav-item dropdown ms-0 ms-md-3">

<a class="home-menu-buttons-last" href="{{ route('user.favorites') }}" >
<svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 16C8.74371 16 8.4967 15.9072 8.30415 15.7387C7.57698 15.1035 6.87593 14.5065 6.25739 13.9799L6.25423 13.9772C4.4408 12.4332 2.87483 11.0998 1.78527 9.78628C0.567316 8.31795 0 6.92567 0 5.40472C0 3.92701 0.507164 2.5637 1.42794 1.5658C2.35972 0.556099 3.63825 0 5.02843 0C6.06748 0 7.01902 0.328208 7.85661 0.975421C8.2793 1.30208 8.66243 1.70191 9 2.16827C9.33768 1.70191 9.7207 1.30208 10.1435 0.975421C10.9811 0.328208 11.9327 0 12.9717 0C14.3617 0 15.6404 0.556099 16.5722 1.5658C17.493 2.5637 18 3.92701 18 5.40472C18 6.92563 17.4328 8.31792 16.2149 9.78614C15.1253 11.0998 13.5594 12.433 11.7463 13.9769C11.1267 14.5043 10.4245 15.1022 9.69571 15.739C9.5031 15.9073 9.25589 16.0001 9 16ZM5.02843 1.05347C3.93627 1.05347 2.93295 1.48898 2.20303 2.27982C1.46229 3.08264 1.05427 4.19238 1.05427 5.40472C1.05427 6.6839 1.53011 7.82792 2.59703 9.11413C3.62823 10.3573 5.16206 11.6633 6.93802 13.1755L6.94129 13.1782C7.56214 13.7068 8.26597 14.3062 8.99849 14.9461C9.7354 14.3049 10.4403 13.7047 11.0624 13.1752C12.8382 11.663 14.3719 10.3573 15.4031 9.11413C16.4699 7.82792 16.9457 6.6839 16.9457 5.40472C16.9457 4.19234 16.5377 3.08261 15.797 2.27982C15.0672 1.48898 14.0638 1.05347 12.9717 1.05347C12.1716 1.05347 11.437 1.3076 10.7884 1.80866C10.2104 2.25541 9.80779 2.82015 9.57168 3.21531C9.45032 3.41851 9.23664 3.53979 9 3.53979C8.76336 3.53979 8.54968 3.41851 8.42829 3.21531C8.19239 2.82015 7.78971 2.25541 7.21153 1.80866C6.56297 1.3076 5.82838 1.05347 5.02843 1.05347Z" fill="#61657E"/>
</svg>
</a>

</li>

              



                {{--
                <li class="nav-item dropdown ms-0 ms-md-3">

                    <a class="home-menu-buttons"  href="javascript:0;" data-bs-toggle="modal" data-bs-target="#cars">
                        <img src="{{ asset('assets/images/svg/car.svg') }}">
                    </a>

                </li>
                


               

                <li class="nav-item dropdown ms-0 ms-md-3">

                    <a class="home-menu-buttons-last" href="{{ route('cart') }}" >
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L3.5 1L4 3M4 3L6 11M4 3H19L17 11H6M6 11H5.5C4.67157 11 4 11.6716 4 12.5C4 13.3284 4.67157 14 5.5 14H17M17 18C17 18.5523 16.5523 19 16 19C15.4477 19 15 18.5523 15 18C15 17.4477 15.4477 17 16 17C16.5523 17 17 17.4477 17 18ZM7 18C7 18.5523 6.55228 19 6 19C5.44772 19 5 18.5523 5 18C5 17.4477 5.44772 17 6 17C6.55228 17 7 17.4477 7 18Z" stroke="#61657E" stroke-linecap="round"/>
</svg>


                    </a>

                </li>
                --}}

                <li class="nav-item ms-0 ms-md-3" style="margin-left: 0.5rem !important;">
                <div class="btn-group">
  <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="    display: flex;color: #61657E;border:0;    background: #fff;">
  <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: 5px; margin-right: 10px;">
<path d="M10.5 19.75C15.3325 19.75 19.25 15.8325 19.25 11C19.25 6.16751 15.3325 2.25 10.5 2.25C5.66751 2.25 1.75 6.16751 1.75 11C1.75 15.8325 5.66751 19.75 10.5 19.75Z" stroke="#61657E" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.99941 3.125H7.87441C6.16816 8.235 6.16816 13.765 7.87441 18.875H6.99941" stroke="#61657E" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.125 3.125C14.8313 8.235 14.8313 13.765 13.125 18.875" stroke="#61657E" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.625 14.5V13.625C7.735 15.3313 13.265 15.3313 18.375 13.625V14.5" stroke="#61657E" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.625 8.37539C7.735 6.66914 13.265 6.66914 18.375 8.37539" stroke="#61657E" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

<span style="margin-top: 4px;">
<!-- KA -->
</span>

    
  </button>
  <ul class="dropdown-menu">
  @foreach($languages as $language)
    <li><a href="{{LaravelLocalization::getLocalizedURL($language->code, null, [], true)}}" style="    color: #555;">{{ strtoupper($language->code) }}</a></li>
    @endforeach
  </ul>
</div>
                </li>


{{--                <li class="nav-item dropdown ms-0 ms-md-3">--}}

{{--                    <a class="home-menu-buttons-last" href="javascript:0;" data-bs-toggle="modal" data-bs-target="#trips" >--}}
{{--                        <img src="{{ asset('assets/images/svg/trip.svg') }}">--}}
{{--                    </a>--}}

{{--                </li>--}}

@auth
<li class="nav-item dropdown ms-0 ms-md-3" style="margin-left: 0.5rem !important;">

<a class="home-menu-buttons-last" href="/user/orders" >
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99997 10C10.8653 10 11.7111 9.74341 12.4306 9.26268C13.1501 8.78195 13.7108 8.09867 14.0419 7.29924C14.3731 6.49982 14.4597 5.62015 14.2909 4.77148C14.1221 3.92281 13.7054 3.14326 13.0936 2.53141C12.4817 1.91956 11.7022 1.50288 10.8535 1.33407C10.0048 1.16526 9.12516 1.2519 8.32573 1.58303C7.5263 1.91416 6.84302 2.47492 6.36229 3.19438C5.88156 3.91385 5.62497 4.75971 5.62497 5.625C5.62629 6.78492 6.08766 7.89695 6.90784 8.71713C7.72803 9.53732 8.84006 9.99868 9.99997 10ZM9.99997 2.5C10.618 2.5 11.2222 2.68328 11.7361 3.02666C12.25 3.37004 12.6506 3.8581 12.8871 4.42912C13.1236 5.00013 13.1855 5.62847 13.0649 6.23466C12.9443 6.84085 12.6467 7.39767 12.2097 7.83471C11.7726 8.27175 11.2158 8.56938 10.6096 8.68996C10.0034 8.81053 9.3751 8.74865 8.80409 8.51213C8.23307 8.2756 7.74501 7.87506 7.40163 7.36116C7.05825 6.84726 6.87497 6.24307 6.87497 5.625C6.87596 4.7965 7.20552 4.00223 7.79136 3.41639C8.37719 2.83055 9.17147 2.50099 9.99997 2.5ZM17.7643 16.3313C17.227 14.6992 16.1858 13.2797 14.7907 12.2768C13.3955 11.2739 11.7182 10.7393 9.99997 10.75C8.28177 10.7393 6.60446 11.2739 5.20928 12.2768C3.8141 13.2797 2.77296 14.6992 2.2356 16.3313C2.1457 16.6052 2.12279 16.8966 2.16879 17.1812C2.21479 17.4658 2.32836 17.7352 2.49997 17.9669C2.67557 18.2087 2.90577 18.4057 3.17184 18.5418C3.43792 18.6778 3.73237 18.7492 4.03122 18.75H15.9687C16.2676 18.7492 16.562 18.6778 16.8281 18.5418C17.0942 18.4057 17.3244 18.2087 17.5 17.9669C17.6716 17.7352 17.7851 17.4658 17.8311 17.1812C17.8771 16.8966 17.8542 16.6052 17.7643 16.3313ZM16.4893 17.2325C16.4298 17.315 16.3516 17.3822 16.2611 17.4286C16.1706 17.4751 16.0704 17.4996 15.9687 17.5H4.03122C3.9295 17.4996 3.82933 17.4751 3.73885 17.4286C3.64838 17.3822 3.57017 17.315 3.5106 17.2325C3.45576 17.1602 3.41921 17.0758 3.40409 16.9863C3.38896 16.8968 3.3957 16.805 3.42372 16.7188C3.88872 15.3433 4.77329 14.1482 5.95296 13.3018C7.13264 12.4553 8.54803 12.0001 9.99997 12.0001C11.4519 12.0001 12.8673 12.4553 14.047 13.3018C15.2267 14.1482 16.1112 15.3433 16.5762 16.7188C16.6042 16.805 16.611 16.8968 16.5959 16.9863C16.5807 17.0758 16.5442 17.1602 16.4893 17.2325Z" fill="#74788E"/>
</svg>

</a>

</li>

                @else
                <li class="nav-item dropdown ms-0 ms-md-3" style="margin-left: 0.5rem !important;">

<a class="home-menu-buttons-last" href="javascript:0;" data-bs-toggle="modal" data-bs-target="#exampleModal">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99997 10C10.8653 10 11.7111 9.74341 12.4306 9.26268C13.1501 8.78195 13.7108 8.09867 14.0419 7.29924C14.3731 6.49982 14.4597 5.62015 14.2909 4.77148C14.1221 3.92281 13.7054 3.14326 13.0936 2.53141C12.4817 1.91956 11.7022 1.50288 10.8535 1.33407C10.0048 1.16526 9.12516 1.2519 8.32573 1.58303C7.5263 1.91416 6.84302 2.47492 6.36229 3.19438C5.88156 3.91385 5.62497 4.75971 5.62497 5.625C5.62629 6.78492 6.08766 7.89695 6.90784 8.71713C7.72803 9.53732 8.84006 9.99868 9.99997 10ZM9.99997 2.5C10.618 2.5 11.2222 2.68328 11.7361 3.02666C12.25 3.37004 12.6506 3.8581 12.8871 4.42912C13.1236 5.00013 13.1855 5.62847 13.0649 6.23466C12.9443 6.84085 12.6467 7.39767 12.2097 7.83471C11.7726 8.27175 11.2158 8.56938 10.6096 8.68996C10.0034 8.81053 9.3751 8.74865 8.80409 8.51213C8.23307 8.2756 7.74501 7.87506 7.40163 7.36116C7.05825 6.84726 6.87497 6.24307 6.87497 5.625C6.87596 4.7965 7.20552 4.00223 7.79136 3.41639C8.37719 2.83055 9.17147 2.50099 9.99997 2.5ZM17.7643 16.3313C17.227 14.6992 16.1858 13.2797 14.7907 12.2768C13.3955 11.2739 11.7182 10.7393 9.99997 10.75C8.28177 10.7393 6.60446 11.2739 5.20928 12.2768C3.8141 13.2797 2.77296 14.6992 2.2356 16.3313C2.1457 16.6052 2.12279 16.8966 2.16879 17.1812C2.21479 17.4658 2.32836 17.7352 2.49997 17.9669C2.67557 18.2087 2.90577 18.4057 3.17184 18.5418C3.43792 18.6778 3.73237 18.7492 4.03122 18.75H15.9687C16.2676 18.7492 16.562 18.6778 16.8281 18.5418C17.0942 18.4057 17.3244 18.2087 17.5 17.9669C17.6716 17.7352 17.7851 17.4658 17.8311 17.1812C17.8771 16.8966 17.8542 16.6052 17.7643 16.3313ZM16.4893 17.2325C16.4298 17.315 16.3516 17.3822 16.2611 17.4286C16.1706 17.4751 16.0704 17.4996 15.9687 17.5H4.03122C3.9295 17.4996 3.82933 17.4751 3.73885 17.4286C3.64838 17.3822 3.57017 17.315 3.5106 17.2325C3.45576 17.1602 3.41921 17.0758 3.40409 16.9863C3.38896 16.8968 3.3957 16.805 3.42372 16.7188C3.88872 15.3433 4.77329 14.1482 5.95296 13.3018C7.13264 12.4553 8.54803 12.0001 9.99997 12.0001C11.4519 12.0001 12.8673 12.4553 14.047 13.3018C15.2267 14.1482 16.1112 15.3433 16.5762 16.7188C16.6042 16.805 16.611 16.8968 16.5959 16.9863C16.5807 17.0758 16.5442 17.1602 16.4893 17.2325Z" fill="#74788E"/>
</svg>

</a>

</li>
                @endauth

            </ul>

            <button class="navbar-toggler  ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
                <span class="d-none d-sm-inline-block small">Menu</span>
            </button>
        </div>
    </nav>

    <div class="sub-header-footer">

    <div class="container">

    <ul>
        <li><a href="/about">@lang('about_us')</a></li>
        <li><a href="/privicy">@lang('confidencialoba')</a></li>
        <li><a href="/rules">@lang('privicy_rules')</a></li>
    </ul>


    </div>


    </div>

    <div class="scrollmenu ">
    <a href="/about">@lang('about_us')</a>
    <a href="/privicy">@lang('confidencialoba')</a>
    <a href="/rules">@lang('privicy_rules')</a>
   
  </div>

</header>