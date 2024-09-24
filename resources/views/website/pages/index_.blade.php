@extends('website.layouts.app')

@section('content')

<style>
nav {
    box-shadow: 4px 4px 15px 0px #e1777700!important;
    background:#fff0 !important;
    margin-left: 100px!important;
    margin-right: 100px!important;
    border-radius: 20px!important;
    margin-top: 0px!important;
}
.hero-map {
    top: 1.5%;
}
</style>
    <main>


        <section class="pt-3 pt-lg-5">
            <div class="container">

                <div class="row g-4 g-lg-5">

                    <div class="col-lg-12 position-relative mb-4 mb-md-0">

                        <h1 class="mb-4 mt-md-5 display-5 hero-text">Car <span>rental</span> <br />
                        and <span>trip</span> planning <br />
                        platform
                           
                        </h1>

                        <!-- -->

                        <div class="row search-bar">
                    <div class="col-xl-8 position-relative mt-n3 mt-xl-n9">




                        <form class=" position-relative p-4 pe-md-5 pb-5 pb-md-4" action="{{ route('search') }}">
                            <div class="row g-4 align-items-center">

                            <div class="col-lg-7">
                                <div class="row">

                          
                                <div class="col-lg-6" style="padding-left: 0px;">
                                    <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                      

                                        <div class="flex-grow-1">

<svg style="    position: absolute;
    margin-top: 40px;
    margin-left: -25px;" width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.9998 8.74107C17.0082 7.40183 16.7134 6.07875 16.1384 4.87524C15.5634 3.67172 14.7238 2.62038 13.6853 1.80337C12.6468 0.986369 11.4374 0.425834 10.1518 0.165576C8.86613 -0.0946813 7.53899 -0.0476071 6.27409 0.303112C5.00918 0.653832 3.84078 1.2987 2.8602 2.18732C1.87961 3.07593 1.11341 4.18423 0.621471 5.42558C0.129532 6.66693 -0.0748226 8.00772 0.024388 9.34315C0.123599 10.6786 0.523683 11.9725 1.19337 13.1237L1.21817 13.1563C1.544 13.7136 1.95129 14.1153 2.36213 14.7052L7.29212 21.3751C7.43465 21.5691 7.61941 21.7266 7.83179 21.8351C8.04417 21.9435 8.27835 22 8.51577 22C8.7532 22 8.98736 21.9435 9.19974 21.8351C9.41212 21.7266 9.59688 21.5691 9.73941 21.3751L14.5844 14.8138C15.0254 14.2816 15.4369 13.7246 15.8169 13.1454L15.8346 13.1237C16.5991 11.7954 17.0014 10.2821 16.9998 8.74107ZM8.49983 12.5157C7.76083 12.5157 7.03842 12.2918 6.42396 11.8723C5.80951 11.4527 5.3306 10.8564 5.0478 10.1588C4.76499 9.4611 4.69099 8.69341 4.83517 7.95278C4.97934 7.21214 5.3352 6.53183 5.85775 5.99786C6.3803 5.46389 7.04608 5.10025 7.77089 4.95293C8.49569 4.80561 9.24697 4.88122 9.92972 5.1702C10.6125 5.45918 11.196 5.94856 11.6066 6.57644C12.0171 7.20431 12.2363 7.9425 12.2363 8.69765C12.2372 9.70868 11.8453 10.6787 11.1467 11.3947C10.4481 12.1106 9.49987 12.5138 8.51046 12.5157H8.49983Z" fill="#898B9E"/>
</svg>

                                            <label class="form-label">გასვლა</label>
                                            <select class="form-select js-choice" data-search-enabled="true" name="location_from" required>
                                                <option value="">აირჩიეთ</option>
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->city_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6"  >
                                    <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                     

                                        <div class="flex-grow-1">
                                        <svg style="    position: absolute;
    margin-top: 40px;
    margin-left: -25px;" width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.9998 8.74107C17.0082 7.40183 16.7134 6.07875 16.1384 4.87524C15.5634 3.67172 14.7238 2.62038 13.6853 1.80337C12.6468 0.986369 11.4374 0.425834 10.1518 0.165576C8.86613 -0.0946813 7.53899 -0.0476071 6.27409 0.303112C5.00918 0.653832 3.84078 1.2987 2.8602 2.18732C1.87961 3.07593 1.11341 4.18423 0.621471 5.42558C0.129532 6.66693 -0.0748226 8.00772 0.024388 9.34315C0.123599 10.6786 0.523683 11.9725 1.19337 13.1237L1.21817 13.1563C1.544 13.7136 1.95129 14.1153 2.36213 14.7052L7.29212 21.3751C7.43465 21.5691 7.61941 21.7266 7.83179 21.8351C8.04417 21.9435 8.27835 22 8.51577 22C8.7532 22 8.98736 21.9435 9.19974 21.8351C9.41212 21.7266 9.59688 21.5691 9.73941 21.3751L14.5844 14.8138C15.0254 14.2816 15.4369 13.7246 15.8169 13.1454L15.8346 13.1237C16.5991 11.7954 17.0014 10.2821 16.9998 8.74107ZM8.49983 12.5157C7.76083 12.5157 7.03842 12.2918 6.42396 11.8723C5.80951 11.4527 5.3306 10.8564 5.0478 10.1588C4.76499 9.4611 4.69099 8.69341 4.83517 7.95278C4.97934 7.21214 5.3352 6.53183 5.85775 5.99786C6.3803 5.46389 7.04608 5.10025 7.77089 4.95293C8.49569 4.80561 9.24697 4.88122 9.92972 5.1702C10.6125 5.45918 11.196 5.94856 11.6066 6.57644C12.0171 7.20431 12.2363 7.9425 12.2363 8.69765C12.2372 9.70868 11.8453 10.6787 11.1467 11.3947C10.4481 12.1106 9.49987 12.5138 8.51046 12.5157H8.49983Z" fill="#898B9E"/>
</svg>
                                            <label class="form-label">დაბრუნება</label>
                                            <select class="form-select js-choice" name="location_to" data-search-enabled="true" required>
                                                <option value="">აირჩიეთ</option>
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->city_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>


                            <button  type="submit" style=" position: absolute; right: 30%; border: 2px solid #48713a94; background: #fff0; border-radius: 15px; width: 10%; padding-top: 8px; padding-bottom: 8px; margin-top: 60px;">ძიება</button>


                            <div class="col-lg-7">
                                <div class="row">
                                <div class="col-lg-12" style="padding-left: 0px;">
                                <div class="row">

                                <div class="col-md-6" style="    padding-right: 7px;">
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                     
<svg style="    position: absolute;
margin-top: 13px;
    margin-left: -25px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>

                                <input type="text" class="form-control datepicker" style="   border: 2px solid #48713a94; border-radius: 10px;  " name="date_from" placeholder="დან">
                                </div>

                                </div>


                                <div class="col-md-6" >
                                <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                <svg style="    position: absolute;
margin-top: 13px;
margin-left: -15px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>
                                <input type="text" class="form-control datepicker" style="    border: 2px solid #48713a94; border-radius: 10px;     margin-left: 8px; " name="date_to" placeholder="მდე">
                                </div>

                                </div>




                                </div>
                                   
                                </div>

                            

                        
                                </div>


</div>

                            </div>


                        </form>

                    </div>

               
                </div>

                        <!-- ..... --->





                        <!-- <div class="hstack gap-4 flex-wrap align-items-center">

                            <p class="hero-p">Хотите  арендовать автомобиль <br />прямо сейчас?</p>
                            <a href="javascript:0;" data-bs-toggle="modal" data-bs-target="#trips" class="search-me" style="z-index:1000;">Рядом со мной <img src="assets/images/svg/hero-location.svg"></a>

                        </div> -->
                    </div>
                    <img src="/assets/images/new_map.png" class="hero-map" alt="">
                    
                    <!-- <img src="assets/images/hero-car.png" class="hero-car" alt=""> -->
                    <div class="col-lg-2 position-relative">




                    </div>
                </div>

               

               



            </div>


             <!-- -->

             <div class="down-menu">
                <div class="container">

               

<ul>
    <li><a  href="javascript:0;" data-bs-toggle="modal" data-bs-target="#trips">
    
    <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.0714 0.732747C26.8163 0.766597 25.515 0.894559 24.1862 1.04887C22.8577 1.18966 21.1134 1.37356 20.2952 1.44665C18.0691 1.63133 13.2829 1.47743 9.43981 1.07777C6.62455 0.773041 5.94297 0.741445 5.17685 0.870054C2.50305 1.28654 0.776065 3.33905 0.700072 6.20693C0.686808 6.70746 0.847948 8.20083 1.06688 9.53328C1.71028 13.5303 1.76029 14.1679 1.66996 17.5768C1.59576 20.3771 1.52364 21.0791 1.11289 23.4508C0.797072 25.2699 0.638733 26.7007 0.595251 27.8367C0.553311 29.4194 0.575752 29.5825 0.904409 30.3086C1.3343 31.2541 2.06482 31.9639 3.07029 32.3966C4.1813 32.8863 6.5762 32.8956 10.1741 32.4495C11.6911 32.2595 13.7304 32.0564 14.7224 31.9879C17.0009 31.8452 22.4937 32.0991 25.3201 32.4853C26.9338 32.6905 27.5883 32.7349 28.1795 32.6423C29.8996 32.363 31.3446 31.3589 32.2007 29.8519C32.8607 28.6781 32.9511 27.2862 32.5407 24.5949C31.6175 18.5328 31.639 15.7041 32.6705 9.59909C33.1299 6.90382 33.2347 4.97077 32.9656 4.01603C32.562 2.58393 31.6399 1.53066 30.3814 1.05059C29.7985 0.832079 27.9167 0.646846 27.0714 0.732747ZM19.2756 9.12232C20.9052 9.73406 22.4194 11.1685 23.1392 12.785C24.3881 15.6474 23.6779 18.715 21.043 21.7046C20.2019 22.6435 17.7673 24.6366 16.8722 25.0867L16.4111 25.3182L15.454 24.5753C13.3699 22.9363 11.6316 20.8731 10.7458 18.9545C9.37943 15.9807 9.79294 12.9999 11.8983 10.8085C13.0678 9.59407 14.2212 8.98839 15.8199 8.74647C16.7469 8.60858 18.3345 8.78602 19.2756 9.12232Z" fill="#4AA483" fill-opacity="0.8"/>
<path d="M15.7722 12.8243C14.1471 13.3259 13.2074 14.8769 13.6788 16.3505C14.3443 18.4452 17.6981 19.096 19.3156 17.4394C21.4582 15.2266 18.8951 11.8934 15.7722 12.8243Z" fill="#4AA483" fill-opacity="0.8"/>
</svg>


    ახლო ავტომობილები</a></li>

    <li><a href="">
    


    ადგილები</a></li>

    <li><a href="">
    
   


    საკვები</a></li>


</ul>




</div>

</div>
<!-- ... -->


        </section>



        <section style="    padding-top: 0px">
            <div class="container">
                <div class="row g-4">


                    <div class="col-md-6 col-xxl-6">
                        <div class="bg-body d-flex rounded-3 h-100 p-4 bg-for-banners">

                            <div class="ms-3">
                                <h5>-30%</h5>
                                <p >მიიღეთ ფასდაკლება   რეგისტრაციისას</p>
                                <a href="#" class="search-me" style="background: #48713A; margin-left: 0px;     margin-top: -5px;position: absolute; font-size: 16px;">რეგისტრაცია</a>
                                <!-- <img src="assets/images/svg/googleplay.svg" style="float: left; margin-left: 0px;margin-right: 5px;">
                                <img src="assets/images/svg/appstore.svg" style="float: left; margin-left: 0px;"> -->

                            </div>
                            <img src="{{asset('/assets/images/home/arrow.svg')}}" style="height: 172px;">

                        </div>
                    </div>


                    <div class="col-md-6 col-xxl-6">
                        <div class="bg-body d-flex rounded-3 h-100 p-4 bg-for-banners">

                            <div class="ms-3">
                                <h5 class="sec-banner-size">შექმენით თქვენი <br /> ოცნების ტური 
                                </h5>


                                <a href="#" class="search-me" style="background: #48713A; margin-left: 0px; margin-top: 70px; position: absolute; font-size: 16px;">ტურის შექმნა</a>

                            </div>
                            <img src="assets/images/svg/location-banner-svg.png" style="margin-left: -106px; position: absolute; width: 43%; margin-top: -30px;">

                        </div>
                    </div>



                </div>
            </div>
        </section>

        <section class="pt-0">
            <div class="container">
                <div class="row">

                <aside class="col-xl-4 col-xxl-3">
            @include('website.particials.sidebar')

                </aside>
                    <div class="col-xl-8 col-xxl-9">
                        <div class="vstack gap-4">

                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/svg/search-icon.svg" style="position: absolute; margin-top: 12px;">
                                    <input class="form-control"  placeholder="მარკა, მოდელი" style="padding-left:25px;border: 0; border-bottom: 2px solid #898B9E; border-radius: 0px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="search-home-selects">
                                        <select>
                                            <option>ღირებულება</option>
                                        </select>
                                        <select>
                                            <option>მძროლით</option>
                                        </select>
                                        <select>
                                            <option>პოპულალუყრები</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                @foreach($cars as $car)
                                <div class="col-md-4" style="margin-bottom:70px;">

                                    <div class="card  p-2 pb-0 h-100" style="    background: #F2F2F2;">

                                        <div class="card-body px-3 pb-0" style="    padding-top: 10px;">


                                            <h5 class="card-title" style="     margin-bottom: 0px;   font-size: 17px;"><a href="#">{{ $car->brand->name }} {{ $car->brand_model->name }}</a></h5>
                                            <p style="    font-size: 14px;">ჯიპი</p>

                                            <a href="/wishlist">
                                            <img src="assets/images/svg/favourite.svg" style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">
                                            </a>

                                        </div>

                                        <img src="{{ $car->get_poster }}"  style=" height: 100px; object-fit: contain;"  alt="Card image">
                                        <div class="card-body px-3 pb-0">





                                            <ul class="nav nav-divider text-center mb-2 mb-sm-3 car-parametres">
                                                <li class="nav-item"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.76961 3.33331C9.92393 3.33331 10.0782 3.33331 10.2326 3.33331C10.2753 3.34178 10.3179 3.35039 10.3607 3.35839C11.3758 3.54871 12.0701 4.50785 11.9124 5.52716C11.8023 6.23859 11.3957 6.73493 10.7361 7.02433C10.6744 7.05141 10.6526 7.08403 10.6528 7.15004C10.6546 7.9704 10.654 8.79076 10.6542 9.61097C10.6542 9.71098 10.6566 9.71329 10.7596 9.71329C12.0093 9.71329 13.2588 9.71298 14.5085 9.71375C14.5861 9.71375 14.6624 9.70498 14.7378 9.6899C15.3468 9.56805 15.7597 9.02832 15.7562 8.46536C15.7534 8.03471 15.7537 7.60407 15.7582 7.17342C15.7591 7.08819 15.7307 7.0468 15.6523 7.01418C14.9386 6.71708 14.4188 5.97257 14.4852 5.11959C14.5329 4.50585 14.8134 4.02398 15.3124 3.66687C15.5745 3.47917 15.8719 3.37885 16.1894 3.33331C16.3386 3.33331 16.4877 3.33331 16.6369 3.33331C16.6468 3.33608 16.6563 3.34024 16.6664 3.34162C17.1977 3.41732 17.6267 3.66811 17.9539 4.09136C18.1673 4.36738 18.2844 4.68325 18.3344 5.02574C18.3344 5.17959 18.3344 5.33345 18.3344 5.48731C18.3318 5.49715 18.3282 5.50685 18.3265 5.517C18.2042 6.24013 17.8014 6.74324 17.1278 7.03203C17.0727 7.05557 17.0583 7.08911 17.0586 7.14404C17.0603 7.4696 17.0616 7.79531 17.0586 8.12087C17.0568 8.32304 17.0687 8.52536 17.0458 8.72768C16.9815 9.29772 16.7528 9.79299 16.358 10.207C15.8466 10.7434 15.2124 11.0115 14.4713 11.0143C13.2421 11.0188 12.013 11.0155 10.7838 11.0155C10.6543 11.0155 10.6543 11.0157 10.6543 11.1478C10.6543 11.9477 10.6559 12.7476 10.6523 13.5476C10.6519 13.638 10.6795 13.6808 10.7644 13.7169C11.5466 14.049 12.019 14.8533 11.9216 15.6755C11.8391 16.373 11.4775 16.8798 10.8565 17.205C10.6563 17.3098 10.4397 17.3627 10.2174 17.3958C10.0735 17.3958 9.92933 17.3958 9.78535 17.3958C9.74244 17.388 9.6997 17.38 9.6568 17.3724C8.63967 17.1936 7.9284 16.2205 8.08797 15.2083C8.19954 14.5004 8.59754 14.0016 9.25356 13.7108C9.32701 13.6782 9.35032 13.6402 9.35001 13.562C9.34723 12.7543 9.34831 11.9465 9.34831 11.1388C9.34831 11.0157 9.34816 11.0155 9.22501 11.0155C7.60726 11.0155 5.98951 11.0155 4.37161 11.0155C4.246 11.0155 4.24569 11.0157 4.24569 11.1378C4.24553 11.943 4.24677 12.7483 4.24383 13.5534C4.24353 13.6371 4.26837 13.6799 4.34769 13.7142C5.14152 14.0571 5.60525 14.8309 5.51127 15.6846C5.44152 16.318 5.11899 16.8025 4.57346 17.1366C4.33982 17.2797 4.08195 17.3546 3.81297 17.3958C3.66374 17.3958 3.51467 17.3958 3.36544 17.3958C3.35309 17.3927 3.3409 17.3884 3.3284 17.3866C2.80063 17.3086 2.37362 17.059 2.04846 16.6378C1.83519 16.3617 1.71698 16.0463 1.66776 15.7034C1.66776 15.5495 1.66776 15.3957 1.66776 15.2418C1.67084 15.2294 1.6747 15.2172 1.67686 15.2046C1.7997 14.4881 2.1997 13.9883 2.86621 13.7003C2.93195 13.672 2.94384 13.6331 2.94368 13.5706C2.9426 11.4333 2.94245 9.29572 2.94445 7.15834C2.94445 7.08449 2.9193 7.0508 2.85201 7.02295C2.44723 6.85494 2.1335 6.58092 1.91174 6.20305C1.78149 5.98103 1.70865 5.73963 1.66776 5.48731C1.66776 5.33345 1.66776 5.17959 1.66776 5.02574C1.67115 5.0082 1.67501 4.99081 1.67794 4.97327C1.77223 4.39277 2.0659 3.94135 2.56066 3.62102C2.80603 3.46209 3.07825 3.37701 3.36529 3.33331C3.51451 3.33331 3.66359 3.33331 3.81282 3.33331C3.85819 3.34162 3.9034 3.34993 3.94877 3.35839C4.92748 3.54056 5.63473 4.44662 5.50865 5.47223C5.41899 6.20182 5.01405 6.71647 4.34121 7.01695C4.26806 7.04957 4.24322 7.08834 4.24353 7.16619C4.246 7.97625 4.24492 8.7863 4.24507 9.59636C4.24507 9.7116 4.24723 9.71344 4.36081 9.71344C5.98581 9.71344 7.61081 9.71344 9.23581 9.71344C9.34754 9.71344 9.348 9.71313 9.348 9.60236C9.34816 8.7923 9.34677 7.98225 9.35001 7.17219C9.35032 7.08665 9.32192 7.04711 9.24383 7.01449C8.46096 6.6877 7.98797 5.89056 8.08118 5.05235C8.15386 4.398 8.4855 3.90812 9.05078 3.57348C9.27254 3.44224 9.51683 3.37409 9.76961 3.33331Z" fill="#959595"/>
</svg>
 ავტ.</li>
                                                <li class="nav-item"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 10C12.3012 10 14.1667 8.13454 14.1667 5.83335C14.1667 3.53217 12.3012 1.66669 10 1.66669C7.69882 1.66669 5.83334 3.53217 5.83334 5.83335C5.83334 8.13454 7.69882 10 10 10Z" stroke="#959595" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.1583 18.3333C17.1583 15.1083 13.95 12.5 10 12.5C6.05001 12.5 2.84167 15.1083 2.84167 18.3333" stroke="#959595" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
 2</li>
                                                <li class="nav-item"><svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.08501 15H5.33501C3.98501 15 1.43501 14.3175 1.43501 11.73C1.43501 9.14248 3.98501 8.45998 5.33501 8.45998H8.66501C8.77751 8.45998 11.44 8.42248 11.44 6.31498C11.44 4.20748 8.77751 4.16998 8.66501 4.16998H4.91501C4.76583 4.16998 4.62275 4.11072 4.51727 4.00523C4.41178 3.89974 4.35251 3.75667 4.35251 3.60748C4.35251 3.4583 4.41178 3.31522 4.51727 3.20974C4.62275 3.10425 4.76583 3.04498 4.91501 3.04498H8.66501C10.015 3.04498 12.565 3.72748 12.565 6.31498C12.565 8.90248 10.015 9.58498 8.66501 9.58498H5.33501C5.22251 9.58498 2.56001 9.62248 2.56001 11.73C2.56001 13.8375 5.22251 13.875 5.33501 13.875H9.08501C9.2342 13.875 9.37727 13.9342 9.48276 14.0397C9.58825 14.1452 9.64751 14.2883 9.64751 14.4375C9.64751 14.5867 9.58825 14.7297 9.48276 14.8352C9.37727 14.9407 9.2342 15 9.08501 15Z" fill="#959595"/>
<path d="M2.83001 6.23247C2.48233 6.22952 2.13864 6.15811 1.81856 6.02233C1.49849 5.88655 1.20828 5.68906 0.964531 5.44113C0.720777 5.1932 0.528244 4.89968 0.397924 4.57734C0.267605 4.255 0.202051 3.91015 0.205006 3.56247C0.207961 3.2148 0.279366 2.87111 0.415145 2.55103C0.550924 2.23095 0.748418 1.94075 0.996351 1.697C1.24428 1.45324 1.5378 1.26071 1.86014 1.13039C2.18248 1.00007 2.52733 0.934519 2.87501 0.937474C3.57717 0.943441 4.2482 1.2281 4.74048 1.72882C5.23276 2.22954 5.50597 2.90531 5.50001 3.60747C5.49404 4.30963 5.20938 4.98067 4.70866 5.47295C4.20794 5.96523 3.53217 6.23844 2.83001 6.23247ZM2.83001 2.06247C2.43218 2.06247 2.05065 2.22051 1.76935 2.50181C1.48804 2.78312 1.33001 3.16465 1.33001 3.56247C1.33001 3.9603 1.48804 4.34183 1.76935 4.62313C2.05065 4.90444 2.43218 5.06247 2.83001 5.06247C3.22783 5.06247 3.60936 4.90444 3.89067 4.62313C4.17197 4.34183 4.33001 3.9603 4.33001 3.56247C4.33001 3.16465 4.17197 2.78312 3.89067 2.50181C3.60936 2.22051 3.22783 2.06247 2.83001 2.06247ZM11.17 17.0625C10.8223 17.0635 10.4779 16.996 10.1563 16.8638C9.83469 16.7317 9.54228 16.5375 9.29574 16.2923C9.0492 16.0472 8.85336 15.7559 8.7194 15.4351C8.58545 15.1142 8.51599 14.7701 8.51501 14.4225C8.51402 14.0748 8.58153 13.7303 8.71367 13.4087C8.8458 13.0872 9.03999 12.7948 9.28514 12.5482C9.53028 12.3017 9.82159 12.1058 10.1424 11.9719C10.4633 11.8379 10.8073 11.7685 11.155 11.7675C11.8572 11.7655 12.5314 12.0425 13.0293 12.5376C13.5272 13.0327 13.808 13.7053 13.81 14.4075C13.812 15.1096 13.535 15.7838 13.0399 16.2817C12.5448 16.7796 11.8722 17.0605 11.17 17.0625ZM11.17 12.8925C10.7722 12.8925 10.3906 13.0505 10.1093 13.3318C9.82804 13.6131 9.67001 13.9946 9.67001 14.3925C9.67001 14.7903 9.82804 15.1718 10.1093 15.4531C10.3906 15.7344 10.7722 15.8925 11.17 15.8925C11.5678 15.8925 11.9494 15.7344 12.2307 15.4531C12.512 15.1718 12.67 14.7903 12.67 14.3925C12.67 13.9946 12.512 13.6131 12.2307 13.3318C11.9494 13.0505 11.5678 12.8925 11.17 12.8925Z" fill="#959595"/>
</svg>
 მიწოდება</li>

                                            </ul>
                                        </div>


                                    </div>

                                    <div class="card-footer pt-0" style="margin-top:15px;margin-bottom:20px;">

                                        <div class="d-sm-flex justify-content-sm-between align-items-center">

                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-normal text-success mb-0 me-1" style="    color: #232538!important;font-weight: bold!important;">$1200</h5>
                                                <span class="mb-0 me-2" style="text-transform: capitalize; font-size: 13px; padding-left: 5px;">/ დღე</span>
                                            </div>

                                            <div class="mt-2 mt-sm-0 z-index-2">
                                                <a href="/search?location=Tbilisi&search_terms=&search_terms=&date=2024-04-25+to+2024-04-30" class="btn btn-sm btn-primary-soft mb-0 w-100" style="background: #78BC61; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">დაჯავშვნა<i class="bi bi-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach












                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section>


            <div class="container">


                <div class="bg-primary bg-opacity-10 rounded-3 overflow-hidden mt-4 p-4" style="


background-image: url(assets/images/home-bg-banner.png),linear-gradient(93.56deg, #7e7e7e85 6.35%, #8C8C8C 100%); height: 400px;

height: 300px">
                    <div class="row g-4 align-items-center">



                        <div class="col-md-6 order-md-2">

                            <h4 style="color: #fff; font-size: 35px; padding-left: 80px; padding-top: 50px;">ჩვენთან შეგიძლიათ <br />შექმანთ თქვენი მოგზაურობა</h4>



                            <a href="#" class="btn btn-sm btn-primary mb-0" style="background: #78BC61; border: 0; padding-left: 20px; padding-right: 20px; border-radius: 30px; margin-left: 80px; margin-top: 40px;">Собрать свой Trip</a>
                        </div>


                    </div>
                </div>

            </div>
        </section>

        <section class="pt-0">
            <div class="container">


                <div class="row g-4 align-items-center justify-content-between mb-4">

                    <div class="col-12 col-xl-8">
                        <h5 class="mb-0" style="    font-size: 30px;">საუკეთსო ადგილები საქართველოში</h5>
                    </div>


                    <div class="col-xl-2">

                        <img src="assets/images/svg/search-icon.svg" style="position: absolute; margin-top: 12px;">
                        <input class="form-control" placeholder="ძიებას" style="padding-left:25px;border: 0; border-bottom: 2px solid #898B9E; border-radius: 0px;">

                    </div>
                </div>


                <div class="row g-4">


                    <div class="col-md-3 ">
                        <div class="card card-hover-shadow pb-0 h-100">

                            <div class="position-relative">

                                <img src="assets/images/places/1.jpg" class="card-img-top" alt="Card image">


                            </div>


                            <div class="card-body px-3">

                                <h5 class="card-title mb-0"><a href="#" class="stretched-link">ზაფხული საქართველოში</a></h5>
                                <span class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>


                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href="javascript:0;" style="color: #000000; font-size: 15px; text-decoration: underline; padding-bottom: 5px;" data-bs-toggle="modal" data-bs-target="#hotels">სრულად</a>
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href=""><img src="assets/images/svg/share.svg"></a>
                                        <a href=""><img src="assets/images/svg/places-button.svg"></a>
                                    </li>

                                </ul>
                            </div>




                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="card card-hover-shadow pb-0 h-100">

                            <div class="position-relative">

                                <img src="assets/images/places/2.jpg" class="card-img-top" alt="Card image">


                            </div>


                            <div class="card-body px-3">

                                <h5 class="card-title mb-0"><a href="#" class="stretched-link">ზაფხული საქართველოში</a></h5>
                                <span class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>


                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href="javascript:0;" style="color: #000000; font-size: 15px; text-decoration: underline; padding-bottom: 5px;" data-bs-toggle="modal" data-bs-target="#hotels">სრულად</a>
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href=""><img src="assets/images/svg/share.svg"></a>
                                        <a href=""><img src="assets/images/svg/places-button.svg"></a>
                                    </li>

                                </ul>
                            </div>




                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="card card-hover-shadow pb-0 h-100">

                            <div class="position-relative">

                                <img src="assets/images/places/2.jpg" class="card-img-top" alt="Card image">


                            </div>


                            <div class="card-body px-3">

                                <h5 class="card-title mb-0"><a href="#" class="stretched-link">ზაფხული საქართველოში</a></h5>
                                <span class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>


                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href="javascript:0;" style="color: #000000; font-size: 15px; text-decoration: underline; padding-bottom: 5px;" data-bs-toggle="modal" data-bs-target="#hotels">სრულად</a>
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href=""><img src="assets/images/svg/share.svg"></a>
                                        <a href=""><img src="assets/images/svg/places-button.svg"></a>
                                    </li>

                                </ul>
                            </div>




                        </div>
                    </div>



                    <div class="col-md-3 ">
                        <div class="card card-hover-shadow pb-0 h-100">

                            <div class="position-relative">

                                <img src="assets/images/places/2.jpg" class="card-img-top" alt="Card image">


                            </div>


                            <div class="card-body px-3">

                                <h5 class="card-title mb-0"><a href="#" class="stretched-link">ზაფხული საქართველოში</a></h5>
                                <span class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>


                                <ul class="nav nav-divider mt-3 mb-0">
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href="javascript:0;" style="color: #000000; font-size: 15px; text-decoration: underline; padding-bottom: 5px;" data-bs-toggle="modal" data-bs-target="#hotels">სრულად</a>
                                    </li>
                                    <li class="nav-item h6 fw-normal mb-0">
                                        <a href=""><img src="assets/images/svg/share.svg"></a>
                                        <a href=""><img src="assets/images/svg/places-button.svg"></a>
                                    </li>

                                </ul>
                            </div>




                        </div>
                    </div>







                </div>



            </div>
        </section>



        <section class="pt-0 pt-md-5">
            <div class="container">

                <div class="row g-4 align-items-center justify-content-between mb-4">

                    <div class="col-12 col-xl-12">
                        <h5 class="mb-0" style="    font-size: 30px;">ჩვენი შეთავგაზებები</h5>
                    </div>
                    <div class="col-12 col-xl-8">
                        <!-- tabs place -->
                        <div class="d-flex  p-2 p-xl-0 mt-xl-4">
                            <button class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#78BC61; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;">სასტუმრო</button>
                            <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;">რესტორანი </button>
                            <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;">ბარო </button>
                        </div>

                        <!-- tabs place and -->
                    </div>

                    <div class="col-xl-2">

                        <img src="assets/images/svg/search-icon.svg" style="position: absolute; margin-top: 12px;">
                        <input class="form-control" placeholder="" style="padding-left:25px;border: 0; border-bottom: 2px solid #898B9E; border-radius: 0px;">

                    </div>
                </div>
                <div class="row g-4">



                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-xl-3">

                        <div class="card card-img-scale overflow-hidden bg-transparent">
                            <div class="card-img-scale-wrapper rounded-3">

                                <img src="assets/images/offered.jpg" class="card-img" alt="">


                            </div>


                            <div class="card-body px-2">

                                <div class="stars-place">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                    <img src="assets/images/svg/star.svg">
                                </div>
                                <h5 class="card-title"><a href="#" class="stretched-link">Eco House Merisi</a></h5>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p style="font-size:12px;">სოფელი, აჭარაში საუკეთესო ხედებით</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="hstack gap-2">
                                            <span class="h5 mb-0 text-success">$70</span>
                                            <small>/ ღამე</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="pt-0 pt-md-5">
            <div class="container position-relative">

                <img src="assets/images/bg-for-footer.png" style="position: absolute;
		z-index: -1;
		margin-top: -50px;">

                <div class="rounded-3 position-relative p-3 p-sm-4">




                    <div class="row">
                        <div class="col-md-7 ">

                            <h2 class="mb-4" style="    margin-top: 120px;">-10% შეკვეთისას აპლიკაციიდან <span style="color:#48713A;font-weight: bold;">TripBox</span> Coming soon </h2>
                            <img src="assets/images/svg/googleplay.svg" style="float: left; margin-left: 0px;margin-right: 5px;">
                            <img src="assets/images/svg/appstore.svg" style="float: left; margin-left: 0px;margin-right: 5px;">


                        </div>
                        <div class="col-md-5">
                            <img src="assets/images/down-phone.png" style="float: left;
					width: 50%;">
                            <img src="assets/images/down-phone-2.png" style="float: left;
					width: 50%;">

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection
@push('js')
<style>

#ui-datepicker-div{display:none;background-color:#fff;box-shadow:0 .125rem .5rem rgba(0,0,0,.1);margin-top:.25rem;border-radius:.5rem;padding:.5rem}table{border-collapse:collapse;border-spacing:0}.ui-datepicker-calendar thead th{padding:.25rem 0;text-align:center;font-size:.75rem;font-weight:400;color:#78909c}.ui-datepicker-calendar tbody td{width:2.5rem;text-align:center;padding:0}.ui-datepicker-calendar tbody td a{display:block;border-radius:.25rem;line-height:2rem;transition:.3s;color:#546e7a;font-size:.875rem;text-decoration:none}.ui-datepicker-calendar tbody td a:hover{background-color:#e0f2f1}.ui-datepicker-calendar tbody td a.ui-state-active{background-color:#009688;color:#fff}.ui-datepicker-header a.ui-corner-all{cursor:pointer;position:absolute;top:0;width:2rem;height:2rem;margin:.5rem;border-radius:.25rem;transition:.3s}.ui-datepicker-header a.ui-corner-all:hover{background-color:#eceff1}.ui-datepicker-header a.ui-datepicker-prev{left:0;background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==") 50%/.5rem no-repeat;transform:rotate(180deg)}.ui-datepicker-header a.ui-datepicker-next{right:0;background:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==') 50%/10px no-repeat}.ui-datepicker-header a>span{display:none}.ui-datepicker-title{text-align:center;line-height:2rem;margin-bottom:.25rem;font-size:.875rem;font-weight:500;padding-bottom:.25rem}.ui-datepicker-week-col{color:#78909c;font-weight:400;font-size:.75rem}

</style>
    <script>
        flatpickr('#fltpcks',{
            mode: "range",
            minDate: "today",
            dateFormat: "Y-m-d",
            disable: [
                function(date) {
                    // disable every multiple of 8
                    return !(date.getDate() % 8);
                }
            ]
        });
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script>
   
$( function() {
	$( ".datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>
@endpush
