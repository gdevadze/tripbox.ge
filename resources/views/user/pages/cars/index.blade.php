@extends('user.layouts.app')

@section('content')
    <main>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">

      
    @include('user.general.header')



        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">



<!-- 
                <div class="row g-4">

                    <img src="{{ asset('assets/images/trip-box-image.png') }}">

                </div>
 -->

                <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">@lang('my_cars')</h4>








                <div class="row">


                    <div class="col-md-4">
@php
  $totalPrice = 0;
  @endphp
                        <p>@lang('order_km_away')</p>
                        <h5>150 @lang('km_meters')</h5>
                    </div>
                    <div class="col-md-4">

                        <p>@lang('totalunia_carss')</p>
                        <h5>{{ $cars->count() }} </h5>
                    </div>
                    <div class="col-md-4">

                        <p>@lang('earned_money')</p>
                        <h5>{{ $totalPrice }}$</h5>
                    </div>



                </div>

                <hr />
                <div class="d-flex  p-2 p-xl-0 mt-xl-4 mt-5">
                    <a href="{{ route('user.cars.create') }}" class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#20B486; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">@lang('cars_adss')</a>
{{--                    <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #20B486; color: #20B486; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">Будущие </button>--}}
                </div>


<style>

.table tr {
    padding-left:15px!important;padding-right:15px!important;
}
.tabl-icons a{
margin-right: 15px;
}

@media only screen and (max-width: 600px) {

.dt-layout-row {
  display: flex!important;
}
}
td img {
    object-fit: contain;
}
</style>

<div class="table-responsive">
                <table id="myTable" class="table  shadow" style="border-radius: 10px;margin-top:50px;padding-left:15px;padding-right:15px;padding-bottom:20px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">@lang('carss')</th>
      <th scope="col">@lang('types')</th>
      <th scope="col">@lang('moodels')</th>
      <th scope="col">@lang('years')</th>
      <th scope="col">@lang('engine')</th>
      <th scope="col">@lang('provaiders')</th>
      <th scope="col">@lang('pricebi')</th>
      <th scope="col">@lang('actions')</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cars as $car)
  @php
  $totalPrice = $car->orders->sum('price');
  @endphp
    <tr @if($car->is_paused == 1) bgcolor= "red" @endif>
      <th scope="row" style="padding-left:25px!important;">{{ $car->id }}</th>
      <td><img src="{{ $car->get_poster }}" style="height:50px;" alt="Card image {{ $car->id }}"><div style="margin-top:10px;    font-weight: bold;
    color: #78bc60;
    font-size: 11px;">
{{ strtoupper($car->vehicle_number) }}
</div>
   
    </td>
      <td>{{ $car->category->title }}</td>
      <td>{{ $car->brand->name }} {{ $car->brand_model->name }}
<br />



      </td>
      <td>{{ $car->year }}</td>
      <td>{{ $car->engine }}</td>
      <td>{{ $car->user->full_name }}</td>
      <td>@if($car->price_1) 1 @lang('dayes') - {{ $car->price_1 }} $<br> @endif 2/4 @lang('dayes') - {{ $car->price }} $<br>5/9 @lang('dayes') - {{ $car->price_5_9 }} $<br>10+ @lang('dayes') - {{ $car->price_10 }} $</td>
      <td> <div class="tabl-icons" style="display:flex;">
<a href="{{ route('user.cars.edit',$car->id) }}"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.7855 9.00032C14.4305 9.00032 14.1426 9.28813 14.1426 9.64318V16.0716C14.1426 16.4267 13.8548 16.7145 13.4998 16.7145H1.92855C1.5735 16.7145 1.28568 16.4267 1.28568 16.0716V3.21468C1.28568 2.85963 1.5735 2.57182 1.92855 2.57182H9.64273C9.99778 2.57182 10.2856 2.284 10.2856 1.92896C10.2856 1.57391 9.99778 1.28613 9.64273 1.28613H1.92855C0.863439 1.28613 0 2.14957 0 3.21468V16.0716C0 17.1367 0.863439 18.0002 1.92855 18.0002H13.4998C14.5649 18.0002 15.4284 17.1367 15.4284 16.0716V9.64314C15.4284 9.28813 15.1406 9.00032 14.7855 9.00032Z" fill="black"/>
<path d="M17.2794 0.72088C17.0509 0.492301 16.7795 0.310989 16.4809 0.1873C16.1823 0.0636113 15.8622 -3.05302e-05 15.539 1.03201e-05C15.2156 -0.000929601 14.8953 0.0623435 14.5966 0.18616C14.2978 0.309976 14.0267 0.491871 13.7988 0.721294L5.33115 9.18821C5.26091 9.259 5.2079 9.345 5.17623 9.43956L3.89054 13.2967C3.77834 13.6335 3.96045 13.9975 4.29731 14.1097C4.36266 14.1315 4.4311 14.1426 4.49996 14.1427C4.56898 14.1425 4.63754 14.1315 4.7031 14.1099L8.56019 12.8242C8.65492 12.7926 8.74099 12.7393 8.81154 12.6686L17.2791 4.20104C18.2402 3.24008 18.2403 1.68195 17.2794 0.72088ZM16.3702 3.29266L8.01311 11.6497L5.51629 12.4835L6.34748 9.98984L14.7077 1.63283C15.1673 1.17413 15.9118 1.17488 16.3705 1.63449C16.5896 1.85405 16.7131 2.15129 16.7141 2.46147C16.7144 2.61586 16.6843 2.7688 16.6252 2.91146C16.5662 3.05412 16.4795 3.18368 16.3702 3.29266Z" fill="black"/>
</svg>
</a>


<a href="javascript:void(0)" onclick="pauseCar({{ $car->id }})">

@if($car->is_paused)


<svg width="18px" height="18px" viewBox="0 0 24 24" title="@lang('playess')"  fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M3 12L3 18.9671C3 21.2763 5.53435 22.736 7.59662 21.6145L10.7996 19.8727M3 8L3 5.0329C3 2.72368 5.53435 1.26402 7.59661 2.38548L20.4086 9.35258C22.5305 10.5065 22.5305 13.4935 20.4086 14.6474L14.0026 18.131" stroke="#000" stroke-width="1.5" stroke-linecap="round"/> </g>

</svg>

@else
<svg width="18" height="18" viewBox="0 0 18 18" title="@lang('paused')" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.95075 1.68727H4.9725C5.26875 1.68727 5.5245 1.68727 5.73525 1.70452C5.958 1.72252 6.17925 1.76302 6.3915 1.87102C6.7095 2.03302 6.9675 2.29102 7.1295 2.60902C7.2375 2.82127 7.278 3.04252 7.296 3.26527C7.31325 3.47527 7.31325 3.73177 7.31325 4.02802V13.9723C7.31325 14.2685 7.31325 14.5243 7.296 14.735C7.278 14.9578 7.2375 15.179 7.1295 15.3913C6.96767 15.7091 6.7093 15.9674 6.3915 16.1293C6.17925 16.2373 5.958 16.2778 5.73525 16.2958C5.52525 16.313 5.26875 16.313 4.9725 16.313H4.77825C4.482 16.313 4.22625 16.313 4.0155 16.2958C3.79275 16.2778 3.5715 16.2373 3.35925 16.1293C3.04156 15.9676 2.78321 15.7095 2.62125 15.392C2.51325 15.179 2.47275 14.957 2.45475 14.735C2.4375 14.525 2.4375 14.2685 2.4375 13.9723V4.02727C2.4375 3.73102 2.4375 3.47527 2.45475 3.26452C2.47275 3.04177 2.51325 2.82052 2.62125 2.60827C2.78308 2.29047 3.04145 2.03211 3.35925 1.87027C3.5715 1.76227 3.79275 1.72177 4.0155 1.70377C4.2255 1.68652 4.482 1.68652 4.77825 1.68652H4.80075L4.95075 1.68727ZM5.88075 2.87377C5.853 2.85877 5.79675 2.83852 5.64375 2.82577C5.41299 2.8129 5.18184 2.8084 4.95075 2.81227H4.80075C4.47675 2.81227 4.26675 2.81227 4.10775 2.82577C3.95475 2.83852 3.89775 2.85952 3.87075 2.87377C3.76482 2.92772 3.67869 3.01384 3.62475 3.11977C3.60975 3.14752 3.5895 3.20377 3.57675 3.35677C3.564 3.51577 3.56325 3.72577 3.56325 4.04977V13.9498C3.56325 14.2738 3.56325 14.4838 3.57675 14.6428C3.5895 14.7958 3.6105 14.8528 3.62475 14.8798C3.67869 14.9857 3.76482 15.0718 3.87075 15.1258C3.8985 15.1408 3.95475 15.161 4.10775 15.1738C4.26675 15.1865 4.47675 15.1873 4.80075 15.1873H4.95075C5.27475 15.1873 5.48475 15.1873 5.64375 15.1738C5.79675 15.161 5.85375 15.14 5.88075 15.1258C5.98657 15.072 6.07268 14.9862 6.12675 14.8805C6.14175 14.852 6.162 14.7958 6.17475 14.6428C6.1875 14.4838 6.18825 14.2738 6.18825 13.9498V4.04977C6.18825 3.72577 6.18825 3.51577 6.17475 3.35677C6.162 3.20377 6.141 3.14677 6.12675 3.11977C6.07281 3.01384 5.98668 2.92772 5.88075 2.87377ZM13.2008 1.68727H13.2225C13.5187 1.68727 13.7745 1.68727 13.9852 1.70452C14.208 1.72252 14.4292 1.76302 14.6415 1.87102C14.9595 2.03302 15.2175 2.29102 15.3795 2.60902C15.4875 2.82127 15.528 3.04252 15.546 3.26527C15.5632 3.47527 15.5632 3.73177 15.5632 4.02802V13.9723C15.5632 14.2685 15.5632 14.5243 15.546 14.735C15.528 14.9578 15.4875 15.179 15.3795 15.3913C15.2179 15.709 14.9598 15.9673 14.6422 16.1293C14.4292 16.2373 14.2072 16.2778 13.9852 16.2958C13.7752 16.313 13.5187 16.313 13.2225 16.313H13.029C12.7327 16.313 12.477 16.313 12.2662 16.2958C12.0435 16.2778 11.8222 16.2373 11.61 16.1293C11.2923 15.9676 11.034 15.7095 10.872 15.392C10.764 15.179 10.7235 14.957 10.7055 14.735C10.6883 14.525 10.6882 14.2685 10.6882 13.9723V4.02727C10.6882 3.73102 10.6883 3.47527 10.7055 3.26452C10.7235 3.04177 10.764 2.82052 10.872 2.60827C11.0338 2.29047 11.2922 2.03211 11.61 1.87027C11.8222 1.76227 12.0435 1.72177 12.2662 1.70377C12.4762 1.68652 12.7327 1.68652 13.029 1.68652H13.0507L13.2008 1.68727ZM14.1307 2.87377C14.103 2.85877 14.0468 2.83852 13.8937 2.82577C13.663 2.8129 13.4318 2.8084 13.2008 2.81227H13.0507C12.7267 2.81227 12.5167 2.81227 12.3577 2.82577C12.2047 2.83852 12.1477 2.85952 12.1207 2.87377C12.0148 2.92772 11.9287 3.01384 11.8748 3.11977C11.8597 3.14752 11.8395 3.20377 11.8267 3.35677C11.814 3.51577 11.8132 3.72577 11.8132 4.04977V13.9498C11.8132 14.2738 11.8132 14.4838 11.8267 14.6428C11.8395 14.7958 11.8605 14.8528 11.8748 14.8798C11.9287 14.9857 12.0148 15.0718 12.1207 15.1258C12.1485 15.1408 12.2047 15.161 12.3577 15.1738C12.5167 15.1865 12.7267 15.1873 13.0507 15.1873H13.2008C13.5247 15.1873 13.7347 15.1873 13.8937 15.1738C14.0468 15.161 14.1037 15.14 14.1307 15.1258C14.2366 15.072 14.3227 14.9862 14.3767 14.8805C14.3917 14.852 14.412 14.7958 14.4247 14.6428C14.4375 14.4838 14.4382 14.2738 14.4382 13.9498V4.04977C14.4382 3.72577 14.4382 3.51577 14.4247 3.35677C14.412 3.20377 14.391 3.14677 14.3767 3.11977C14.323 3.01395 14.2364 2.92785 14.1307 2.87377Z" fill="black"/>
</svg>
@endif

</a>


<a href="javascript"  data-bs-toggle="modal" data-bs-target="#prices"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6342 2.32007C10.3087 1.88329 9.82369 1.59287 9.28494 1.51209C8.74619 1.43131 8.19735 1.56672 7.758 1.88882L3.83175 4.76732C3.22006 4.91721 2.67633 5.26797 2.28758 5.76346C1.89883 6.25895 1.68753 6.87053 1.6875 7.50032V13.5003C1.6875 14.2462 1.98382 14.9616 2.51126 15.4891C3.03871 16.0165 3.75408 16.3128 4.5 16.3128H13.5C14.2459 16.3128 14.9613 16.0165 15.4887 15.4891C16.0162 14.9616 16.3125 14.2462 16.3125 13.5003V12.8598C16.7444 12.7372 17.1246 12.4771 17.3953 12.1189C17.666 11.7607 17.8125 11.3239 17.8125 10.8749C17.8125 10.4259 17.666 9.98921 17.3953 9.63099C17.1246 9.27278 16.7444 9.01265 16.3125 8.89007V7.50032C16.3126 6.97589 16.1661 6.46187 15.8895 6.01631C15.6129 5.57074 15.2173 5.21139 14.7472 4.97882L13.9823 3.06557C13.8663 2.77522 13.6858 2.51503 13.4544 2.30469C13.2231 2.09435 12.947 1.93936 12.6469 1.85144C12.3469 1.76351 12.0308 1.74495 11.7225 1.79716C11.4142 1.84938 11.1219 1.97099 10.8675 2.15282L10.6342 2.32007ZM5.8425 4.68782H7.32L9.71775 2.97482C9.56763 2.7825 9.3485 2.65622 9.10684 2.62276C8.86517 2.5893 8.61998 2.65128 8.42325 2.79557L5.8425 4.68782ZM11.5215 3.06857C11.6371 2.98602 11.7699 2.93082 11.91 2.90714C12.05 2.88346 12.1937 2.89191 12.33 2.93185C12.4663 2.9718 12.5917 3.0422 12.6968 3.13773C12.802 3.23327 12.884 3.35144 12.9368 3.48332L13.4183 4.68782H9.255L11.5215 3.06857ZM15.1875 12.9378H14.25C13.703 12.9378 13.1784 12.7205 12.7916 12.3337C12.4048 11.9469 12.1875 11.4223 12.1875 10.8753C12.1875 10.3283 12.4048 9.80371 12.7916 9.41691C13.1784 9.03012 13.703 8.81282 14.25 8.81282H15.1875V7.50032C15.1875 7.05277 15.0097 6.62354 14.6932 6.30708C14.3768 5.99061 13.9476 5.81282 13.5 5.81282H4.5C4.05245 5.81282 3.62323 5.99061 3.30676 6.30708C2.99029 6.62354 2.8125 7.05277 2.8125 7.50032V13.5003C2.8125 13.9479 2.99029 14.3771 3.30676 14.6936C3.62323 15.01 4.05245 15.1878 4.5 15.1878H13.5C13.9476 15.1878 14.3768 15.01 14.6932 14.6936C15.0097 14.3771 15.1875 13.9479 15.1875 13.5003V12.9378ZM14.25 9.93782C14.0014 9.93782 13.7629 10.0366 13.5871 10.2124C13.4113 10.3882 13.3125 10.6267 13.3125 10.8753C13.3125 11.124 13.4113 11.3624 13.5871 11.5382C13.7629 11.714 14.0014 11.8128 14.25 11.8128H15.75C15.9986 11.8128 16.2371 11.714 16.4129 11.5382C16.5887 11.3624 16.6875 11.124 16.6875 10.8753C16.6875 10.6267 16.5887 10.3882 16.4129 10.2124C16.2371 10.0366 15.9986 9.93782 15.75 9.93782H14.25Z" fill="black"/>
</svg>
</a>
<a href="javascript:0;" data-bs-toggle="modal" data-bs-target="#percantage"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.81429 7.73117C6.18949 7.77349 6.56936 7.74052 6.93166 7.63419C7.29395 7.52786 7.63139 7.3503 7.9242 7.11191C8.52134 6.62977 8.89732 5.94416 8.98136 5.17893C9.0654 4.41371 8.84424 3.66617 8.3621 3.06903C8.00461 2.6267 7.52408 2.3002 6.98118 2.13073C6.43827 1.96127 5.85734 1.95645 5.3117 2.11688C4.76606 2.27731 4.28018 2.59579 3.91539 3.03212C3.5506 3.46846 3.32326 4.00309 3.26206 4.56852C3.21983 4.94372 3.25285 5.32356 3.35918 5.68585C3.46551 6.04813 3.64302 6.38557 3.88132 6.67843C4.36788 7.27557 5.05349 7.65155 5.81429 7.73117ZM4.58462 4.71007C4.62885 4.2987 4.83232 3.93157 5.1508 3.6706C5.42947 3.44501 5.76564 3.33 6.1195 3.33C6.177 3.33 6.23008 3.33443 6.28758 3.33885C6.69895 3.38308 7.06608 3.58655 7.32705 3.90945C7.58803 4.23235 7.70303 4.63487 7.6588 5.04624C7.61457 5.4576 7.4111 5.82473 7.09262 6.08571C6.77414 6.34668 6.3672 6.46169 5.95584 6.41745C5.54447 6.37322 5.17734 6.16975 4.91637 5.84685C4.65982 5.52395 4.54039 5.12143 4.58462 4.71007ZM14.7449 10.9956C14.3874 10.5532 13.9069 10.2267 13.364 10.0573C12.8211 9.8878 12.2401 9.88297 11.6945 10.0434C11.1489 10.2038 10.663 10.5223 10.2982 10.9586C9.93339 11.395 9.70605 11.9296 9.64486 12.495C9.56081 13.2603 9.78198 14.0078 10.2641 14.6049C10.7463 15.2021 11.4319 15.5781 12.1971 15.6621C12.5723 15.7044 12.9522 15.6715 13.3145 15.5651C13.6768 15.4588 14.0142 15.2812 14.307 15.0429C15.5411 14.0432 15.7401 12.2296 14.7449 10.9956ZM13.4754 14.0034C13.1525 14.2644 12.75 14.3794 12.3386 14.3351C11.9273 14.2909 11.5601 14.0874 11.2992 13.7645C11.0382 13.4416 10.9232 13.0391 10.9674 12.6277C11.0116 12.2164 11.2151 11.8492 11.5336 11.5883C11.8211 11.3583 12.1617 11.2477 12.5023 11.2477C12.9535 11.2477 13.4046 11.4467 13.7099 11.8227C14.2451 12.4906 14.1389 13.4682 13.4754 14.0034ZM15.2049 3.80772C14.9749 3.5202 14.5591 3.47597 14.2716 3.70598L3.24879 12.5879C2.96127 12.8179 2.91704 13.2337 3.14705 13.5212C3.27975 13.6849 3.46995 13.7689 3.66458 13.7689C3.81055 13.7689 3.95651 13.7203 4.08037 13.623L15.1032 4.74545C15.3907 4.51102 15.4349 4.09523 15.2049 3.80772Z" fill="black"/>
</svg>
</a>
@if($car->gps_car_id)
<a href="javascript:void(0)" data-id="{{ $car->gps_car_id }}" class="my-car-location">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.99922 2.25H6.74922C5.28672 6.63 5.28672 11.37 6.74922 15.75H5.99922" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.25 2.25C12.7125 6.63 12.7125 11.37 11.25 15.75" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.25 12V11.25C6.63 12.7125 11.37 12.7125 15.75 11.25V12" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.25 6.74922C6.63 5.28672 11.37 5.28672 15.75 6.74922" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>
@endif
<a href=""><svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.6 1.19961C5.80435 1.19961 5.04129 1.51568 4.47868 2.07829C3.91607 2.6409 3.6 3.40396 3.6 4.19961C3.6 4.99526 3.91607 5.75832 4.47868 6.32093C5.04129 6.88354 5.80435 7.19961 6.6 7.19961C7.39565 7.19961 8.15871 6.88354 8.72132 6.32093C9.28393 5.75832 9.6 4.99526 9.6 4.19961C9.6 3.40396 9.28393 2.6409 8.72132 2.07829C8.15871 1.51568 7.39565 1.19961 6.6 1.19961ZM8.9976 7.64841C9.73195 7.13783 10.2841 6.40615 10.5737 5.55993C10.8633 4.71371 10.8752 3.79713 10.6077 2.94368C10.3402 2.09022 9.80716 1.34446 9.08631 0.814992C8.36546 0.285524 7.49441 0 6.6 0C5.70559 0 4.83454 0.285524 4.11369 0.814992C3.39284 1.34446 2.85984 2.09022 2.5923 2.94368C2.32476 3.79713 2.33666 4.71371 2.62626 5.55993C2.91587 6.40615 3.46805 7.13783 4.2024 7.64841C2.96416 8.13157 1.90058 8.9772 1.15078 10.0747C0.400993 11.1722 -9.12266e-05 12.4704 1.5564e-08 13.7996C1.5564e-08 13.9587 0.0632142 14.1114 0.175736 14.2239C0.288258 14.3364 0.44087 14.3996 0.6 14.3996C0.75913 14.3996 0.911742 14.3364 1.02426 14.2239C1.13679 14.1114 1.2 13.9587 1.2 13.7996C1.2 12.3674 1.76893 10.9939 2.78162 9.98123C3.79432 8.96854 5.16783 8.39961 6.6 8.39961C8.03217 8.39961 9.40568 8.96854 10.4184 9.98123C11.4311 10.9939 12 12.3674 12 13.7996C12 13.9587 12.0632 14.1114 12.1757 14.2239C12.2883 14.3364 12.4409 14.3996 12.6 14.3996C12.7591 14.3996 12.9117 14.3364 13.0243 14.2239C13.1368 14.1114 13.2 13.9587 13.2 13.7996C13.2001 12.4704 12.799 11.1722 12.0492 10.0747C11.2994 8.9772 10.2358 8.13157 8.9976 7.64841Z" fill="black"/>
</svg>
</a>

<a href="javascript:void(0)" onclick="deleteCar({{ $car->id }})">

<svg width="18px" height="18px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="20.48"/>

<g id="SVGRepo_iconCarrier">

<path d="M32 241.6c-11.2 0-20-8.8-20-20s8.8-20 20-20l940 1.6c11.2 0 20 8.8 20 20s-8.8 20-20 20L32 241.6zM186.4 282.4c0-11.2 8.8-20 20-20s20 8.8 20 20v688.8l585.6-6.4V289.6c0-11.2 8.8-20 20-20s20 8.8 20 20v716.8l-666.4 7.2V282.4z" fill=""/>

<path d="M682.4 867.2c-11.2 0-20-8.8-20-20V372c0-11.2 8.8-20 20-20s20 8.8 20 20v475.2c0.8 11.2-8.8 20-20 20zM367.2 867.2c-11.2 0-20-8.8-20-20V372c0-11.2 8.8-20 20-20s20 8.8 20 20v475.2c0.8 11.2-8.8 20-20 20zM524.8 867.2c-11.2 0-20-8.8-20-20V372c0-11.2 8.8-20 20-20s20 8.8 20 20v475.2c0.8 11.2-8.8 20-20 20zM655.2 213.6v-48.8c0-17.6-14.4-32-32-32H418.4c-18.4 0-32 14.4-32 32.8V208h-40v-42.4c0-40 32.8-72.8 72.8-72.8H624c40 0 72.8 32.8 72.8 72.8v48.8h-41.6z" fill=""/>

</g>

</svg></a>

<a href="{{ route('user.cars.show',$car->id) }}" class="btn btn-primary mb-0" style="font-size: 10px;">@lang('detailess')</a>
</div></td>
    </tr>

    @endforeach

    
  </tbody>
</table>

</div>

                








            </div>

        </div>


    </main>


    <!-- chgange prices -->
<div class="modal fade" id="prices" tabindex="-1" aria-labelledby="pricesLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body" style=" padding: 0px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>


                <div class="search-bar-for-modal" style="padding-top:30px;padding-bottom:30px;">
                    <!-- search bar -->


                    <h4 style="font-size: 25px;" class="mb-3">@lang('enter_pricess')</h4>

                    <form class="row">

                      



                        <div class="col-md-6 mt-2">
                            <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('prices_1_4')</p>
                            <input class="form-control" placeholder="შეიყვანეთ ფასი" style="border: 1px solid #48713A!important;border-radius: 20px;">
                        </div>

                        <div class="col-md-6  mt-2">
                            <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('prices_5_9')</p>
                            <input class="form-control" placeholder="შეიყვანეთ ფასი" style="border: 1px solid #48713A!important;border-radius: 20px;">
                        </div>
                        <div class="col-md-6  mt-2">
                            <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('price_10_plus')</p>
                            <input class="form-control" placeholder="შეიყვანეთ ფასი" style="border: 1px solid #48713A!important;border-radius: 20px;">
                        </div>

                       
                        <div class="col-md-6  mt-2">
                            <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('deposit_price') * <span style="    font-size: 13px;">@lang('wishinuebi')</span></p>
                            <input class="form-control" placeholder="შეიყვანეთ ფასი" style="border: 1px solid #48713A!important;border-radius: 20px;">
                        </div>
                   

                     
                        <div class="col-md-12 mt-4">
                            <a href="#" class="btn btn-sm btn-primary mb-0" style="background: #20B486; border: 0; padding-left: 20px; padding-right: 20px; border-radius: 30px; ">@lang('savedsss')</a>
                        </div>
                    </form>




                    <!-- ... serach bar -->
                </div>








            </div>

        </div>
    </div>
</div>

<!-- chgange prices ...-->

   <!-- percentage -->
   <div class="modal fade" id="percantage" tabindex="-1" aria-labelledby="percantageLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body" style=" padding: 0px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>


                <div class="search-bar-for-modal" style="padding-top:30px;padding-bottom:30px;">
                    <!-- search bar -->


                    <h4 style="font-size: 25px;" class="mb-3">@lang('enter_discounta')</h4>

                    <form class="row">

                      



                        <div class="col-md-12 mt-2">
                            <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('enter_percentage_number')</p>
                            <input class="form-control" placeholder="@lang('enter_percantage')" style="border: 1px solid #48713A!important;border-radius: 20px;">
                        </div>

                       

                   

                     
                        <div class="col-md-12 mt-4">
                            <a href="#" class="btn btn-sm btn-primary mb-0" style="background: #20B486; border: 0; padding-left: 20px; padding-right: 20px; border-radius: 30px; ">@lang('savedsss')</a>
                        </div>
                    </form>




                    <!-- ... serach bar -->
                </div>








            </div>

        </div>
    </div>
</div>

<!-- percentage ...-->

 <!-- location -->
 <div class="modal fade" id="location" tabindex="-1" aria-labelledby="locationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body" style=" padding: 0px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>


                <div class="htmlDisplay"></div>








            </div>

        </div>
    </div>
</div>

<!-- locationj ...-->

@endsection

@push('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk" loading=async></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    
    $(document.body).on('click', '.my-car-location', function(){
        console.log('sdgsd')
        $('#location').modal('show'); // show bootstrap modal when complete loaded
        $(".htmlDisplay").html('<h3 align=center style="color:#6ecead"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Waiting...</h3>');
        let id = $(this).data('id');
        let carId = $(this).data('diff-days');
        $.ajax({
            url: "{{ route('user.cars.my.location') }}",
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

    function pauseCar(id) {
        Swal.fire({
            title: 'ნამდვილად გსურთ ავტომობილის დაპაუზება?',
            text: "",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'დიახ!',
            cancelButtonText: 'არა!',
            preConfirm: function () {
                return new Promise(function (resolve) {
                    $('.swal2-confirm').html('<i class="fa fa-spinner fa-spin mr-1"></i>');
                    $.ajax({
                        url: "{{ route('user.cars.pause') }}",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'id': id
                        },
                    })
                        .done(function (response) {
                            if (response.status === 1) {
                                Swal.fire({
                                    title: 'წარმატებული!',
                                    text: response.msg,
                                    icon: 'success',
                                    showCancelButton: false
                                }).then((result) => {
                                    if (result.value) {
                                        location.reload()
                                    }
                                })
                            }else if(response.status == 2){
                                Swal.fire('წაშლა შეუძლებელია!', 'შეკვეთაზე თანხა უკვე გადახდილია!', 'error');
                            } 
                            else {
                                Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                            }
                        })
                        .fail(function () {
                            Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                        });
                });
            },
            allowOutsideClick: true
        });
    }

    function deleteCar(id) {
        Swal.fire({
            title: 'ნამდვილად გსურთ ავტომობილის წაშლა?',
            text: "",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'დიახ!',
            cancelButtonText: 'არა!',
            preConfirm: function () {
                return new Promise(function (resolve) {
                    $('.swal2-confirm').html('<i class="fa fa-spinner fa-spin mr-1"></i>');
                    $.ajax({
                        url: "{{ route('user.cars.delete') }}",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'id': id
                        },
                    })
                        .done(function (response) {
                            if (response.status === 1) {
                                Swal.fire({
                                    title: 'წარმატებული!',
                                    text: 'ავტომობილი წარმატებით წაიშალა!',
                                    icon: 'success',
                                    showCancelButton: false
                                }).then((result) => {
                                    if (result.value) {
                                        location.reload()
                                    }
                                })
                            }else if(response.status == 2){
                                Swal.fire('წაშლა შეუძლებელია!', 'შეკვეთაზე თანხა უკვე გადახდილია!', 'error');
                            } 
                            else {
                                Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                            }
                        })
                        .fail(function () {
                            Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                        });
                });
            },
            allowOutsideClick: true
        });
    }
</script>

    <script async defer>
        initMap();
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>

@endpush
