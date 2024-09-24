@extends('user.layouts.app')

@section('content')
    <main>

<style>
        /* Set the size of the map container */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
        
    @include('user.general.header')


        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4" style="margin-top: 0px !important;">

            <!-- -->
<!-- steps -->
<style>
.wizard-content .wizard>.steps>ul>li:after,.wizard-content .wizard>.steps>ul>li:before{content:'';z-index:9;display:block;position:absolute}.wizard-content .wizard{width:100%;overflow:hidden}.wizard-content .wizard .content{margin-left:0!important}.wizard-content .wizard>.steps{position:relative;display:block;width:100%}.wizard-content .wizard>.content>.title,.wizard-content .wizard>.steps .current-info{position:absolute;left:-99999px}.wizard-content .wizard>.steps>ul{display:table;width:100%;table-layout:fixed;margin:0;padding:0;list-style:none}.wizard-content .wizard>.steps>ul>li{display:table-cell;width:auto;vertical-align:top;text-align:center;position:relative}.wizard-content .wizard>.steps>ul>li a{position:relative;padding-top:52px;margin-top:20px;margin-bottom:20px;display:block}.wizard-content .wizard>.steps>ul>li:before{left:0}.wizard-content .wizard>.steps>ul>li:after{right:0}.wizard-content .wizard>.steps>ul>li:first-child:before,.wizard-content .wizard>.steps>ul>li:last-child:after{content:none}.wizard-content .wizard>.steps>ul>li.current>a{color:#2f3d4a;cursor:default}.wizard-content .wizard>.steps>ul>li.current .step{border-color:#20B486;background-color:#fff;color:#20B486}.wizard-content .wizard>.steps>ul>li.disabled a,.wizard-content .wizard>.steps>ul>li.disabled a:focus,.wizard-content .wizard>.steps>ul>li.disabled a:hover{color:#999;cursor:default}.wizard-content .wizard>.actions>ul>li.disabled>a,.wizard-content .wizard>.actions>ul>li.disabled>a:focus,.wizard-content .wizard>.actions>ul>li.disabled>a:hover,.wizard-content .wizard>.steps>ul>li.done a,.wizard-content .wizard>.steps>ul>li.done a:focus,.wizard-content .wizard>.steps>ul>li.done a:hover{color:#999}.wizard-content .wizard>.steps>ul>li.done .step{background-color:#20B486;border-color:#20B486;color:#fff}.wizard-content .wizard>.steps>ul>li.error .step{border-color:#f62d51;color:#f62d51}.wizard-content .wizard>.steps .step{background-color:#fff;display:inline-block;position:absolute;top:0;left:50%;margin-left:-24px;z-index:10;text-align:center}.wizard-content .wizard>.content{overflow:hidden;position:relative;width:auto;padding:0;margin:0}.wizard-content .wizard>.content>.body{padding:0 20px}.wizard-content .wizard>.content>iframe{border:0;width:100%;height:100%}.wizard-content .wizard>.actions{position:relative;display:block;text-align:right;padding:0 20px 20px}.wizard-content .wizard>.actions>ul{float:right;list-style:none;padding:0;margin:0}.wizard-content .wizard>.actions>ul:after{content:'';display:table;clear:both}.wizard-content .wizard>.actions>ul>li{float:left}.wizard-content .wizard>.actions>ul>li+li{margin-left:10px}.wizard-content .wizard>.actions>ul>li>a{background:#20B486;color:#fff;display:block;padding:7px 12px;border-radius:4px;border:1px solid transparent}.wizard-content .wizard>.actions>ul>li>a:focus,.wizard-content .wizard>.actions>ul>li>a:hover{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.05) inset;box-shadow:0 0 0 100px rgba(0,0,0,.05) inset}.wizard-content .wizard>.actions>ul>li>a:active{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.1) inset;box-shadow:0 0 0 100px rgba(0,0,0,.1) inset}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]{background-color:#fff;color:#54667a;border:1px solid #d9d9d9}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:focus,.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:hover{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.02) inset;box-shadow:0 0 0 100px rgba(0,0,0,.02) inset}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:active{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.04) inset;box-shadow:0 0 0 100px rgba(0,0,0,.04) inset}.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"],.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:focus,.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:hover{-webkit-box-shadow:none;box-shadow:none}.wizard-content .wizard.wizard-circle>.steps>ul>li:after,.wizard-content .wizard.wizard-circle>.steps>ul>li:before{top:45px;width:50%;height:3px;background-color:#20B486}.wizard-content .wizard.wizard-circle>.steps>ul>li.current:after,.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before,.wizard-content .wizard.wizard-notification>.steps>ul>li.current:after,.wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:after,.wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:before{background-color:#f3f3f3}.wizard-content .wizard.wizard-circle>.steps .step{width:50px;height:50px;line-height:45px;border:3px solid #f3f3f3;font-size:1.3rem;border-radius:50%}.wizard-content .wizard.wizard-notification>.steps>ul>li:after,.wizard-content .wizard.wizard-notification>.steps>ul>li:before{top:39px;width:50%;height:2px;background-color:#20B486}.wizard-content .wizard.wizard-notification>.steps>ul>li.current .step{border:2px solid #20B486;color:#20B486;line-height:36px}.wizard-content .wizard.wizard-notification>.steps>ul>li.current .step:after,.wizard-content .wizard.wizard-notification>.steps>ul>li.done .step:after{border-top-color:#20B486}.wizard-content .wizard.wizard-notification>.steps>ul>li.done .step{color:#fff}.wizard-content .wizard.wizard-notification>.steps .step{width:40px;height:40px;line-height:40px;font-size:1.3rem;border-radius:15%;background-color:#f3f3f3}.wizard-content .wizard.wizard-notification>.steps .step:after{content:"";width:0;height:0;position:absolute;bottom:0;left:50%;margin-left:-8px;margin-bottom:-8px;border-left:7px solid transparent;border-right:7px solid transparent;border-top:8px solid #f3f3f3}.wizard-content .wizard.vertical>.steps{display:inline;float:left;width:20%}.wizard-content .wizard.vertical>.steps>ul>li{display:block;width:100%}.wizard-content .wizard.vertical>.steps>ul>li.current:after,.wizard-content .wizard.vertical>.steps>ul>li.current:before,.wizard-content .wizard.vertical>.steps>ul>li.current~li:after,.wizard-content .wizard.vertical>.steps>ul>li.current~li:before,.wizard-content .wizard.vertical>.steps>ul>li:after,.wizard-content .wizard.vertical>.steps>ul>li:before{background-color:transparent}@media (max-width:768px){.wizard-content .wizard>.steps>ul{margin-bottom:20px}.wizard-content .wizard>.steps>ul>li{display:block;float:left;width:50%}.wizard-content .wizard>.steps>ul>li>a{margin-bottom:0}.wizard-content .wizard>.steps>ul>li:first-child:before{content:''}.wizard-content .wizard>.steps>ul>li:last-child:after{content:'';background-color:#20B486}.wizard-content .wizard.vertical>.steps{width:15%}}@media (max-width:480px){.wizard-content .wizard>.steps>ul>li{width:100%}.wizard-content .wizard>.steps>ul>li.current:after{background-color:#20B486}.wizard-content .wizard.vertical>.steps>ul>li{display:block;float:left;width:50%}.wizard-content .wizard.vertical>.steps{width:100%;float:none}}
.wizard-content .wizard {
    width: 100%;
    overflow: visible;
}
.wizard-content .wizard>.content>.body {
    padding:0px;
}
.wizard-content .wizard>.content {
    overflow: visible;
    position: relative;
}
</style>

<style>

.map-boxes img {
    width: 100%; height: 450px; margin-top: -56px; object-fit: cover;
}


.list-items-second {
                        list-style: none;
    box-shadow: 4px 4px 15px 0px #00000026;
    border-radius: 20px;
    padding: 20px 20px;
    margin-bottom: 20px;
                    }
.list-items-second li {

    border-bottom: 1px solid #E0E0E0!important;
}
.list-items-second li p {
    color: #000000;
    margin-left: 0px;
    border-bottom: 1px solid #ffffff00;
    padding-bottom: 0px;
    float:left;
}   
.detail-car-table {
    font-size: 11px;
    font-weight: 400;
    color: #34495e;
    background: #fdfdfe;
    margin: 0 0 8px;
    width: 100%;
    border-collapse: collapse;
}
.detail-car-table th {
    width: 53%;
    height: 27px;
    background: #fdfdfe;
    border: 1px solid #edeef000;
    padding: 4px 0;
}
.detail-car-table .th-left {
    border: 1px solid #edeef000;
    border-left: 0;
}
.th-left .th-value {

    text-align: left;
    font-weight: 700;
}
.th-value {
font-size: 16px;
color:#000000A6 ;
border-bottom: 1px solid #44444426;
    padding-bottom: 10px;
    padding-top: 10px;

}
.th-key {
    font-size: 16px;
    color:#000000A6 ;
    padding-top: 10px;
}

.th-key {
    font-size: 16px;
    color: #000000A6;
    border-bottom: 1px solid #44444426;
    padding-bottom: 10px;
    padding-top: 10px;
}
.boxes-informations {
display: flex;
margin-bottom: 30px;
}
.boxes-informations div {
    margin-right:40px;
    background: #FFFFFF;
color: #000000;
margin-left: 20px;
padding: 20px;
border-radius: 5px;
}
.boxes-informations div p {
    color: #898B9E;
    font-size: 14px;
    margin-bottom: 0px;

}
.main-block {
    margin-top: -77px;
}
.dec i  {
    color:#A9D6B8
}
.inc i {
    color:#A9D6B8
}
.prices_boxes {
    color: #000000;
    font-weight: bold;

}
.button-succes {
    /* position: absolute; right: 0;  */
    margin-left: 20px;
    width: 100%;
    margin-right: 20%; background: #21b486; border: 0; padding: 10px 15px; color: #fff; border-radius: 10px; margin-top: 5px;    z-index: 10000;
}
@media only screen and (max-width: 600px) {

.detail-car-table th {
    width: 83%;
}
.actions {
    margin-bottom: 100px;
    margin-top: 50px;
}
.wizard-content .wizard>.actions>ul {
    float: left;

}

.button-succes {
    /* position: absolute;
    left: 0;
    margin-left: 35%; */
    background: #21b486;
    border: 0;
    padding: 10px 15px;
    color: #fff;
    border-radius: 10px;
    margin-top: 47px;
    z-index: 10000;
    margin-left: 20px;
    width: 100%;
}
}
.actions {
    display: none!important;
}
.steps {
    display: none!important;
}
</style>

            <!-- ... -->
            
            <div class="card-header border-bottom p-4">
							<h1 class="mb-0 fs-3" style="font-size: 25px!important;margin-bottom: 20px;">@lang('my_bookings') #{{ $order->id }}</h1>
						</div>
         

<!-- -->

<div class="">
  <div class="panel">
    <div class="panel-body wizard-content">
<form id="example-form" action="{{ route('user.orders.update',$order->id) }}" class="tab-wizard wizard-circle wizard clearfix" method="POST">
    <!-- -->
    @csrf
   


    <h6>@lang('order_details')</h6>
    <section>
      <br/>
      

<div id="map"></div>
{{--      <h5 style="margin-bottom:20px;">გოოგლუს რუკა მოხაზული საიდან სად მიდის</h5>



    <div class="row g-4">

        <img src="{{ asset('assets/images/trip-box-image.png') }}">

    </div>
    --}}







    <!-- order info -->


    <!--<div id="mapsite"></div>-->
    
    <div class="row mt-4" style="    border-top: 1px solid #55555524;">

    <div class="col-md-4">

  
    <h4 style="margin-bottom:30px;     margin-top: 30px;   font-size: 20px;">@lang('specification')</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                        <div class="th-key">@lang('petrol')</div>

                                        
                                        <div class="th-value">@lang('types')</div>
                                        <div class="th-value">@lang('engine')</div>
                                        <div class="th-value">@lang('gear_box')</div>
                                        <div class="th-value">@lang('driving_wheel')</div>
                                        <div class="th-value">@lang('number_of_places')</div>




                                        
                                    </th>

                                    <th class="th-right">

                                        <div class="th-key">{{ $order->car->fuel_type_title }}</div>

                                        <div class="th-value">{{ $order->car->category->translated_title }}</div>
                                        <div class="th-value">{{ $order->car->engine }}</div>
                                        <div class="th-value">{{ $order->car->transmission_title }}</div>
                                        <div class="th-value">{{ $order->car->drive_wheels_title }}</div>
                                        <div class="th-value">{{ $order->car->number_of_seats }}</div>




                                    </th>

                                </tr>


                                </tbody>

</table>

                                <h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('price_include')</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                        <div class="th-key">@lang('unlimite_milage')</div>

                                        
                                        <div class="th-value">@lang('free_cancel') </div>
                                        <div class="th-value">@lang('additional_driver')</div>
                                        <div class="th-value">@lang('insurance')</div>
                                     




                                        
                                    </th>

                                    <th class="th-right">

                                        <div class="th-key"><i style="color: #78BC61;" class="bi bi-check2"></i></div>

                                        <div class="th-value"><i style="color: #78BC61;" class="bi bi-check2"></i></div>
                                        <div class="th-value"><i style="color: #78BC61;" class="bi bi-check2"></i></div>
                                        <div class="th-value"><i style="color: #78BC61;" class="bi bi-check2"></i></div>
                                 



                                    </th>

                                </tr>


                                </tbody>

</table>


    </div>


    <div class="col-md-4">

    <div class="card  p-2 pb-0 " style="  background: #ffffff; ">
					
						<div class="card-body px-3 pb-0" style="   padding-bottom: 50px;    padding-top: 10px;">
						
					
							<h5 class="card-title" style="     margin-bottom: 0px;   font-size: 20px;"><a href="#">{{ $order->car->brand->name }} {{ $order->car->brand_model->name }} </a></h5>
							<p style="    font-size: 14px;">{{ $order->car->category->translated_title }}</p>
	
							<img src="/assets/images/svg/favourite.svg" style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">
							<img src="{{ $order->car->get_poster }}" style="width:100%; height:200px; display:block;margin:0 auto;object-fit: contain;margin-bottom:20px;" alt="Card image">
							
		
	
					
						
						
						
					</div>
    </div>



    <div class="d-flex" style="margin-left:20px;">
							<div>
								<img style="width: 65px; margin-right: 30px; margin-top: 15px;" src="{{ $order->car->user->get_image }}">
							</div>
							<div style="padding-top: 20px;">
								<h5>{{ $order->car->user->full_name }}</h5>
								<p>@lang('car_provider')</p>
							</div>
						</div>

                        @if($order->order_additional_services()->count() > 0)
                        <h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('additionaly_services')</h4>




<ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">
                                    @foreach($order->order_additional_services as $orderAdditionalService)
									<li class="list-group-item d-flex justify-content-between">
										<span>{{ $orderAdditionalService->additional_service->title }} / ${{ $orderAdditionalService->price }} {{ Carbon\Carbon::parse($order->date_from)->diffInDays($order->date_to) }} @lang('dayes')</span>
										<span>

                                        <!-- -->

                                        
									</li>

									<li class="list-group-item py-0"><hr class="my-1"></li>
                                    @endforeach()
									
									
								
									

								</ul>

                                @endif



    </div>


<div class="col-md-4" style="    border-left: 1px solid #55555524;">

<ul class="items-routes" style="margin-top: 30px;
    padding-left: 0px">

<li style="    box-shadow: 4px 4px 15px 0px #00000000;">
    <img src="/assets/images/svg/location-for-groups.svg">
    <span>@lang('deliverys')</span>
<p>{{ $order->location_from_id }}</p>


<img src="/assets/images/svg/location-for-groups-red.svg">
    <span>@lang('returnes')</span>
<p>{{ $order->location_to_id }}</p>
</li>


</ul>


                                
<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('cost')</h4>




                                <ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">



									<li class="list-group-item d-flex justify-content-between">
										<span>{{ Carbon\Carbon::parse($order->date_from)->diffInDays($order->date_to) }} @lang('days_booked')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->price }}$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>


                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('deliverys')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        $ {{ $order->delivery_price }}
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('returnes')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        $ {{ $order->refund_price }}
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    @if($order->order_additional_services()->count() > 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('adds_service')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->order_additional_services()->sum('price') }}$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>
                                    @endif


                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #898B9E;">@lang('totals')</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        $ {{ $order->total_price }}
                                        <!-- -->
                                        </span>
									</li>
                                    @if($order->car->deposit > 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('deposits')</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        {{ $order->car->deposit }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('after_payments_moneys')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->total_price - $order->payable_price }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @if(currentUser()->orders()->where('is_paid',1)->count() == 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('30_percentage_discount')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->discount_price }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('now_must_pay')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->payable_price }}$
                                        <!-- -->
                                        </span>
									</li>



									

								</ul>
                                <button type="submit" class="button-succes">@lang('payes')</button>

</div>


    </div>


      
     
    </section>
     <!-- ... -->
    <h6>@lang('interestings')</h6>
    <section>

        

 <div class="row" style="    border-top: 1px solid #55555524;">
  

 <div class="col-md-8" style="margin-top:20px;">

<a href="" style="background: linear-gradient(90deg, rgba(86, 173, 56, 0.4) 0%, rgba(0, 132, 97, 0.4) 100%); width: 100%; display: block; text-align: center; color: #032E2E; padding-top: 10px; padding-bottom: 10px; border-radius: 10px;"><svg style="margin-right: 15px;" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="7.64258" y1="5.53268e-08" x2="7.64258" y2="12.785" stroke="black" stroke-width="2"/>
<line y1="-1" x2="14.2211" y2="-1" transform="matrix(-1 0.000289074 -0.000357664 -1 14.5435 6)" stroke="black" stroke-width="2"/>
</svg>
    
    
 @lang('enter_mogzauroba_chventan_ertad')</a>



<div class="card bg-transparent p-0" style="margin-top: 20px;">
				
					<div class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
						<h4 class="mb-2 mb-sm-0">@lang('my_trip')</h4>

						
					</div>
					{{---
					<div class="row g-3" style="margin-top:15px;margin-bottom:15px;">
                                <div class="col-xxl-10 col-sm-10">
                                    <div class="search-box">
                                        <input type="text" name="search_location_query" id="search_location_query" class="form-control search"
                                               placeholder="@lang('enter_direction')...">
                                        <i class="ri-search-line search-icon"></i>

                                    </div>
                                    <span class="text-danger errors tracking_code_err"></span>
                                </div>

                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <a href="javascript:void(0)" type="submit" class="btn btn-primary w-100" style="background-color: #78BC61;border:0;background:#78BC61;"
                                                onclick="searchLocation();"><i
                                                    class="ri-equalizer-fill me-1 align-bottom"></i>
                                            @lang('searchs_button')
                                        </a>
                                    </div>
                                </div>

                            </div>

                    <div class="htmlDisplayLocations"></div>
--}}

                    <select name="trip_id" class="form-control" style="margin-top:20px;">
                    <option value="">@lang('chosinia')</option>
                    @foreach($trips as $trip)
                    <option value="{{ $trip->id }}">{{ $trip->title }}</option>
                    @endforeach
                    </select>

				
				</div>	



 </div>
 

 <div class="col-md-4" style="    border-left: 1px solid #55555524;">

<ul class="items-routes" style="margin-top: 30px;
    padding-left: 0px">

<li style="    box-shadow: 4px 4px 15px 0px #00000000;">
    <img src="/assets/images/svg/location-for-groups.svg">
    <span>@lang('deliverys')</span>
    <p>{{ $carAddress }} - <span id="delivery_address_txt"></span></p>


<img src="/assets/images/svg/location-for-groups-red.svg">
    <span>@lang('returnes')</span>
<p>{{ $carAddress }} - <span id="leave_address_txt"></span></p>
</li>


</ul>


                                
<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('cost')</h4>




<ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">



									<li class="list-group-item d-flex justify-content-between">
										<span>{{ Carbon\Carbon::parse($order->date_from)->diffInDays($order->date_to) }} @lang('days_booked')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->price }}$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>


                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('deliverys')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        $ {{ $order->delivery_price }}
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('returnes')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        $ {{ $order->refund_price }}
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    @if($order->order_additional_services()->count() > 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('adds_service')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        15$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>
                                    @endif


                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #898B9E;">@lang('totals')</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        $ {{ $order->total_price }}
                                        <!-- -->
                                        </span>
									</li>
                                    @if($order->car->deposit > 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('deposits')</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        {{ $order->car->deposit }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('after_payments_moneys')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->total_price - $order->payable_price }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @if(currentUser()->orders()->where('is_paid',1)->count() == 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('30_percentage_discount')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->discount_price }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('now_must_pay')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $order->payable_price }}$
                                        <!-- -->
                                        </span>
									</li>



									

								</ul>


</div>
</div>
        
        
        <button type="submit" class="button-succes">@lang('payes')</button>
        
        
       
    </section>
    
    <!-- <h6>გადახდა</h6>
    <section>
 
        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class=""> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
    </section> -->
</form>
      </div>
  </div>
</div>

<!-- ... steps -->

<!-- <div class="row">

<div class="col-md-8">
<h2 style="font-size: 25px;margin-top: 20px;">CHEVROLET Captiva 2022</h2>


<div style="background:#444;height:300px;width:100%;margin-top:25px;margin-bottom:25px;">
რუკის ადგილი
</div>


<h5>პირადი ინფორმაცია</h5>


<div class="row">


<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="სახელი">
</div>
</div>

<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="გვარი">
</div>
</div>

<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="ქვეყანა">
</div>
</div>


<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="მობილური">
</div>
</div>


<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="Email">
</div>
</div>

<div class="col-md-12">
<div class="search-inputes" style="width:100%;">

<textarea class="form-control">თქვენი სურვილები</textarea>
</div>
</div>






</div>


</div>


</div> -->




                <!-- ... order info -->



                




            </div>

        </div>


    </main>
@endsection
@push('js')

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script>

var form = $("#example-form");

form.steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#'
});

</script>

    <script>
    $(document).ready(function() {
            // Access the "Finish" button
            var finishButton = $('a[href="#finish"]');

            // Hide the "Finish" button
            finishButton.hide();
        });
        $(document.body).on('click', '.add-to-cart', function () {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('user.orders.add.to.order') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'order_id': '{{ $order->id }}',
                },
                success: function (response) {
                    if (response.status == 0) {
                        $('#cart_count').html(response.cart_count);
                        $('#cart_count_mobile').html(response.cart_count);
                        // getCartData()
                        notify('success', response.message);
                    }else if (response.status == 1){
                        notify('error', response.message);
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
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk&libraries=places"></script>
    <script>
        // Initialize and display the map
        function initMap() {
            // Set the coordinates for the starting and ending points
            var start = {lat: {{ $locationFrom['latitude'] }}, lng: {{ $locationFrom['longitude'] }} }; // Example coordinates (New York City)
            var end = {lat: {{ $locationTo['latitude'] }}, lng: {{ $locationTo['longitude'] }} };   // Example coordinates (Los Angeles)

            // Create a new map object
            var map = new google.maps.Map(document.getElementById('map'), {
                center: start,
                zoom: 6 // Adjust the zoom level as needed
            });

            // Create a DirectionsService object
            var directionsService = new google.maps.DirectionsService();

            // Create a DirectionsRenderer object to display the route on the map
            var directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: true // Do not display the default markers
            });

            // Define the request object for the Directions Service
            var request = {
                origin: start,
                destination: end,
                travelMode: 'DRIVING' // Set the travel mode (DRIVING, WALKING, BICYCLING, TRANSIT)
            };

            // Send the request to the Directions Service
            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                    // Display the route on the map
                    directionsRenderer.setDirections(result);

                    var startMarker = new google.maps.Marker({
                        position: start,
                        map: map,
                        icon: 'https://tripbox.ge/assets/images/map_icon/marker_last.png', // Optional: customize the icon
                        title: 'Start'
                    });

                    var endMarker = new google.maps.Marker({
                        position: end,
                        map: map,
                        icon: 'https://tripbox.ge/assets/images/map_icon/marker_last.png', // Optional: customize the icon
                        title: 'End'
                    });
                } else {
                    // Handle any errors
                    alert('Error: ' + status);
                }
            });
        }
        
        function initAutocomplete() {
            var deliveryAddress = document.getElementById('delivery_address');
            var leaveAddress = document.getElementById('leave_address');
            var autocomplete = new google.maps.places.Autocomplete(deliveryAddress,{
                types: ['geocode'], // Only suggest geocoding results (addresses)
                componentRestrictions: { country: 'GE' }, // Restrict suggestions to Georgia (GE)
                
            });
            
            var autocomplete1 = new google.maps.places.Autocomplete(leaveAddress,{
                types: ['geocode'], // Only suggest geocoding results (addresses)
                componentRestrictions: { country: 'GE' }, // Restrict suggestions to Georgia (GE)
                
            });
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                lat = place.geometry.location.lat()
                lng = place.geometry.location.lng()
                $.ajax({
                    url: "{{ route('user.orders.car.rent.calculation') }}", // Adjust the URL to your Laravel route
                    method: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'id': '{{ $order->id }}',
                        'lat': lat,
                        'lng': lng
                    },
                    success: function(response) {
                        $('#delivery_address_txt').html(place.formatted_address)
                        $('.delivery_address_price').html(response.delivery_cost)
                        // Handle the response as needed
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX request failed:', error);
                    }
                });
            });
            
            autocomplete1.addListener('place_changed', function() {
                var place1 = autocomplete1.getPlace();
                lat = place1.geometry.location.lat()
                lng = place1.geometry.location.lng()
                $.ajax({
                    url: "{{ route('user.orders.car.rent.calculation') }}", // Adjust the URL to your Laravel route
                    method: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'id': '{{ $order->id }}',
                        'lat': lat,
                        'lng': lng
                    },
                    success: function(response) {
                        $('#leave_address_txt').html(place1.formatted_address)
                        $('.leave_address_price').html(response.delivery_cost)
                        // Handle the response as needed
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX request failed:', error);
                    }
                });
            });
        }
        
        function searchLocation() {
            $(".htmlDisplayLocations").html('<h3 align=center class=text-warning><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> დაელოდეთ...</h3>');
            let url;
            url = '{{ route('user.orders.search.locations') }}'
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    '_token': '{{ csrf_token() }}',
                    'search_location_query': $('#search_location_query').val(),
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status == 1) {
                        $('.htmlDisplayLocations').html(data.html);
                    }else if(data.status == 2){
                        Swal.fire('შეცდომა!','თავისუფალი თაროები აღარ არის!','warning');
                    }
                    else {
                        Swal.fire('შეცდომა!', '', 'error');
                    }
                    totalPrice()
                    $('#btnSave').html('<i class="fa fa-floppy-o mr-1" aria-hidden="true"></i>შენახვა');
                    $('#btnSave').attr('disabled', false); //set button enable
                    $('#tracking_code_err').html('');

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    if (xhr.status == 422) { // when status code is 422, it's a validation issue
                        $('.errors').html('');
                        $.each(xhr.responseJSON.errors, function (i, error) {
                            $('.'+i+'_err').html(error);
                            console.log(i)
                        });
                    }
                    $('#btnSave').html('შენახვა');
                    $('#btnSave').attr('disabled', false); //set button enable
                }
            });
        }
    </script>

    <!-- Call the initMap() function after the API has loaded -->
    <script async defer>
        initMap();
        initAutocomplete();
    </script>

    
@endpush
