@extends('website.layouts.app')

@section('content')
<style>
.form-control-border .choices .choices__placeholder {
    color:#fff;
    opacity: 1;
}
.choices .choices__inner {
    border: 1px solid #fff;
}
.form-control-transparent i {
color:#fff;
}
.form-fs-md .form-control {
    color:#fff;
}

nav {
    box-shadow: 4px 4px 15px 0px #e1777700!important;
    background:#fff !important;
    margin-left: 100px!important;
    margin-right: 100px!important;
    border-radius: 20px!important;
    margin-top: 0px!important;
}
a {
    color:#20B385
}
header {
    background: #fff;
}
.modal-fullscreen {
    width: 101vw;
    max-width: none;
    height: 100%;
    margin: 0;
    margin-left: -20px;
}
</style>



    <main>


        <section>
            <img src="assets/images/places.jpg" style="    margin-top: -220px;">
            <div class="container">
                <div class="slider-texts">


                    <h3>აირჩიეთ საუკეთესო ადგილი საქართველოში<br/> ჩვენი რეკომენდაციით <span style="color:#78BC61;">TripBox</span>
                    </h3>


                    <form class=" position-relative p-4 pe-md-5 pb-5 pb-md-4" style="box-shadow: 4px 4px 15px 0px #00000026;

box-shadow: 0px 4px 4px 0px #00000040;
background: linear-gradient(90.79deg, #78BC61 0%, #AED7A0 100%);
border-radius: 30px;
margin-top: 40px;" action="{{ route('search') }}">
                      <div class="row g-4 align-items-center">

<div class="col-lg-3">
    <div class="form-control-border form-control-transparent form-fs-md d-flex">

        <i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>

        <div class="flex-grow-1">
            <label class="form-label">გასვლა</label>
            <select class="form-select js-choice" data-search-enabled="true" name="location_from" required>
                <option value="">ბათუმი</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->city_en }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="form-control-border form-control-transparent form-fs-md d-flex">

        <i class="bi bi-geo-alt fs-3 me-2 mt-2"></i>

        <div class="flex-grow-1">
            <label class="form-label">დაბრუნება</label>
            <select class="form-select js-choice" name="location_to" data-search-enabled="true" required>
                <option value="">ბათუმი</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->city_en }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>


<div class="col-lg-3">
    <div class="d-flex">

        <i class="bi bi-calendar fs-3 me-2 mt-2" style="color:#fff;"></i>

        <div class="form-control-border form-control-transparent form-fs-md">
            <label class="form-label">აირჩიეთ თარიღები</label>
            <input type="text" class="form-control datepicker" style="    border: 1px solid #fff;   margin-right:6%; float: left;width: 47%;" name="date_from" placeholder="დან">
            <input type="text" class="form-control datepicker" style="      border: 1px solid #fff;  float: left;width: 47%;" name="date_to" placeholder="მდე">
        </div>
    </div>
</div>

<div class="col-lg-1">


    <div class="">
        <a class="icon-lg btn btn-round btn-primary mb-0" style="background-color: #78BC61;border: 0;margin-top: 10px;" href="#"><img src="{{asset('/assets/images/svg/detailed-search.svg')}}"></a>
    </div>



</div>

<div class="col-lg-2">



    <button class="src-btn" type="submit">ძიება</button>




</div>


</div>


                    </form>

                </div>
            </div>

        </section>


        <section class="pt-0" style="margin-top:130px;">
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


                                    <h5 class="card-title" style="     margin-bottom: 0px;   font-size: 17px;"><a
                                            href="#">{{ $car->brand->name }} {{ $car->brand_model->name }}</a></h5>
                                    <p style="    font-size: 14px;">{{ $car->category->title }}</p>
                                        <a href="/wishlist">
                                    <img src="{{asset('/assets/images/svg/favourite.svg')}}"
                                         style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">
                                        </a>

                                </div>

                                <img src="{{ $car->get_poster }}" style=" height: 100px; object-fit: contain;"
                                     alt="Card image">
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
 {{ $car->number_of_seats }}</li>
                                                <li class="nav-item"><svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.08501 15H5.33501C3.98501 15 1.43501 14.3175 1.43501 11.73C1.43501 9.14248 3.98501 8.45998 5.33501 8.45998H8.66501C8.77751 8.45998 11.44 8.42248 11.44 6.31498C11.44 4.20748 8.77751 4.16998 8.66501 4.16998H4.91501C4.76583 4.16998 4.62275 4.11072 4.51727 4.00523C4.41178 3.89974 4.35251 3.75667 4.35251 3.60748C4.35251 3.4583 4.41178 3.31522 4.51727 3.20974C4.62275 3.10425 4.76583 3.04498 4.91501 3.04498H8.66501C10.015 3.04498 12.565 3.72748 12.565 6.31498C12.565 8.90248 10.015 9.58498 8.66501 9.58498H5.33501C5.22251 9.58498 2.56001 9.62248 2.56001 11.73C2.56001 13.8375 5.22251 13.875 5.33501 13.875H9.08501C9.2342 13.875 9.37727 13.9342 9.48276 14.0397C9.58825 14.1452 9.64751 14.2883 9.64751 14.4375C9.64751 14.5867 9.58825 14.7297 9.48276 14.8352C9.37727 14.9407 9.2342 15 9.08501 15Z" fill="#959595"/>
<path d="M2.83001 6.23247C2.48233 6.22952 2.13864 6.15811 1.81856 6.02233C1.49849 5.88655 1.20828 5.68906 0.964531 5.44113C0.720777 5.1932 0.528244 4.89968 0.397924 4.57734C0.267605 4.255 0.202051 3.91015 0.205006 3.56247C0.207961 3.2148 0.279366 2.87111 0.415145 2.55103C0.550924 2.23095 0.748418 1.94075 0.996351 1.697C1.24428 1.45324 1.5378 1.26071 1.86014 1.13039C2.18248 1.00007 2.52733 0.934519 2.87501 0.937474C3.57717 0.943441 4.2482 1.2281 4.74048 1.72882C5.23276 2.22954 5.50597 2.90531 5.50001 3.60747C5.49404 4.30963 5.20938 4.98067 4.70866 5.47295C4.20794 5.96523 3.53217 6.23844 2.83001 6.23247ZM2.83001 2.06247C2.43218 2.06247 2.05065 2.22051 1.76935 2.50181C1.48804 2.78312 1.33001 3.16465 1.33001 3.56247C1.33001 3.9603 1.48804 4.34183 1.76935 4.62313C2.05065 4.90444 2.43218 5.06247 2.83001 5.06247C3.22783 5.06247 3.60936 4.90444 3.89067 4.62313C4.17197 4.34183 4.33001 3.9603 4.33001 3.56247C4.33001 3.16465 4.17197 2.78312 3.89067 2.50181C3.60936 2.22051 3.22783 2.06247 2.83001 2.06247ZM11.17 17.0625C10.8223 17.0635 10.4779 16.996 10.1563 16.8638C9.83469 16.7317 9.54228 16.5375 9.29574 16.2923C9.0492 16.0472 8.85336 15.7559 8.7194 15.4351C8.58545 15.1142 8.51599 14.7701 8.51501 14.4225C8.51402 14.0748 8.58153 13.7303 8.71367 13.4087C8.8458 13.0872 9.03999 12.7948 9.28514 12.5482C9.53028 12.3017 9.82159 12.1058 10.1424 11.9719C10.4633 11.8379 10.8073 11.7685 11.155 11.7675C11.8572 11.7655 12.5314 12.0425 13.0293 12.5376C13.5272 13.0327 13.808 13.7053 13.81 14.4075C13.812 15.1096 13.535 15.7838 13.0399 16.2817C12.5448 16.7796 11.8722 17.0605 11.17 17.0625ZM11.17 12.8925C10.7722 12.8925 10.3906 13.0505 10.1093 13.3318C9.82804 13.6131 9.67001 13.9946 9.67001 14.3925C9.67001 14.7903 9.82804 15.1718 10.1093 15.4531C10.3906 15.7344 10.7722 15.8925 11.17 15.8925C11.5678 15.8925 11.9494 15.7344 12.2307 15.4531C12.512 15.1718 12.67 14.7903 12.67 14.3925C12.67 13.9946 12.512 13.6131 12.2307 13.3318C11.9494 13.0505 11.5678 12.8925 11.17 12.8925Z" fill="#959595"/>
</svg>
 {{ carRentalCalculation(\request()->location_from,$car->gps_car_id,$car->id)['delivery_cost'] + carRentalCalculation(\request()->location_to,$car->gps_car_id,$car->id)['delivery_cost'] }}</li>

                                            </ul>
                                </div>


                            </div>
                            <div class="card-footer pt-0" style="margin-top:15px;margin-bottom:20px;">

                                <div class="d-sm-flex justify-content-sm-between align-items-center">

                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-normal text-success mb-0 me-1"
                                            style="    color: #232538!important;font-weight: bold!important;">
                                            $ {{ $diffDays * $car->price }}</h5>
                                        <span class="mb-0 me-2"
                                              style="text-transform: capitalize; font-size: 13px; padding-left: 5px;">/ დღე</span>
                                    </div>

                                    <div class="mt-2 mt-sm-0 z-index-2">
                                        
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary-soft mb-0 w-100 car-detail" data-id="{{ $car->id }}" data-diff-days="{{ $diffDays }}"
                                           style="background: #78BC61; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">დაჯავშვნა<i
                                                class="bi bi-arrow-right ms-2"></i></a>

                                        {{--
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary-soft mb-0 w-100 add-to-cart" data-id="{{ $car->id }}" data-model-type="car" style="background: #78BC61; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">დაჯავშვნა<i class="bi bi-arrow-right ms-2"></i></a>
                                            --}}

                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        
                    @endforeach
                    {{ $cars->withQueryString()->links() }}
                    <div class="modal fade" id="car_detail" tabindex="-1" aria-labelledby="carsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">

                                    <div class="modal-body" style=" padding: 0px;">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>
                                        <!--<div id="mapsite"></div>-->
                                        <div class="htmlDisplay"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                    <style>
                        nav {
                            box-shadow: 4px 4px 15px 0px #00000026;
                            background: #fff;
                            margin-left: 100px;
                            margin-right: 100px;
                            border-radius: 20px;
                            margin-top: 50px;
                        }
                    </style>








                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </section>


      


       {{-- 

        <section class="pt-0" style="margin-top: 100px;">
            <div class="container">

                <div class="row g-4 align-items-center justify-content-between mb-4">

                    <div class="col-12 col-xl-12">
                        <h5 class="mb-0" style="    font-size: 30px;">Лучшие места Батуми</h5>
                    </div>
                    <div class="col-12 col-xl-8">
                        <!-- tabs place -->

                        <!-- tabs place and -->
                    </div>


                </div>

                <div class="row">

                    <div class="col-xl-12 col-xxl-12">
                        <div class=" row">

                            @foreach($locations as $location)

                                <div class="col-md-6" style="margin-bottom:20px;">


                                    <div class="card shadow p-2">
                                        <div class="row g-0">

                                            <div class="col-md-3 position-relative">


                                                <div
                                                    class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
                                                    <div class="tiny-slider-inner" data-autoplay="false"
                                                         data-arrow="true" data-dots="false" data-items="1">

                                                        <div><img src="assets/images/places-picture.jpg"
                                                                  alt="Card image"></div>


                                                    </div>
                                                </div>

                                            </div>


                                            <div class="col-md-9">
                                                <div
                                                    class="card-body py-md-2 d-flex flex-column h-100 position-relative">


                                                    <h5 class="card-title mb-1"><a
                                                            href="{{ route('location.detail',$location['location_id']) }}">{{ $location['name'] }} </a>
                                                    </h5>
                                                    <small>Вместе с Вардзией и Уплисцихе Давид-Гареджи входит в тройку
                                                        хорошо сохранившихся средневековых достопримечательностей –
                                                        уникальных пещерных монастырей.</small>

                                                    <ul class="nav nav-divider mt-3">
                                                        <li class="nav-item">10 км от Тбилиси</li>
                                                        <li class="nav-item">Бесплатный вход</li>

                                                    </ul>

                                                    <div style="display: flex;margin-top:10px;">

                                                        <a href="javascript:void(0)"
                                                           class="btn btn-sm btn-primary-soft mb-0 w-100 "
                                                           data-bs-toggle="modal" data-bs-target="#hotels"
                                                           style="margin-right: 10px;background: #31344B; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">Узнать
                                                            больше</a>

                                                        <a href="javascript:void(0)"
                                                           class="btn btn-sm btn-primary-soft mb-0 w-100 add-to-cart"
                                                           data-id="{{ $location['location_id'] }}"
                                                           data-model-type="location"
                                                           style="background: #78BC61; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">Добавить
                                                            в Trip<i class="bi bi-arrow-right ms-2"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            @endforeach


                        </div>
                    </div>

                </div>
            </div>
        </section>
        --}}

    </main>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    
    $(document.body).on('click', '.car-detail', function(){
            $('#car_detail').modal('show'); // show bootstrap modal when complete loaded
            $(".htmlDisplay").html('<h3 align=center class=text-warning><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> დაელოდეთ...</h3>');
            let id = $(this).data('id');
            let carId = $(this).data('diff-days');
            $.ajax({
                url: "{{ route('car.detail.render') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'diff_days': carId,
                    'city_from': '{{ \request()->location_from }}',
                    'city_to': '{{ \request()->location_to }}'
                },
                success: function (msg) {
                    // $('#car_detail').modal('hide');
                    $('.htmlDisplay').html(msg.html);
                },
                error: function () {
                    alert('შეცდომა, გაიმეორეთ მოქმედება.');
                }
            })
        });
        
        $(document.body).on('click', '.add-to-cart', function () {
            let id = $(this).data('id');
            let modelType = $(this).data('model-type');
            const checkboxes = document.querySelectorAll('input[name="additional_services[]"]:checked');
            
            // Initialize an array to store checked values
            const checkedValues = [];

            checkboxes.forEach((checkbox) => {
                checkedValues.push(checkbox.value);
            });
            $.ajax({
                url: "{{ route('add-to-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'model_type': modelType,
                    'date_from': '{{ \request()->date_from }}',
                    'date_to': '{{ \request()->date_to }}',
                    'location_from': '{{ \request()->location_from }}',
                    'location_to': '{{ \request()->location_to }}',
                    'additional_services' : checkedValues
                },
                success: function (response) {
                    if (response.status == 0) {
                        $('#cart_count').html(response.cart_count);
                        $('#cart_count_mobile').html(response.cart_count);
                        // getCartData()
                        console.log(response.type)
                        notify('success', response.message);
                        if(response.type == 1){
                            window.setTimeout(function(){
                                let route = "{{ route('user.orders.show', ':id') }}"
                                route = route.replace(':id', response.id);
                                window.location.href = route;
                            }, 3000);
                        }else{
                            window.setTimeout(function(){
                                let route = "{{ route('tbc_pay', ':total') }}"
                                route = route.replace(':total', response.price);
                                window.location.href = route;
                            }, 3000);
                        }
                        

                    }
                    else {
                        $('.htmlDisplay').html('<h3 align=center class=text-danger><i class="fa fa-spin fa-spinner"></i> პროდუქტზე ინფორმაცია ვერ მოიძებნა!</h3>');
                    }
                },
                error: function () {
                    alert('შეცდომა, გაიმეორეთ მოქმედება.');
                }
            })
        })
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk" loading=async></script>

    <script async defer>
        initMap();
    </script>
@endpush
