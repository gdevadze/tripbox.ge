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
<select onchange="sortChange()" class="deposit1" style="background-color:#fff;border: 1px solid #000000; border-radius: 10px; text-transform: uppercase; color: #1E234C; font-weight: bold; height: 42px; font-size: 12px; padding-top: 12px; padding-left: 10px; padding-right: 10px;">
                <option value="">@lang('Deposites_search')</option>
                <option value="yes">@lang('depo_yes')</option>
                <option value="no">@lang('depo_nows')</option>
            </select>




<select id="sortby" class="sortby1" onchange="sortChange()" style="width:25%;background:#fff;;border: 1px solid #000000; border-radius: 10px; text-transform: uppercase; color: #1E234C; font-weight: bold; height: 42px; font-size: 12px; padding-top: 12px; padding-left: 10px; padding-right: 10px;">
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

<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => $startDate.' - '.$endDate]) }}#search-block">
<div class="button_home">
@lang('all_cities')
</div>
</a>
<a href="{{ route('search',['location_from' => 'Tbilisi','location_to' => 'Tbilisi','date_from' => $startDate.' - '.$endDate,'city' => 'Batumi']) }}#search-block" >
<div class="button_home @if(\request()->city == 'Batumi') green_active @endif"  >
@lang('batumi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => 'Tbilisi','location_to' => 'Tbilisi','date_from' => $startDate.' - '.$endDate,'city' => 'Tbilisi']) }}#search-block" >
<div class="button_home @if(\request()->city == 'Tbilisi') green_active @endif">
@lang('tbilisi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => 'Tbilisi','location_to' => 'Tbilisi','date_from' => $startDate.' - '.$endDate,'city' => 'Kutaisi']) }}#search-block" >
<div class="button_home @if(\request()->city == 'Kutaisi') green_active @endif">
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




<a href="{{ route('search',['location_from' => \request()->location_from,'location_to' => \request()->location_to,'date_from' => $startDate.' - '.$endDate]) }}#search-block">
<div class="button_home">
@lang('all_cities')
</div>
</a>
<a href="{{ route('search',['location_from' => 'Tbilisi','location_to' => 'Tbilisi','date_from' => $startDate.' - '.$endDate,'city' => 'Batumi']) }}#search-block" >
<div class="button_home @if(\request()->city == 'Batumi') green_active @endif" >
@lang('batumi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => 'Tbilisi','location_to' => 'Tbilisi','date_from' => $startDate.' - '.$endDate,'city' => 'Tbilisi']) }}#search-block">
<div class="button_home @if(\request()->city == 'Tbilisi') green_active @endif">
@lang('tbilisi_city')
</div>
</a>
<a href="{{ route('search',['location_from' => 'Tbilisi','location_to' => 'Tbilisi','date_from' => $startDate.' - '.$endDate,'city' => 'Kutaisi']) }}#search-block" >
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

                    


            <select onchange="sortChange()" class="deposit" style="padding: 10px 20px;border: 1px solid #ebebeb;border-radius: 10px;margin-top: -3px;">
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

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="#1e234c"/> </g>

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