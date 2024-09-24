@extends('website.layouts.app')

@section('content')

<style>
     .required-add-field {
     border:1px solid red !important;
    }

.home-banner div,.home-banner h3{margin-top:23px;margin-right:20px}.form-control-border .choices .choices__placeholder{color:#fff;opacity:1}.form-control-transparent i,.form-fs-md .form-control{color:#fff}
/* nav{background:#fff!important;box-shadow:4px 4px 15px 0 #e1777700!important;background:#fff0!important;margin-left:100px!important;margin-right:100px!important;border-radius:20px!important;margin-top:0!important} */
a{color:#20b385}.hero-map{position:absolute;width:51%;height:600px;object-fit:contain;z-index:-1;top:80px!important;right:80px;margin-top:-1%}.choices .choices__inner{border:2px solid #48713a94;border-radius:8px;border:1px solid #cbc2c2}.choices__list--single .choices__item{width:100%;padding-left:20px}.form-control-border .form-label,.home-banner div h5{margin-bottom:0}.form-fs-md .form-control{border-top-left-radius:16px;border-bottom-left-radius:16px;border:1px solid #cbc2c2}.home-banner{background:#f7faed;display:flex;border-radius:6px;padding-top:10px;padding-left:20px;padding-right:20px}.home-banner img{height:103px;object-fit:contain}.home-banner a{margin-top:23px}.home-banner h3{border-right:2px solid #555;padding-right:20px}.car-parametres li{font-size:15px;text-align:left}.ratings-home-car{border:1px solid #e4e6e8;box-shadow:0 2px 7px 0 #00000012;border-radius:50px;display:inline-flex;padding:10px;font-size:10px;position:absolute;margin-top:-40px;background:#fff;right:0;margin-right:35px}.ratings-home-car h5{font-size:13px;margin-bottom:0}.ratings-home-car h5 span{color:#737373;font-weight:300}.card-metro img{height:265px;object-fit:cover;width:100%}header{background:#fff}.modal-fullscreen{width:101vw;max-width:none;height:100%;margin:0 0 0 -20px}

.home-banner div,.home-banner h3{margin-top:23px;margin-right:20px}.choices .choices__inner{border:2px solid #48713a94;border-radius:8px;border:1px solid #cbc2c2}.choices__list--single .choices__item{width:100%;padding-left:20px}.form-control-border .form-label,.home-banner div h5{margin-bottom:0}.form-fs-md .form-control{border-top-left-radius:16px;border-bottom-left-radius:16px;border:1px solid #cbc2c2}.home-banner{background:#f7faed;display:flex;border-radius:6px;padding-top:10px;padding-left:20px;padding-right:20px}.home-banner img{height:103px;object-fit:contain}.home-banner a{margin-top:23px}.home-banner h3{border-right:2px solid #555;padding-right:20px}.car-parametres li{font-size:15px;text-align:left}.ratings-home-car{border:1px solid #e4e6e8;box-shadow:0 2px 7px 0 #00000012;border-radius:50px;display:inline-flex;padding:10px;font-size:10px;position:absolute;margin-top:-40px;background:#fff;right:0;margin-right:35px}.ratings-home-car h5{font-size:13px;margin-bottom:0}.ratings-home-car h5 span{color:#737373;font-weight:300}.card-metro img{height:265px;object-fit:cover;width:100%}
.form-fs-md .form-control 
{
    color:#555;
}
.choices__list--single .choices__item {
    padding-left: 0px!important;
    font-size: 16px;
}
.form-icon-input .choices .choices__inner {
    
    background-color: #ffffff!important;
}

.car_card_image {
    height: 160px;
    object-fit: contain;
    margin-top: 20px;
    width: 95%;
    margin: 0 auto;
    margin-top: 20px;
}
</style>



    <main>

    @include('website.particials.home-search_new')

    <!-- -->



    <div class="down-menu" style="      margin-top: -30px;
    margin-bottom: 40px;
    border-top: 1px solid #ffffff78;
    border-bottom: 1px solid #ffffff63;
    ">
                <div class="container">

               <!-- -->

<div class="row" style="    border-bottom: 1px solid #ececec;
    padding-bottom: 10px;
    margin-bottom: -20px;">


<div class="shows-mobile" style="border-top: 1px solid #e3e3e3; padding-top: 20px; border-bottom: 1px solid #e3e3e3; padding-bottom: 20px; margin-top: -20px;">

<div class="d-flex justify-content-between">

{{-- 
<div style="border: 1px solid #000000; border-radius: 10px; text-transform: uppercase; color: #1E234C; font-weight: bold; height: 42px; font-size: 12px; padding-top: 12px; padding-left: 10px; padding-right: 10px;">
    No Deposite
</div>
--}}
<select  class="" onchange="sortChange()" style="border: 1px solid #000000; border-radius: 10px; text-transform: uppercase; color: #1E234C; font-weight: bold; height: 42px; font-size: 12px; padding-top: 12px; padding-left: 10px; padding-right: 10px;">
                <option value="">@lang('Deposites_search')</option>
                <option value="yes">@lang('depo_yes')</option>
                <option value="no">@lang('depo_nows')</option>
            </select>




<select id="sortby1" class="sortby1" onchange="sortChange()" style="width:25%;background:#fff;;border: 1px solid #000000; border-radius: 10px; text-transform: uppercase; color: #1E234C; font-weight: bold; height: 42px; font-size: 12px; padding-top: 12px; padding-left: 10px; padding-right: 10px;">
                    <option value="">@lang('cost')</option>
                    <option value="price_desc" @if(\request()->sort_by == 'price_desc') selected @endif>Price Smallest</option>
                    <option value="price_asc" @if(\request()->sort_by == 'price_asc') selected @endif>Price Largest</option>
</select>



<!-- Price
<svg width="23" height="20" viewBox="0 0 23 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.93124 39.6205C7.32176 40.011 7.95492 40.011 8.34546 39.6205L14.7096 33.2567C15.1001 32.8662 15.1001 32.233 14.7096 31.8425C14.3191 31.452 13.6859 31.452 13.2954 31.8425L7.6384 37.4992L1.98167 31.8422C1.59116 31.4517 0.957992 31.4517 0.567458 31.8422C0.176925 32.2327 0.176911 32.8659 0.567427 33.2564L6.93124 39.6205ZM6.63879 20L6.63837 38.9134L8.63837 38.9134L8.63879 20L6.63879 20Z" fill="#959595"/>
<path d="M15.3285 0.276514C14.9289 -0.104761 14.2959 -0.0899366 13.9147 0.309624L7.70144 6.82084C7.32016 7.2204 7.33499 7.85339 7.73455 8.23466C8.13411 8.61594 8.7671 8.60111 9.14837 8.20155L14.6712 2.41381L20.459 7.93667C20.8585 8.31794 21.4915 8.30312 21.8728 7.90356C22.2541 7.504 22.2393 6.87101 21.8397 6.48973L15.3285 0.276514ZM16.0807 19.8848L15.6379 0.976569L13.6384 1.02339L14.0812 19.9316L16.0807 19.8848Z" fill="#959595"/>
</svg> -->
<!-- 
</div> -->


<div class="openbtn" onclick="openNav()" style="  border: 1px solid #000000; border-radius: 10px; text-transform: uppercase; color: #1E234C; font-weight: bold; height: 42px; font-size: 12px; padding-top: 12px; padding-left: 10px; padding-right: 10px;">
@lang('filter_service') 
<!-- 
<svg style="color:#1E234C;    margin-left: 20px;
            margin-top: -5px;" width="20" height="14" viewBox="0 0 24 18" fill="#1E234C" stoke="#1E234C" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1.5C0 1.10218 0.158036 0.720645 0.43934 0.43934C0.720645 0.158036 1.10218 0 1.5 0H22.5C22.8978 0 23.2794 0.158036 23.5607 0.43934C23.842 0.720645 24 1.10218 24 1.5C24 1.89782 23.842 2.27936 23.5607 2.56066C23.2794 2.84196 22.8978 3 22.5 3H1.5C1.10218 3 0.720645 2.84196 0.43934 2.56066C0.158036 2.27936 0 1.89782 0 1.5ZM3 9C3 8.60218 3.15804 8.22064 3.43934 7.93934C3.72064 7.65804 4.10218 7.5 4.5 7.5H19.5C19.8978 7.5 20.2794 7.65804 20.5607 7.93934C20.842 8.22064 21 8.60218 21 9C21 9.39782 20.842 9.77936 20.5607 10.0607C20.2794 10.342 19.8978 10.5 19.5 10.5H4.5C4.10218 10.5 3.72064 10.342 3.43934 10.0607C3.15804 9.77936 3 9.39782 3 9ZM6 16.5C6 16.1022 6.15804 15.7206 6.43934 15.4393C6.72064 15.158 7.10218 15 7.5 15H16.5C16.8978 15 17.2794 15.158 17.5607 15.4393C17.842 15.7206 18 16.1022 18 16.5C18 16.8978 17.842 17.2794 17.5607 17.5607C17.2794 17.842 16.8978 18 16.5 18H7.5C7.10218 18 6.72064 17.842 6.43934 17.5607C6.15804 17.2794 6 16.8978 6 16.5Z" fill="white"/>
</svg> -->

<svg width="20" style="  
margin-top: -2px;" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="#1E234C"/> </g>

</svg>

</div>



</div>

</div>




<div class="shows-mobile" style="padding-top: 20px;  padding-bottom: 20px; margin-top: -20px;">

<h5 style="font-size: 18px; margin-bottom: 20px;">@lang('city_filter')</h5>
<div class="d-flex justify-content-between">

<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from]) }}#search-block">
<div class="button_home">
@lang('all_cities')
</div>
</a>
<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from,'city' => 'Batumi']) }}#search-blockr" >
<div class="button_home @if(\request()->city == 'Batumi') green_active @endif">
@lang('batumi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from,'city' => 'Tbilisi']) }}#search-block" >
<div class="button_home" @if(\request()->city == 'Tbilisi') class="green_active" @endif>
@lang('tbilisi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from,'city' => 'Kutaisi']) }}#search-block" >
<div class="button_home" @if(\request()->city == 'Kutaisi') class="green_active" @endif>
@lang('kutaisi_city')
</div>
</a>

</div>

</div>



<div class="mobile_hides">


    <div class="row " >
        <!-- <div class="search-button-mobile">

            <a href="javascript:0;" class="openbtn" onclick="openNav()"  >
            @lang('filter_service') <svg style="    margin-left: 20px;
            margin-top: -5px;" width="20" height="14" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 1.5C0 1.10218 0.158036 0.720645 0.43934 0.43934C0.720645 0.158036 1.10218 0 1.5 0H22.5C22.8978 0 23.2794 0.158036 23.5607 0.43934C23.842 0.720645 24 1.10218 24 1.5C24 1.89782 23.842 2.27936 23.5607 2.56066C23.2794 2.84196 22.8978 3 22.5 3H1.5C1.10218 3 0.720645 2.84196 0.43934 2.56066C0.158036 2.27936 0 1.89782 0 1.5ZM3 9C3 8.60218 3.15804 8.22064 3.43934 7.93934C3.72064 7.65804 4.10218 7.5 4.5 7.5H19.5C19.8978 7.5 20.2794 7.65804 20.5607 7.93934C20.842 8.22064 21 8.60218 21 9C21 9.39782 20.842 9.77936 20.5607 10.0607C20.2794 10.342 19.8978 10.5 19.5 10.5H4.5C4.10218 10.5 3.72064 10.342 3.43934 10.0607C3.15804 9.77936 3 9.39782 3 9ZM6 16.5C6 16.1022 6.15804 15.7206 6.43934 15.4393C6.72064 15.158 7.10218 15 7.5 15H16.5C16.8978 15 17.2794 15.158 17.5607 15.4393C17.842 15.7206 18 16.1022 18 16.5C18 16.8978 17.842 17.2794 17.5607 17.5607C17.2794 17.842 16.8978 18 16.5 18H7.5C7.10218 18 6.72064 17.842 6.43934 17.5607C6.15804 17.2794 6 16.8978 6 16.5Z" fill="white"/>
</svg>

            </a>
        </div> -->
        <div class="col-md-7">
        <!-- <div class="form-check form-switch" style=" ">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-left: 10px;">@lang('without_deposite')</label>
            </div> -->
          
<div class="d-flex justify-content-between">

<h5 style="font-size: 18px; margin-bottom: 20px;padding-top: 10px;">@lang('city_filter')</h5>




<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from]) }}#search-block">
<div class="button_home">
@lang('all_cities')
</div>
</a>
<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from,'city' => 'Batumi']) }}#search-block" >
<div class="button_home @if(\request()->city == 'Batumi') green_active @endif">
@lang('batumi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from,'city' => 'Tbilisi']) }}#search-block">
<div class="button_home @if(\request()->city == 'Tbilisi') green_active @endif">
@lang('tbilisi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => \request()->date_from,'city' => 'Kutaisi']) }}#search-block" >
<div class="button_home @if(\request()->city == 'Kutaisi') green_active @endif">
@lang('kutaisi_city')
</div>
</a>
</div>
            <!-- <img src="assets/images/svg/search-icon.svg" style="position: absolute; margin-top: 12px;">
            <input class="form-control"  placeholder="მარკა, მოდელი" style="padding-left:25px;border: 0; border-bottom: 2px solid #898B9E; border-radius: 0px;"> -->
        </div>
        <div class="col-md-5">
            <div class="d-flex">

            
            <div class="search-home-selects">

                    


            <select onchange="sortChange()" id="deposit" style="padding: 10px 20px;border: 1px solid #ebebeb;border-radius: 10px;margin-top: -3px;">
                <option value="">@lang('Deposites_search')</option>
                <option value="yes" @selected(\request()->deposit == 'yes')>@lang('depo_yes')</option>
                <option value="no" @selected(\request()->deposit == 'no')>@lang('depo_nows')</option>
            </select>
            {{--- 
            <select>
                <option>@lang('populars')</option>
            </select>
            ---}}
            </div>


            <div class="search-home-selects">

          


                <select id="sortby" class="sortby" onchange="sortChange()" style="padding: 10px 20px;
border: 1px solid #ebebeb;
border-radius: 10px;
margin-top: -3px;">
                    <option value="">@lang('cost')</option>
                    <option value="price_desc" @if(\request()->sort_by == 'price_desc') selected @endif>@lang('price_smallest')</option>
                    <option value="price_asc" @if(\request()->sort_by == 'price_asc') selected @endif>@lang('prices_biggest')</option>
                </select>
               {{--- 
                <select>
                    <option>@lang('populars')</option>
                </select>
                ---}}
            </div>

            <a href="javascript:0;" data-bs-toggle="modal" data-bs-target="#searchs_brands">
        
        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"></g>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

<g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="#1e234c"></path> </g>

</svg>
    </a>

            </div>
        </div>

       
    </div>
    </div>
</div>


               <!-- ... -->





</div>

</div>




    <!-- ... -->

    <section class="pt-0" id="search-block" style="    scroll-margin-block-start: 110px;scroll-margin-block-end: 110px;">
            <div class="container">
                <div class="row">

                
                    <div class="col-xl-12 col-xxl-12">
                        <div class="vstack gap-4">





                      



                        <!-- ... -->




                            <div class="row">

                            @foreach($cars as $car)

                            @php
                                $favorite = \App\Models\Favorite::where('car_id',$car->id)->where('user_id',currentUser()->id)->first();
                                $savedFavorite = false;
                                if($favorite){
                                    $savedFavorite = true;
                                }
                                @endphp
                                <div class="col-md-3" style="margin-bottom:30px;">

                                <div style="border: 1px solid #E4E6E8;    border-radius: 32px;">
                            
                          

                                    <div class="card  p-2 pb-0 h-100" style="        background: #fff0;margin-left: -9px !important; margin-right: -9px !important;">

                                        <div class="card-body px-3 pb-0" style="    padding-top: 10px;">


                                            <h5 class="card-title" style="     padding-left: 7px;    margin-bottom: 0px;   font-size: 17px;"><a href="#">{{ $car->brand->name }} {{ $car->brand_model->name }} </a></h5>
                                           

                                            <a href="javascript:void(0)" data-id="{{ $car->id }}" class="add-to-favorite">
                                            <img id="add-to-favorite-{{ $car->id }}" @if($savedFavorite) class="added_favorites" @endif src="{{ asset('assets/images/svg/favourite.svg') }}" style="height: 20px; position: absolute; right: 0; margin-right: 30px; margin-top: -20px;">
                                            </a>

                                        </div>

										<div class="d-flex" style="margin-top: 5px;">
                                        <span style="color: #898B9E; font-size: 14px; font-weight: 300; padding-left: 23px; border-right: 1px solid #555; padding-right: 15px;">Or Similar</span>
										<span style="color: #898B9E; font-size: 14px; font-weight: 300;    padding-left: 23px;">{{ $car->category->translated_title }}</span>
										</div>

                                        <img src="{{ $car->get_poster }}"  class="car_card_image"  alt="Card image">
                                        <div class="card-body px-4 pb-0" style="   border-radius: 32px;">

                                        <!-- <div class="ratings-home-car">
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.1485 4.58597C12.0733 4.35354 11.8672 4.18846 11.6233 4.16648L8.31025 3.86566L7.00021 0.799381C6.90362 0.574662 6.68363 0.429199 6.4392 0.429199C6.19478 0.429199 5.97479 0.574662 5.8782 0.799906L4.56816 3.86566L1.25465 4.16648C1.01119 4.18899 0.805566 4.35354 0.729988 4.58597C0.65441 4.81839 0.724208 5.07332 0.908379 5.23403L3.4126 7.43024L2.67416 10.6831C2.62013 10.9222 2.71296 11.1695 2.9114 11.3129C3.01807 11.39 3.14287 11.4292 3.26871 11.4292C3.37722 11.4292 3.48485 11.3999 3.58144 11.3421L6.4392 9.63417L9.29592 11.3421C9.50496 11.4679 9.76847 11.4564 9.96648 11.3129C10.165 11.169 10.2578 10.9217 10.2037 10.6831L9.46529 7.43024L11.9696 5.23446C12.1537 5.07332 12.224 4.81883 12.1485 4.58597Z" fill="#FFC700"/>
</svg>
  <h5>4.96 <span>(672 reviews)</span></h5>
                                        </div> -->

                                        <!-- <p style="    font-size: 14px;">ჯიპი</p> -->


                                            <ul class="nav nav-divider text-center mb-2 mb-sm-3 car-parametres" style="padding-top: 10px;border-top: 1px solid #E4E6E8; border-bottom: 1px solid #E4E6E8; padding-bottom: 10px;">
                                                <li class="nav-item" style="width: 70%;">
                                                <div style="    margin-top: 12px;"> 
												<svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.00016 0C2.805 0 0.205566 2.59944 0.205566 5.79456C0.205566 9.75981 5.39116 15.581 5.61194 15.8269C5.81932 16.0579 6.18138 16.0575 6.38838 15.8269C6.60916 15.581 11.7948 9.75981 11.7948 5.79456C11.7947 2.59944 9.19529 0 6.00016 0ZM6.00016 8.70997C4.3926 8.70997 3.08478 7.40212 3.08478 5.79456C3.08478 4.187 4.39263 2.87919 6.00016 2.87919C7.60769 2.87919 8.9155 4.18703 8.9155 5.79459C8.9155 7.40216 7.60769 8.70997 6.00016 8.70997Z" fill="#D6D7D8"/>
</svg>

                                                {{ $car->address }}
												</div>
                                                </li>
                                                                                            
                                                
                                            </ul>

                                            <style>
.car-par-home li{
    width: 50%;
    text-align: left;
    margin-bottom: 10px;
}
                                            </style>

                                            
                                            <ul class="nav nav-divider text-center mb-2  car-parametres car-par-home" style=" padding-bottom: 10px;">
                                                <li class="nav-item">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.74901 15.272C5.52632 15.272 3.30363 15.2722 1.08072 15.2718C0.846957 15.2718 0.615514 15.2515 0.39929 15.1532C0.142907 15.037 0.00108255 14.852 0.00171664 14.5536C0.00615525 12.2286 0.00995979 9.90381 2.57329e-05 7.57882C-0.00229926 7.05718 0.153052 6.59641 0.414085 6.16015C0.632846 5.79471 0.922413 5.48654 1.21832 5.18387C2.37426 4.00193 3.7067 3.06136 5.16679 2.29475C6.06085 1.82553 6.98937 1.4381 7.94685 1.12021C9.01803 0.764485 10.1129 0.503241 11.2266 0.320412C11.9145 0.207756 12.6063 0.126804 13.3011 0.0726949C14.2038 0.00231107 15.1089 -0.0110048 16.0139 0.00759514C16.4255 0.0160496 16.7087 0.371984 16.6615 0.782451C16.6062 1.26457 16.5658 1.74838 16.5182 2.23134C16.4724 2.69697 16.4246 3.1624 16.3794 3.62803C16.3331 4.10423 16.2893 4.58043 16.2433 5.05663C16.1991 5.51529 16.1536 5.97394 16.1084 6.4326C16.0695 6.82806 16.03 7.22352 15.9911 7.61919C15.9438 8.09877 15.8966 8.57835 15.8497 9.05793C15.8049 9.51659 15.7609 9.97525 15.7159 10.4337C15.6696 10.9063 15.6221 11.3787 15.5756 11.8513C15.5373 12.2398 15.502 12.6287 15.4619 13.0172C15.4073 13.5454 15.376 14.0767 15.2925 14.6011C15.2224 15.0414 14.9258 15.2724 14.4807 15.2722C12.2369 15.2718 9.99284 15.272 7.74901 15.272ZM2.38061 7.50928C2.40618 7.54289 2.44296 7.5431 2.47508 7.54986C2.74415 7.60778 3.01343 7.64054 3.29137 7.62003C3.88382 7.57628 4.37418 7.33406 4.76774 6.894C4.82354 6.83165 4.88039 6.81136 4.95987 6.81136C7.1963 6.81263 9.43294 6.81242 11.6694 6.81221C12.7435 6.81221 13.8179 6.81094 14.892 6.81411C14.9956 6.81432 15.0305 6.786 15.036 6.67884C15.0491 6.42964 15.0795 6.1815 15.1019 5.93273C15.1423 5.48781 15.1822 5.0431 15.2217 4.59818C15.2532 4.24436 15.2843 3.89033 15.3145 3.53651C15.3543 3.07405 15.3944 2.61158 15.4316 2.14891C15.4585 1.8158 15.4777 1.48206 15.5069 1.14938C15.5219 0.979441 15.5177 0.967605 15.3469 0.96528C14.7517 0.956825 14.158 0.97775 13.564 1.02214C13.0128 1.06335 12.4641 1.12317 11.9179 1.20454C11.0926 1.32734 10.2756 1.4939 9.46845 1.70737C8.24254 2.0316 7.05595 2.46004 5.92136 3.02776C5.01461 3.48155 4.16091 4.01968 3.37063 4.6561C3.20619 4.78862 3.04746 4.92833 2.88914 5.06804C2.79382 5.15216 2.79678 5.15449 2.90056 5.2179C2.94558 5.24537 2.99081 5.27285 3.03308 5.30456C3.50442 5.65732 3.731 6.13754 3.77201 6.71646C3.7794 6.82129 3.7291 6.88851 3.65872 6.95234C3.411 7.17744 3.12185 7.32497 2.80101 7.41184C2.66362 7.44883 2.52306 7.47652 2.38061 7.50928ZM7.73252 14.1653C7.73252 14.1655 7.73252 14.1655 7.73252 14.1657C9.89476 14.1657 12.057 14.1657 14.2192 14.1653C14.2647 14.1653 14.3116 14.1657 14.3556 14.1556C14.4528 14.1334 14.5276 14.0478 14.5211 13.9757C14.513 13.8884 14.4384 13.8349 14.3192 13.8326C14.2452 13.8311 14.1713 13.8318 14.0973 13.8318C12.8788 13.8318 11.6605 13.8322 10.442 13.8322C7.38525 13.8322 4.32853 13.832 1.27201 13.832C1.22635 13.832 1.18006 13.8305 1.13483 13.8356C1.04669 13.8453 0.992586 13.8952 0.984342 13.9848C0.976099 14.0763 1.02683 14.1325 1.10989 14.1556C1.1528 14.1676 1.20057 14.1651 1.24601 14.1651C3.40804 14.1655 5.57028 14.1653 7.73252 14.1653ZM13.1007 8.19198C13.1007 8.19177 13.1007 8.19177 13.1007 8.19156C12.7771 8.19156 12.4533 8.1905 12.1297 8.19177C11.8864 8.19283 11.7099 8.35537 11.704 8.58089C11.6983 8.79606 11.8716 8.97994 12.1098 8.98227C12.7642 8.98861 13.4186 8.9884 14.0728 8.98206C14.319 8.97973 14.4864 8.80007 14.4801 8.57455C14.4739 8.35156 14.296 8.1924 14.0504 8.19198C13.734 8.19156 13.4173 8.19198 13.1007 8.19198Z" fill="#D6D7D8"/>
</svg>


                                                4
                                                </li>
                                                                                            
                                                <li class="nav-item">
                                                    
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_192_1933)">
<mask id="mask0_192_1933" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
<path d="M22 0H0V22H22V0Z" fill="white"/>
</mask>
<g mask="url(#mask0_192_1933)">
<path d="M14.333 10.5L13.0997 10.0666C12.9997 9.73328 12.8663 9.39995 12.6663 9.06662L13.233 7.89995C13.2997 7.76662 13.2663 7.59995 13.1663 7.53328L11.733 6.09995C11.633 5.99995 11.4663 5.96662 11.3663 6.03328L10.1997 6.59995C9.86634 6.43328 9.53301 6.29995 9.19967 6.16662L8.76634 4.93328C8.73301 4.79995 8.59967 4.69995 8.46634 4.69995H6.43301C6.29967 4.69995 6.16634 4.79995 6.09967 4.93328L5.66634 6.16662C5.33301 6.26662 4.99967 6.39995 4.66634 6.59995L3.53301 5.99995C3.39967 5.93328 3.26634 5.96662 3.13301 6.06662L1.69967 7.49995C1.59967 7.59995 1.56634 7.76662 1.63301 7.86662L2.19967 9.03328C2.03301 9.36662 1.89967 9.69995 1.79967 10.0333L0.566341 10.4666C0.433008 10.5333 0.333008 10.6666 0.333008 10.8V12.8333C0.333008 12.9666 0.433008 13.1 0.566341 13.1666L1.79967 13.5999C1.89967 13.9333 2.03301 14.2666 2.23301 14.5999L1.66634 15.7666C1.59967 15.8999 1.63301 16.0666 1.73301 16.1666L3.16634 17.5999C3.26634 17.6999 3.43301 17.7333 3.56634 17.6666L4.73301 17.0999C5.06634 17.2666 5.39967 17.4 5.73301 17.5333L6.16634 18.7666C6.19967 18.8999 6.33301 19 6.46634 19H8.49967C8.63301 19 8.76634 18.8999 8.79967 18.7666L9.23301 17.5333C9.56634 17.4333 9.89968 17.2999 10.233 17.0999L11.3997 17.6666C11.533 17.7333 11.6663 17.6999 11.7663 17.5999L13.1997 16.1666C13.2997 16.0666 13.333 15.8999 13.2663 15.7666L12.6663 14.5666C12.833 14.2333 12.9663 13.9 13.0997 13.5666L14.333 13.1333C14.4663 13.1 14.5663 12.9666 14.5663 12.8V10.7666C14.5663 10.6666 14.4663 10.5333 14.333 10.5ZM7.43301 14.6666C5.86634 14.6666 4.59967 13.4 4.59967 11.8333C4.59967 10.2666 5.86634 8.99995 7.43301 8.99995C8.99967 8.99995 10.2663 10.2666 10.2663 11.8333C10.2663 13.3666 8.99967 14.6666 7.43301 14.6666Z" fill="#D6D7D8"/>
<path d="M21.4332 3.86668L20.7665 3.63335C20.6999 3.46668 20.6332 3.30002 20.5665 3.16668L20.8665 2.53335C20.9332 2.40002 20.8999 2.26668 20.7999 2.13335L19.9999 1.30002C19.8999 1.20002 19.7332 1.16668 19.6332 1.23335L18.9999 1.53335C18.8332 1.46668 18.6999 1.40002 18.5332 1.33335L18.2999 0.666683C18.2665 0.53335 18.1332 0.43335 17.9999 0.43335H16.7999C16.6665 0.43335 16.5332 0.53335 16.4665 0.666683L16.2332 1.33335C16.0665 1.40002 15.8999 1.46668 15.7665 1.53335L15.1332 1.23335C14.9999 1.16668 14.8332 1.20002 14.7332 1.30002L13.8999 2.13335C13.7999 2.23335 13.7665 2.40002 13.8332 2.53335L14.1332 3.16668C14.0665 3.33335 13.9999 3.46668 13.9332 3.63335L13.2665 3.86668C13.1332 3.90002 13.0332 4.03335 13.0332 4.16668V5.36668C13.0332 5.50002 13.1332 5.63335 13.2665 5.66668L13.9332 5.90002C13.9999 6.06668 14.0665 6.23335 14.1332 6.40002L13.8332 7.00002C13.7665 7.13335 13.7999 7.30002 13.8999 7.40002L14.7332 8.23335C14.8332 8.33335 14.9999 8.36668 15.1332 8.30002L15.7665 8.00002C15.9332 8.06668 16.0999 8.13335 16.2332 8.20002L16.4665 8.86668C16.4999 9.00002 16.6332 9.10002 16.7999 9.10002H17.9999C18.1332 9.10002 18.2665 9.00002 18.2999 8.86668L18.5332 8.20002C18.6999 8.13335 18.8665 8.06668 18.9999 8.00002L19.6332 8.30002C19.7665 8.36668 19.8999 8.33335 20.0332 8.23335L20.8665 7.40002C20.9665 7.30002 20.9999 7.13335 20.9332 7.00002L20.6332 6.36668C20.6999 6.20002 20.7665 6.03335 20.8332 5.86668L21.4999 5.63335C21.6332 5.60002 21.7332 5.46668 21.7332 5.33335V4.13335C21.6665 4.03335 21.5665 3.90002 21.4332 3.86668ZM17.3665 6.43335C16.4332 6.43335 15.6999 5.70002 15.6999 4.76668C15.6999 3.86668 16.4332 3.10002 17.3665 3.10002C18.2665 3.10002 19.0332 3.83335 19.0332 4.76668C19.0332 5.70002 18.2665 6.43335 17.3665 6.43335Z" fill="#D6D7D8"/>
<path d="M21.4325 14.7333L20.4992 14.4C20.4325 14.1333 20.3325 13.9 20.1992 13.6666L20.6325 12.7666C20.6992 12.6333 20.6659 12.5 20.5659 12.4L19.4325 11.2666C19.3325 11.1666 19.1659 11.1333 19.0325 11.2L18.1659 11.6666C17.9325 11.5333 17.6659 11.4333 17.4325 11.3666L17.1325 10.4333C17.0992 10.3 16.9659 10.2 16.7992 10.2H15.1992C15.1325 10.2 15.0992 10.2 15.0325 10.2333C15.1325 10.4 15.1992 10.6 15.1992 10.8V12.8333C15.1992 13.2666 14.9325 13.6333 14.5325 13.7666L13.5992 14.1C13.5325 14.2666 13.4659 14.4333 13.3992 14.5666L13.8325 15.4333C14.0325 15.8333 13.9659 16.2666 13.6325 16.5999L12.1992 18.0333C12.0325 18.1999 11.8325 18.2999 11.6325 18.3333L11.3325 18.9333C11.2659 19.0666 11.2992 19.2 11.3992 19.3L12.5325 20.4333C12.6325 20.5333 12.7992 20.5666 12.9325 20.4999L13.8325 20.0666C14.0659 20.2 14.3325 20.2999 14.5659 20.3666L14.8992 21.3C14.9325 21.4333 15.0659 21.5333 15.2325 21.5333H16.8325C16.9659 21.5333 17.0992 21.4333 17.1659 21.3L17.4659 20.3666C17.7325 20.2666 17.9659 20.1666 18.1992 20.0666L19.0992 20.4999C19.2325 20.5666 19.3659 20.5333 19.4992 20.4333L20.6325 19.3C20.7325 19.2 20.7659 19.0333 20.6992 18.9333L20.2659 18.0333C20.3992 17.7999 20.4992 17.5333 20.5659 17.3L21.4992 16.9666C21.6325 16.9333 21.7325 16.8 21.7325 16.6333V15.0333C21.6659 14.9 21.5659 14.8 21.4325 14.7333ZM16.3325 18.0999C15.0992 18.0999 14.0992 17.0999 14.0992 15.8666C14.0992 14.6333 15.0992 13.6333 16.3325 13.6333C17.5659 13.6333 18.5659 14.6333 18.5659 15.8666C18.5659 17.0999 17.5659 18.0999 16.3325 18.0999Z" fill="#D6D7D8"/>
</g>
</g>
<defs>
<clipPath id="clip0_192_1933">
<rect width="22" height="22" fill="white"/>
</clipPath>
</defs>
</svg>


{{ $car->transmission_title }}
</li>


<li class="nav-item">
                                                    
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_192_1944)">
<mask id="mask0_192_1944" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
<path d="M16 0H0V16H16V0Z" fill="white"/>
</mask>
<g mask="url(#mask0_192_1944)">
<path d="M10 0.5H2C1.4485 0.5 1 0.9485 1 1.5V14.5C1 15.0515 1.4485 15.5 2 15.5H10C10.5515 15.5 11 15.0515 11 14.5V1.5C11 0.9485 10.5515 0.5 10 0.5ZM9 5.5C9 6.0515 8.5515 6.5 8 6.5H4C3.4485 6.5 3 6.0515 3 5.5V3.5C3 2.9485 3.4485 2.5 4 2.5H8C8.5515 2.5 9 2.9485 9 3.5V5.5Z" fill="#D6D7D8"/>
<path d="M12.5 6.5H10.5C10.224 6.5 10 6.276 10 6C10 5.724 10.224 5.5 10.5 5.5H12.5C12.776 5.5 13 5.724 13 6C13 6.276 12.776 6.5 12.5 6.5Z" fill="#D6D7D8"/>
<path d="M12.5 14.5C12.224 14.5 12 14.276 12 14V6C12 5.724 12.224 5.5 12.5 5.5C12.776 5.5 13 5.724 13 6V14C13 14.276 12.776 14.5 12.5 14.5Z" fill="#D6D7D8"/>
<path d="M14.5 14.5H12.5C12.224 14.5 12 14.276 12 14C12 13.724 12.224 13.5 12.5 13.5H14.5C14.776 13.5 15 13.724 15 14C15 14.276 14.776 14.5 14.5 14.5Z" fill="#D6D7D8"/>
<path d="M14.9616 2.80888C14.9361 2.74788 14.8996 2.69238 14.8536 2.64638L12.8536 0.646381C12.6581 0.450881 12.3421 0.450881 12.1466 0.646381C11.9511 0.841881 11.9511 1.15788 12.1466 1.35338L12.4936 1.70038C12.1831 2.06138 12.0001 2.51838 12.0001 2.99988C12.0001 4.10288 12.8971 4.99988 14.0001 4.99988V13.9999C14.0001 14.2759 14.2241 14.4999 14.5001 14.4999C14.7761 14.4999 15.0001 14.2759 15.0001 13.9999V2.99988C15.0001 2.93488 14.9866 2.86988 14.9616 2.80888Z" fill="#D6D7D8"/>
</g>
</g>
<defs>
<clipPath id="clip0_192_1944">
<rect width="16" height="16" fill="white"/>
</clipPath>
</defs>
</svg>


    
    
{{ $car->fuel_type }}
    </li>

    
<li class="nav-item">
                                                    
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.3775 17.854C20.0945 17.3708 19.6428 17.0093 19.1094 16.8389L19.0445 16.8194C18.9666 16.7945 18.8861 16.7782 18.8045 16.7708C18.3881 16.8738 17.9962 17.0584 17.6516 17.3139C17.307 17.5695 17.0165 17.8908 16.797 18.2594L16.4856 22.7026C16.437 22.7026 16.4597 22.7026 16.4856 22.7026L16.4597 23.3513H16.7062C19.9072 23.3513 20.5072 20.6399 20.5591 20.3643C20.8251 19.3556 20.757 18.5091 20.3775 17.854Z" fill="#D6D7D8"/>
<path d="M7.51423 22.7027L7.18991 18.2692C6.91423 18.0163 6.30126 16.8422 5.18234 16.7773C5.10115 16.787 5.02088 16.8033 4.94234 16.826H4.89693C4.3516 16.9916 3.8885 17.3563 3.59964 17.8476C3.21369 18.4963 3.15207 19.3492 3.41801 20.3579C3.46991 20.6303 4.06666 23.3449 7.27099 23.3449H7.51747L7.49153 22.6963C7.54018 22.7028 7.55964 22.7027 7.51423 22.7027Z" fill="#D6D7D8"/>
<path d="M9.5159 5.46169H10.1646V6.51899H9.06185V11.3255H14.9418V6.51899H13.8391V5.46169H14.4878C14.6523 5.46174 14.8149 5.42715 14.9651 5.36016C15.1153 5.29317 15.2497 5.19529 15.3595 5.0729C15.4693 4.95051 15.5522 4.80636 15.6026 4.64982C15.653 4.49328 15.6699 4.32788 15.6521 4.16439L15.3732 1.70277C15.3449 1.41262 15.209 1.14358 14.9924 0.948523C14.7757 0.75347 14.4939 0.646525 14.2024 0.648715H9.79807C9.50761 0.647259 9.22705 0.754117 9.01115 0.948421C8.79526 1.14273 8.65954 1.41053 8.6305 1.69953L8.35158 4.16763C8.33381 4.33113 8.35069 4.49653 8.40111 4.65306C8.45152 4.8096 8.53435 4.95376 8.6442 5.07615C8.75404 5.19854 8.88844 5.29641 9.03863 5.3634C9.18883 5.43039 9.35145 5.46498 9.5159 5.46493V5.46169ZM13.1905 6.51899H10.81V5.46169H13.1905V6.51899Z" fill="#D6D7D8"/>
<path d="M18.665 16.1384L18.7623 16.1157H18.8596H18.9277C18.6683 14.5265 18.331 11.9449 18.4834 9.8984C18.5552 9.48727 18.5431 9.06587 18.4478 8.65955C18.3524 8.25323 18.1759 7.87039 17.9288 7.53407C17.4261 6.91461 16.6315 6.5611 15.5904 6.51245V17.7957H8.40988V6.53191C7.36231 6.59029 6.5742 6.93407 6.0715 7.55353C5.82381 7.88961 5.64671 8.27233 5.55084 8.67866C5.45497 9.08499 5.44232 9.50651 5.51366 9.91786C5.66609 11.9643 5.3288 14.546 5.06934 16.1352C5.08443 16.1367 5.09964 16.1367 5.11474 16.1352H5.17312H5.2315C6.40231 16.2033 7.10934 17.1081 7.50177 17.6076C7.54907 17.6751 7.59995 17.7401 7.6542 17.8022L7.82609 17.9708L7.86177 18.2303V18.4573L8.20555 23.3222H8.18609V23.3514H15.8077L15.8596 22.0541H15.892L16.1742 18.0584L16.2585 17.9222C16.5202 17.4792 16.868 17.0932 17.2813 16.7868C17.6946 16.4805 18.1651 16.26 18.665 16.1384Z" fill="#D6D7D8"/>
<path d="M9.05859 11.9741H14.9418V17.1471H9.05859V11.9741Z" fill="#D6D7D8"/>
</svg>

                                                    
                                                    
                                                        
                                                        
{{ $car->number_of_seats }} @lang('seats')
                                                        </li>

                                            </ul>

 <!-- -->
 <div class="card-footer pt-0" style="padding: 0px; margin-bottom: 15px;">

 {{-- 
<div class="d-sm-flex justify-content-sm-between align-items-center">

    <div class="d-flex align-items-center">
    @php
$carPrice = $car->price;
if(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) >= 10){
    $carPrice = $car->price_10;
}elseif(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) >= 5){
    $carPrice = $car->price_5_9;
}elseif(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) == 1){
    $carPrice = $car->price_1;
}

@endphp
        <h5 class="fw-normal text-success mb-0 me-1" style="    color: #232538!important;font-weight: bold!important;">   {{ $carPrice }}    $ {{ ($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100) }}</h5>
        <span class="mb-0 me-2" style="text-transform: capitalize; font-size: 13px; padding-left: 5px;">/ @lang('dayes')</span>
    </div>

    <div class="mt-2 mt-sm-0 z-index-2">
    <a href="javascript:void(0)" class="btn btn-sm btn-primary-soft mb-0 w-100 car-detail" data-id="{{ $car->id }}" data-diff-days="{{ $diffDays }}"
                                           style="background: #78BC61; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">@lang('books_it')<i
                                                class="bi bi-arrow-right ms-2"></i></a>
    </div>
</div>

--}}

<div class="d-sm-flex justify-content-sm-between align-items-center">

    <div class="d-flex justify-content-between" data-bs-toggle="tooltip" data-bs-html="true" 
        
        title="" style="cursor:pointer;    padding-top: 2px;">
        
        @php
$carPrice = $car->price;
if(Carbon\Carbon::parse($date[0])->diffInDays($date[1]) >= 10){
    $carPrice = $car->price_10;
}elseif(Carbon\Carbon::parse($date[0])->diffInDays($date[1]) >= 5){
    $carPrice = $car->price_5_9;
}elseif(Carbon\Carbon::parse($date[0])->diffInDays($date[1]) == 1){
    $carPrice = $car->price_1;
}

@endphp
        
        <h5 class="fw-normal text-success mb-0 me-1" 
        
        style="    color: #232538!important;font-weight: bold!important;">$ {{ ($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100) }}</h5>
        <span class="mb-0 me-2" style="text-transform: capitalize; font-size: 13px; padding-left: 5px;    padding-top: 5px;">/ {{ $diffDays }} @if($diffDays == '1') @lang('days_diferent') @else @lang('dayes') @endif</span>

        <div class="mt-sm-0 z-index-2">

    </div>
    </div>

    
</div>
<a href="javascript:void(0)"  class="btn btn-sm btn-primary-soft mb-0 w-100 car-detail" data-id="{{ $car->id }}" data-diff-days="{{ $diffDays }}" style="margin-top:10px;background: #20B486; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">@lang('books_it')<i class="bi bi-arrow-right ms-2"></i></a>

</div>


                                        <!-- ... -->
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
                                        <button type="button" class="btn-close cl-but" data-bs-dismiss="modal" aria-label="Close" 
                                         
                                        >
                                    
                                    
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#fff"/> </g>

</svg>
                                    </button>
                                        <!--<div id="mapsite"></div>-->
                                        <div class="htmlDisplay"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                    <style>
              
                    </style>




                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section style="margin-top:-130px;">

<div class="container">
@include('website.particials.services_block')
</div>

</section>
        @include('website.particials.trips')
      


      

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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    
    $(document.body).on('click', '.car-detail', function(){
            $('#car_detail').modal('show'); // show bootstrap modal when complete loaded
            $(".htmlDisplay").html('<h3 align=center style="color:#6ecead"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Waiting...</h3>');
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
                    'city_to': '{{ \request()->location_to }}',
                    'date_from' : '{{ $date[0] }}',
                    'date_to' : '{{ $date[1] }}',
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
            if(document.getElementById('msform')){
                var form = document.getElementById('msform').querySelectorAll("[required]")
                for(var i=0; i < form.length; i++){
                    form[i].classList.remove("required-add-field");
                    if(form[i].value == '' && form[i].hasAttribute('required')){
                        form[i].classList.add("required-add-field");
                        // alert(form[i]+'There are some required fields!');
                        return false;
                    }else{
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
                                'date_from': '{{ $date[0] }}',
                                'date_to': '{{ $date[1] }}',
                                'location_from': '{{ \request()->location_from }}',
                                'location_to': '{{ \request()->location_to }}',
                                'additional_services' : checkedValues,
                                'address': $('#address').val(),
                                'name': $('#name').val(),
                                'surname': $('#surname').val(),
                                'tel': $('#tel').val(),
                                'country': $('#country').val(),
                                'email': $('#email').val(),
                                'wishes': $('#wishes').val(),
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
                                            let route = "{{ route('tbc_pay',[':id',':total']) }}"
                                            route = route.replace(':id', response.id);
                                            route = route.replace(':total', response.price);
                                            window.location.href = route;
                                        }, 3000);
                                    }else{
                                        window.setTimeout(function(){
                                            let route = "{{ route('tbc_pay',[':id',':total']) }}"
                                            route = route.replace(':id', response.id);
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
                    }
                    return false;
                }
            }else{
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
                        'date_from': '{{ $date[0] }}',
                        'date_to': '{{ $date[1] }}',
                        'location_from': '{{ \request()->location_from }}',
                        'location_to': '{{ \request()->location_to }}',
                        'additional_services' : checkedValues,
                        'address': $('#address').val(),
                        'name': $('#name').val(),
                        'surname': $('#surname').val(),
                        'tel': $('#tel').val(),
                        'country': $('#country').val(),
                        'email': $('#email').val(),
                        'wishes': $('#wishes').val(),
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
                                    let route = "{{ route('tbc_pay',[':id',':total']) }}"
                                    route = route.replace(':id', response.id);
                                    route = route.replace(':total', response.price);
                                    window.location.href = route;
                                },1000);
                            }else{
                                window.setTimeout(function(){
                                    let route = "{{ route('tbc_pay',[':id',':total']) }}"
                                    route = route.replace(':id', response.id);
                                    route = route.replace(':total', response.price);
                                    
                                    window.location.href = route;
                                },1000);
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
            }
            
        })
    </script>
<script>
        $(document.body).on('click', '.add-to-favorite', function () {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('user.add-to-favorite') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'car_id': id,
                },
                success: function (response) {
                    if (response.status == 0) {
                        notify('success', response.message);
                        $(`#add-to-favorite-${id}`).addClass('added_favorites')
                        $(`#add-to-favvorite-${id}`).addClass('added_favorites')
                    }else if(response.status == 1){
                        notify('success', response.message);
                        $(`#add-to-favorite-${id}`).removeClass('added_favorites')
                        $(`#add-to-favvorite-${id}`).removeClass('added_favorites')
                    }
                    else {
                        $('.htmlDisplay').html('<h3 align=center class=text-danger><i class="fa fa-spin fa-spinner"></i> პროდუქტზე ინფორმაცია ვერ მოიძებნა!</h3>');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    if (xhr.status == 401) {
                        Swal.fire({
                            title: 'შეცდომა!',
                            text: "რჩეულებში დასამატებლად გთხოვთ გაიაროთ ავტორიზაცია!",
                            icon: 'error',
                            showCancelButton: false
                        }).then((result) => {
                            if (result.value) {
                                location.href = "{{ route('login') }}"
                            }
                        })
                    }
                }
            })
        })
        </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
   
$( function() {
	$( ".datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
function sortChange() {
            let sortBy = '';
            let deposit = '';
            if($('.sortby').val() != ''){
                sortBy = $('.sortby').val();
            }else{
                sortBy = $('.sortby1').val();
            }
            if($('.deposit').val() != ''){
                deposit = $('.deposit').val();
            }else{
                deposit = $('.deposit1').val();
            }
            console.log(sortBy);
            let queryString = window.location.search;  // get url parameters
            let params = new URLSearchParams(queryString);  // create url search params object
            params.delete('sort_by');
            params.delete('deposit');
            params.append('sort_by', sortBy);
            params.append('deposit', deposit);
            document.location.href = "?" + params.toString(); // refresh the page with new url
        }

    // function sortChange() {
    //     let queryString = window.location.search;  // get url parameters
    //     let params = new URLSearchParams(queryString);  // create url search params object
    //     params.delete('sort_by');
    //     params.delete('deposit');
    //     console.log(document.getElementById("sortby").value)
    //     params.append('sort_by', document.getElementById("sortby").value);
    //     params.append('deposit', document.getElementById("deposit").value);
    //     // document.location.href = "?" + params.toString(); // refresh the page with new url
    // }

$(function() {
//   $('input[name="date_from"]').daterangepicker({
//     timePicker: true,
//     timePicker24Hour: true,
//     startDate: moment().startOf('hour'),
//     endDate: moment().startOf('hour').add(48, 'hours'), // Default to a 2-day range
//     minDate: moment().startOf('day'), // Minimum date selectable is today
//     locale: {
//       format: 'Y-MM-DD HH:mm'
//     }
//   });

//   $('input[name="date_from"]').on('apply.daterangepicker', function(ev, picker) {
//     var startDate = picker.startDate;
//     var endDate = picker.endDate;
    
//     // if (endDate.diff(startDate, 'days') < 2) {
//     //   Swal.fire('Error','Please select a range of at least 2 days.','warning');
//     //   picker.setStartDate(startDate);
//     //   picker.setEndDate(startDate.clone().add(2, 'days'));
//     // }
//   });


$(document).ready(function() {
    // Initialize the date range picker
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

    // Get the date_from value from the hidden input
    var dateFrom = $('#date_from').val();

    if(dateFrom) {
        var dates = dateFrom.split(' - ');
        var startDate = moment(dates[0], 'YYYY-MM-DD HH:mm', true);
        var endDate = moment(dates[1], 'YYYY-MM-DD HH:mm', true);

        // Check if the startDate and endDate are valid
        if (startDate.isValid() && endDate.isValid()) {
            // Set the date range picker value
            $('input[name="date_from"]').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            startDate: startDate,
            endDate: endDate,
            minDate: moment().startOf('day'), // Minimum date selectable is today
            locale: {
                format: 'YYYY-MM-DD HH:mm'
            }
            });
        } else {
            console.error('Invalid date range:', dateRange);
        }
    }
  });
  
});

$('input[name="date_from"]').val('{{ \request()->date_from }}')
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk" loading=async></script>

    <script async defer>
        // initMap();

        
    </script>
@endpush
