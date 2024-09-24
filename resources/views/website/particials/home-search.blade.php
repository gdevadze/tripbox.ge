<section class="pt-3 pt-lg-5">
            <div class="container">

                <div class="row g-4 g-lg-5">

                    <div class="col-lg-12 position-relative mb-4 mb-md-0">

                    @if (currentLocale() == 'ru')


                        <h1 class="mb-4  display-5 hero-text mobile_hides">
                        Экскурсии, аренда <br />авто   по Батуми <br /> ваш идеальный гид


                     

                        </h1>

                    @endif


                    @if (currentLocale() == 'en')


                    <h1 class="mb-4  display-5 hero-text mobile_hides">
                 
                    Excursions, car  <br /> rental in Batumi <br /> your perfect guide
                    </h1>

                    @endif

                    @if (currentLocale() == 'ka')


                        <h1 class="mb-4  display-5 hero-text mobile_hides">Unlock Your Trip <br />
                        Drive, Explore, Enjoy 
                           
                        </h1>

                    @endif


                        <p class="home-search-p">@lang('search_text_upper')</p>

                        <!-- -->


                        <div class="shows-mobile" style="background: #f7faed;padding-top: 10px; padding-left: 20px; padding-right: 20px;">
                        <a href="#destinations">


                        @if (currentLocale() == 'ru')


                        <h1 class="mb-4  display-5 hero-text ">
                        Экскурсии, аренда <br />авто   по Батуми <br /> ваш идеальный гид


                     

                        </h1>

                    @endif


                    @if (currentLocale() == 'en')


                    <h1 class="mb-4  display-5 hero-text ">
                 
                    Excursions, car  <br /> rental in Batumi <br /> your perfect guide
                    </h1>

                    @endif

                    @if (currentLocale() == 'ka')


                        <h1 class="mb-4  display-5 hero-text ">Unlock Your Trip <br />
                        Drive, Explore, Enjoy 
                           
                        </h1>

                    @endif


                        <p class="home-search-p" style="display: block!important;">@lang('search_text_upper')</p>


                        <div class="home-banner ">
                   
                      

                      
                                      <img src="/assets/search_text.png" style="height: 80px; margin-left: 15px; margin-right: -34px;">
                        <img src="/assets/car_home.png" style="height: 80px;     margin-left: 17px;">

                       
                                        </div>
                                        </a>
                        </div>



                        <!-- <img src="{{asset('/assets/images/mobile/home_search.png')}}" class="mobile_image_search"> -->

                        <div class="row search-bar">
                    <div class="col-xl-9 position-relative mt-n3 mt-xl-n9">




                        <form class=" position-relative p-4 pe-md-5 pb-5 pb-md-4 pd-mob-right" action="{{ route('search') }}#search-block" style="padding-left: 14px !important;">
                            <div class="row g-4 align-items-center">

                            <div class="col-lg-7" style="margin-top: 50px;">
                                <div class="row">

                          
                                <div class="col-lg-6" style="padding-left: 0px;padding-right: 8px;">
                                    <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                      

                                        <div class="flex-grow-1" id="delivery_addr_blck" >



                                            <svg style=" position: absolute;     margin-top: 33px; margin-left: 15px;" width="14" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.7578 8.74107C16.7656 7.40183 16.4908 6.07875 15.9548 4.87524C15.4189 3.67172 14.6363 2.62038 13.6683 1.80337C12.7003 0.986369 11.5731 0.425834 10.3747 0.165576C9.17631 -0.0946813 7.93928 -0.0476071 6.76025 0.303112C5.58122 0.653832 4.49214 1.2987 3.57813 2.18732C2.66411 3.07593 1.94993 4.18423 1.49139 5.42558C1.03285 6.66693 0.842367 8.00772 0.934842 9.34315C1.02732 10.6786 1.40024 11.9725 2.02446 13.1237L2.04757 13.1563C2.35129 13.7136 2.73093 14.1153 3.11387 14.7052L7.70917 21.3751C7.84202 21.5691 8.01424 21.7266 8.2122 21.8351C8.41016 21.9435 8.62844 22 8.84975 22C9.07105 22 9.28932 21.9435 9.48728 21.8351C9.68524 21.7266 9.85746 21.5691 9.99031 21.3751L14.5064 14.8138C14.9174 14.2816 15.301 13.7246 15.6552 13.1454L15.6717 13.1237C16.3843 11.7954 16.7593 10.2821 16.7578 8.74107ZM8.83489 12.5157C8.14606 12.5157 7.47269 12.2918 6.89995 11.8723C6.32721 11.4527 5.88082 10.8564 5.61721 10.1588C5.35361 9.4611 5.28463 8.69341 5.41902 7.95278C5.5534 7.21214 5.8851 6.53183 6.37218 5.99786C6.85925 5.46389 7.47983 5.10025 8.15543 4.95293C8.83102 4.80561 9.5313 4.88122 10.1677 5.1702C10.8041 5.45918 11.348 5.94856 11.7307 6.57644C12.1134 7.20431 12.3177 7.9425 12.3177 8.69765C12.3185 9.70868 11.9533 10.6787 11.3021 11.3947C10.6509 12.1106 9.76703 12.5138 8.84479 12.5157H8.83489Z" fill="#1E234C"/>
                                            </svg>




                                            <label class="form-label">@lang('arrival')</label>
                                            <input data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="@lang('enters_cities')" class="form-control delivery_adress" style="cursor:pointer;" name="location_from" value="{{ \request()->location_from ?? 'Tbilisi' }}" id="delivery_address" required placeholder="@lang('enter_adress')" >
                                            {{---<ul id="popularPlacesList1" style="list-style-type: none; padding-left: 0;display:none"></ul>---}}
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                

                                <div class="col-lg-6 location_to_paddings"   >
                                    <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                     

                                        <div class="flex-grow-1">
                                        <svg style=" position: absolute;     margin-top: 33px; margin-left: 15px;" width="14" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.7578 8.74107C16.7656 7.40183 16.4908 6.07875 15.9548 4.87524C15.4189 3.67172 14.6363 2.62038 13.6683 1.80337C12.7003 0.986369 11.5731 0.425834 10.3747 0.165576C9.17631 -0.0946813 7.93928 -0.0476071 6.76025 0.303112C5.58122 0.653832 4.49214 1.2987 3.57813 2.18732C2.66411 3.07593 1.94993 4.18423 1.49139 5.42558C1.03285 6.66693 0.842367 8.00772 0.934842 9.34315C1.02732 10.6786 1.40024 11.9725 2.02446 13.1237L2.04757 13.1563C2.35129 13.7136 2.73093 14.1153 3.11387 14.7052L7.70917 21.3751C7.84202 21.5691 8.01424 21.7266 8.2122 21.8351C8.41016 21.9435 8.62844 22 8.84975 22C9.07105 22 9.28932 21.9435 9.48728 21.8351C9.68524 21.7266 9.85746 21.5691 9.99031 21.3751L14.5064 14.8138C14.9174 14.2816 15.301 13.7246 15.6552 13.1454L15.6717 13.1237C16.3843 11.7954 16.7593 10.2821 16.7578 8.74107ZM8.83489 12.5157C8.14606 12.5157 7.47269 12.2918 6.89995 11.8723C6.32721 11.4527 5.88082 10.8564 5.61721 10.1588C5.35361 9.4611 5.28463 8.69341 5.41902 7.95278C5.5534 7.21214 5.8851 6.53183 6.37218 5.99786C6.85925 5.46389 7.47983 5.10025 8.15543 4.95293C8.83102 4.80561 9.5313 4.88122 10.1677 5.1702C10.8041 5.45918 11.348 5.94856 11.7307 6.57644C12.1134 7.20431 12.3177 7.9425 12.3177 8.69765C12.3185 9.70868 11.9533 10.6787 11.3021 11.3947C10.6509 12.1106 9.76703 12.5138 8.84479 12.5157H8.83489Z" fill="#1E234C"/>
</svg>
                                            <label class="form-label">@lang('return')</label>
                                            <input data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="@lang('enters_cities')" style="cursor:pointer;" class="form-control location_to" name="location_to" value="{{ \request()->location_to ?? 'Tbilisi' }}" required id="leave_address"  placeholder="@lang('enter_adress')">
                                            {{----<ul id="popularPlacesList" style="list-style-type: none; padding-left: 0;display:none"></ul>---}}
                                        </div>
                                    </div>
                                </div>
                                

                                </div>
                                
                            </div>
                            


                            <button  type="submit" class="search-form-submit">
                                  <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="33" cy="33" r="32.5" stroke="black"/>
<path d="M48.7071 34.7071C49.0976 34.3166 49.0976 33.6834 48.7071 33.2929L42.3431 26.9289C41.9526 26.5384 41.3195 26.5384 40.9289 26.9289C40.5384 27.3195 40.5384 27.9526 40.9289 28.3431L46.5858 34L40.9289 39.6569C40.5384 40.0474 40.5384 40.6805 40.9289 41.0711C41.3195 41.4616 41.9526 41.4616 42.3431 41.0711L48.7071 34.7071ZM13 35H48V33H13V35Z" fill="black"/>
</svg>
</button>


                            <div class="col-lg-7">
                                <div class="row">
                                <div class="col-lg-12" style="padding-left: 0px;">
                                <div class="row">

                                <div class="col-md-12 mob-pad-3">
                                <svg style="    position: absolute;margin-top: 13px;margin-left: 12px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>
                                <input data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="@lang('choose_datess')" style="cursor:pointer;" type="text" id="date_booking" required name="date_from" placeholder="@lang('choose_dates')" value="" />

                                </div>


                          


                            

                                </div>

                                {{-- 
                                    <div class="col-md-6" style="    padding-right: 0px;">
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                     
<svg style="    position: absolute;margin-top: 13px;margin-left: 12px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>

                                <input type="datetime-local" class="form-control " style="    width: 99%; border: 1px solid #CBC2C2;border-radius: 8px;     padding-left: 40px; border: 1px solid #CBC2C2; border-radius: 8px; padding-left: 40px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-top-left-radius: 16px; border-bottom-left-radius: 16px;" name="date_from" placeholder="დან">
                            
                            </div>

                                <div class="col-md-6" style="    padding-right: 0px;">
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                     
<svg style="    position: absolute;margin-top: 13px;margin-left: 12px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>

                                <input type="datetime-local" class="form-control " style="    width: 99%; border: 1px solid #CBC2C2;border-radius: 8px;     padding-left: 40px; border: 1px solid #CBC2C2; border-radius: 8px; padding-left: 40px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-top-left-radius: 16px; border-bottom-left-radius: 16px;" name="date_from" placeholder="დან">
                            
                            </div>


                          


                            

                                </div>


                                <div class="col-md-6"  style="padding-left:0px;">
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                <svg style="    position: absolute;margin-top: 13px;margin-left: 12px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>
                                <input type="datetime-local" class="form-control " style="  border: 1px solid #CBC2C2; border-radius: 8px; padding-left: 40px; border-top-right-radius: 16px; border-bottom-right-radius: 16px; border-top-left-radius: 0px; border-bottom-left-radius: 0px; margin-left: -2px; width: 97%;" name="date_to" placeholder="მდე">
                            </div>

                                </div>
                                    --}}



                                </div>
                                   
                                </div>

                            

                        
                                </div>


                                </div>



                            </div>

                            <button  type="submit" class="search-form-submit shows-mobile" style="    background: #6ECEAD;
    padding-top: 15px;
    padding-bottom: 17px;
    color: #fff;
    border-radius: 10px;
    margin-top: -20px;
    margin-bottom: 40px;
    margin-left: 17px;
    width: 93%;
">
Search                                    
                                  <!-- <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="33" cy="33" r="32.5" stroke="black"/>
<path d="M48.7071 34.7071C49.0976 34.3166 49.0976 33.6834 48.7071 33.2929L42.3431 26.9289C41.9526 26.5384 41.3195 26.5384 40.9289 26.9289C40.5384 27.3195 40.5384 27.9526 40.9289 28.3431L46.5858 34L40.9289 39.6569C40.5384 40.0474 40.5384 40.6805 40.9289 41.0711C41.3195 41.4616 41.9526 41.4616 42.3431 41.0711L48.7071 34.7071ZM13 35H48V33H13V35Z" fill="black"/>
</svg> -->
</button>

                        </form>

                    </div>

               
                </div>

                        <!-- ..... --->





                        <!-- <div class="hstack gap-4 flex-wrap align-items-center">

                            <p class="hero-p">Хотите  арендовать автомобиль <br />прямо сейчас?</p>
                            <a href="javascript:0;" data-bs-toggle="modal" data-bs-target="#trips" class="search-me" style="z-index:1000;">Рядом со мной <img src="assets/images/svg/hero-location.svg"></a>

                        </div> -->
                    </div>
                    <img src="{{asset('/assets/images/last/map.png')}}" class="hero-map" alt="">
                    
                    <!-- <img src="assets/images/hero-car.png" class="hero-car" alt=""> -->
                    <div class="col-lg-2 position-relative">




                    </div>
                </div>

               

               



            </div>


             <!-- -->


           

             {{--
             <div class="down-menu">
                <div class="container">

               

<ul>
	
    <li><a  href="javascript:0;" data-bs-toggle="modal" data-bs-target="#trips">
    
    <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.0714 0.741902C26.8163 0.775752 25.515 0.903714 24.1862 1.05803C22.8577 1.19881 21.1134 1.38272 20.2952 1.4558C18.0691 1.64048 13.2829 1.48658 9.43981 1.08693C6.62455 0.782197 5.94297 0.7506 5.17685 0.879209C2.50305 1.2957 0.776065 3.34821 0.700072 6.21609C0.686808 6.71662 0.847948 8.20998 1.06688 9.54243C1.71028 13.5394 1.76029 14.177 1.66996 17.586C1.59576 20.3862 1.52364 21.0883 1.11289 23.4599C0.797072 25.2791 0.638733 26.7098 0.595251 27.8458C0.553311 29.4286 0.575752 29.5916 0.904409 30.3178C1.3343 31.2633 2.06482 31.973 3.07029 32.4058C4.1813 32.8955 6.5762 32.9048 10.1741 32.4586C11.6911 32.2687 13.7304 32.0655 14.7224 31.9971C17.0009 31.8544 22.4937 32.1082 25.3201 32.4945C26.9338 32.6997 27.5883 32.7441 28.1795 32.6515C29.8996 32.3721 31.3446 31.3681 32.2007 29.861C32.8607 28.6873 32.9511 27.2953 32.5407 24.6041C31.6175 18.542 31.639 15.7133 32.6705 9.60825C33.1299 6.91297 33.2347 4.97993 32.9656 4.02519C32.562 2.59308 31.6399 1.53982 30.3814 1.05974C29.7985 0.841235 27.9167 0.656001 27.0714 0.741902ZM19.2756 9.13147C20.9052 9.74322 22.4194 11.1777 23.1392 12.7941C24.3881 15.6565 23.6779 18.7242 21.043 21.7138C20.2019 22.6526 17.7673 24.6458 16.8722 25.0959L16.4111 25.3273L15.454 24.5845C13.3699 22.9454 11.6316 20.8823 10.7458 18.9636C9.37943 15.9898 9.79294 13.0091 11.8983 10.8177C13.0678 9.60323 14.2212 8.99754 15.8199 8.75562C16.7469 8.61774 18.3345 8.79518 19.2756 9.13147Z" fill="#4A8EA4" fill-opacity="0.8"/>
<path d="M15.7718 12.8331C14.1466 13.3347 13.2069 14.8856 13.6783 16.3593C14.3438 18.454 17.6977 19.1048 19.3151 17.4482C21.4577 15.2353 18.8947 11.9022 15.7718 12.8331Z" fill="#4A8EA4" fill-opacity="0.8"/>
</svg>


    ახლო ავტომობილები</a></li> 

    <li><a href="/discover-georgia">
    
    <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.0714 0.741902C26.8163 0.775752 25.515 0.903714 24.1862 1.05803C22.8577 1.19881 21.1134 1.38272 20.2952 1.4558C18.0691 1.64048 13.2829 1.48658 9.43981 1.08693C6.62455 0.782197 5.94297 0.7506 5.17685 0.879209C2.50305 1.2957 0.776065 3.34821 0.700072 6.21609C0.686808 6.71662 0.847948 8.20998 1.06688 9.54243C1.71028 13.5394 1.76029 14.177 1.66996 17.586C1.59576 20.3862 1.52364 21.0883 1.11289 23.4599C0.797072 25.2791 0.638733 26.7098 0.595251 27.8458C0.553311 29.4286 0.575752 29.5916 0.904409 30.3178C1.3343 31.2633 2.06482 31.973 3.07029 32.4058C4.1813 32.8955 6.5762 32.9048 10.1741 32.4586C11.6911 32.2687 13.7304 32.0655 14.7224 31.9971C17.0009 31.8544 22.4937 32.1082 25.3201 32.4945C26.9338 32.6997 27.5883 32.7441 28.1795 32.6515C29.8996 32.3721 31.3446 31.3681 32.2007 29.861C32.8607 28.6873 32.9511 27.2953 32.5407 24.6041C31.6175 18.542 31.639 15.7133 32.6705 9.60825C33.1299 6.91297 33.2347 4.97993 32.9656 4.02519C32.562 2.59308 31.6399 1.53982 30.3814 1.05974C29.7985 0.841235 27.9167 0.656001 27.0714 0.741902ZM19.2756 9.13147C20.9052 9.74322 22.4194 11.1777 23.1392 12.7941C24.3881 15.6565 23.6779 18.7242 21.043 21.7138C20.2019 22.6526 17.7673 24.6458 16.8722 25.0959L16.4111 25.3273L15.454 24.5845C13.3699 22.9454 11.6316 20.8823 10.7458 18.9636C9.37943 15.9898 9.79294 13.0091 11.8983 10.8177C13.0678 9.60323 14.2212 8.99754 15.8199 8.75562C16.7469 8.61774 18.3345 8.79518 19.2756 9.13147Z" fill="#EEBD3D" fill-opacity="0.8"/>
<path d="M15.7718 12.8331C14.1466 13.3347 13.2069 14.8856 13.6783 16.3593C14.3438 18.454 17.6977 19.1048 19.3151 17.4482C21.4577 15.2353 18.8947 11.9022 15.7718 12.8331Z" fill="#F1CA64"/>
</svg>


    @lang('discover_georgia')</a></li>

 

</ul>




</div>

</div>
<!-- ... -->
--}}

        </section>

    

      