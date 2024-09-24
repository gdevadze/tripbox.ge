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

.boxes-informations {
    position: relative;
    z-index: 1000;
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

.not-registered-form input {
    border: 1px solid #D9D9D9;
    padding: 1rem 1rem;
    border-radius: 4px;
}

.not-registered-form textarea {
    border: 1px solid #D9D9D9;

    border-radius: 4px;
}
</style>

    <main>
@php
$carPrice = $car->price;
if(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) >= 10){
    $carPrice = $car->price_10;
}elseif(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) >= 5){
    $carPrice = $car->price_5_9;
}
@endphp

    <section>
        {{-- 
    <div class="map-boxes">
    <div id="map" style="height:450px;"></div>
<!-- <img src="/assets/images/templates/n-register/map.png"> -->

</div>
--}}
    <div class="container">


 


    <div class="main-block" style="margin-top: 0px;">

    <div class="row">

<!-- -->
    <div class="col-md-6">


					<div class="card  p-2 pb-0 " style="  background: #ffffff; box-shadow: 4px 4px 15px 0px #00000026;">
					
						<div class="card-body px-3 pb-0" style="   padding-bottom: 50px;    padding-top: 10px;">
						
					
							<h5 class="card-title" style="     margin-bottom: 0px;   font-size: 20px;"><a href="#">{{ $car->brand->name }} {{ $car->brand_model->name }} </a></h5>
							<p style="    font-size: 14px;">{{ $car->category->title }}</p>
	
							<img src="/assets/images/svg/favourite.svg" style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">
							<img src="{{ $car->get_poster }}" style="width:100%; height:200px; display:block;margin:0 auto;object-fit: contain;margin-bottom:20px;" alt="Card image">
							
                            @foreach($car->images as $key => $image)
                                  
                                        <img src="{{ asset('storage/images/cars/'.$image->url) }}" alt="">
                                   
                                @endforeach
	
	
					
						
						
						
					</div>
				</div>


              
<h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('specification')</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                    <div class="th-key">@lang('petrol')</div>

                                        
<div class="th-value">@lang('types')</div>
<!-- <div class="th-value">წელი</div> -->
<div class="th-value">@lang('engine')</div>
<div class="th-value">@lang('gear_box')</div>
<div class="th-value">@lang('driving_wheel')</div>
<div class="th-value">@lang('number_of_places')</div>




                                        
                                    </th>

                                    <th class="th-right">

                                        <div class="th-key">ბენზინი</div>

                                        <div class="th-value">{{ $car->category->title }}</div>
                                        <!-- <div class="th-value">{{ $car->year }}</div> -->
                                        <div class="th-value">{{ $car->engine }}</div>
                                        <div class="th-value">{{ $car->transmission_title }}</div>
                                        <div class="th-value">{{ $car->drive_wheels_title }}</div>
                                        <div class="th-value">{{ $car->number_of_seats }}</div>




                                    </th>

                                </tr>


                                </tbody>

</table>




               




    </div>
<!-- -->

<!-- -->

<div class="col-md-6">


<div class="boxes-informations" style="    position: relative;
    z-index: 1000;">

<div>
@lang('deliverys') {{ $deliveryPrice }}$
<p>{{ number_format(carRentalCalculation($cityFrom,$car->gps_car_id,$car->id)['distance'] / 1000,0) }} @lang('from_yous')</p>
</div>

<div>
@lang('returnes') {{ $refundPrice }}$
<p>{{ number_format(carRentalCalculation($cityTo,$car->gps_car_id,$car->id)['distance'] / 1000,0) }} @lang('from_yous')</p>
</div>

</div>


<!-- -->

<form class=" position-relative p-4 pe-md-5 pb-5 pb-md-4" action="{{ route('search') }}" style="padding-left: 14px !important;">
                            <div class="row g-4 align-items-center">

                            <div class="col-lg-12" style="margin-top: 50px;">
                                <div class="row">

                          
                                <div class="col-lg-6" style="padding-left: 0px;padding-right: 8px;">
                                    <div class="form-control-border form-control-transparent form-fs-md d-flex">

                                      

                                        <div class="flex-grow-1">



                                            <svg style=" position: absolute;     margin-top: 33px; margin-left: 15px;" width="14" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.7578 8.74107C16.7656 7.40183 16.4908 6.07875 15.9548 4.87524C15.4189 3.67172 14.6363 2.62038 13.6683 1.80337C12.7003 0.986369 11.5731 0.425834 10.3747 0.165576C9.17631 -0.0946813 7.93928 -0.0476071 6.76025 0.303112C5.58122 0.653832 4.49214 1.2987 3.57813 2.18732C2.66411 3.07593 1.94993 4.18423 1.49139 5.42558C1.03285 6.66693 0.842367 8.00772 0.934842 9.34315C1.02732 10.6786 1.40024 11.9725 2.02446 13.1237L2.04757 13.1563C2.35129 13.7136 2.73093 14.1153 3.11387 14.7052L7.70917 21.3751C7.84202 21.5691 8.01424 21.7266 8.2122 21.8351C8.41016 21.9435 8.62844 22 8.84975 22C9.07105 22 9.28932 21.9435 9.48728 21.8351C9.68524 21.7266 9.85746 21.5691 9.99031 21.3751L14.5064 14.8138C14.9174 14.2816 15.301 13.7246 15.6552 13.1454L15.6717 13.1237C16.3843 11.7954 16.7593 10.2821 16.7578 8.74107ZM8.83489 12.5157C8.14606 12.5157 7.47269 12.2918 6.89995 11.8723C6.32721 11.4527 5.88082 10.8564 5.61721 10.1588C5.35361 9.4611 5.28463 8.69341 5.41902 7.95278C5.5534 7.21214 5.8851 6.53183 6.37218 5.99786C6.85925 5.46389 7.47983 5.10025 8.15543 4.95293C8.83102 4.80561 9.5313 4.88122 10.1677 5.1702C10.8041 5.45918 11.348 5.94856 11.7307 6.57644C12.1134 7.20431 12.3177 7.9425 12.3177 8.69765C12.3185 9.70868 11.9533 10.6787 11.3021 11.3947C10.6509 12.1106 9.76703 12.5138 8.84479 12.5157H8.83489Z" fill="#1E234C"/>
                                            </svg>




                                            <label class="form-label">@lang('arrival')</label>
                                            <input class="form-control delivery_adress" name="location_from" id="delivery_address"  placeholder="@lang('enter_adress')" >
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
                                            <input class="form-control location_to" name="location_to" id="leave_address"  placeholder="@lang('enter_adress')">
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>

                            <button  type="submit" class="search-form-submit" style="    position: absolute;
    right: 14%;
    width: 10%;
    padding-top: 36px;
    padding-bottom: 8px;
    margin-top: 130px;
    border: 0;
    background: #fff0;
    display: block;">
                                  <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="33" cy="33" r="32.5" stroke="black"/>
<path d="M48.7071 34.7071C49.0976 34.3166 49.0976 33.6834 48.7071 33.2929L42.3431 26.9289C41.9526 26.5384 41.3195 26.5384 40.9289 26.9289C40.5384 27.3195 40.5384 27.9526 40.9289 28.3431L46.5858 34L40.9289 39.6569C40.5384 40.0474 40.5384 40.6805 40.9289 41.0711C41.3195 41.4616 41.9526 41.4616 42.3431 41.0711L48.7071 34.7071ZM13 35H48V33H13V35Z" fill="black"/>
</svg>
</button>


                            <div class="col-lg-10">
                                <div class="row">
                                <div class="col-lg-12" style="padding-left: 0px;">
                                <div class="row">

                                <div class="col-md-12">
                                <svg style="    position: absolute;margin-top: 13px;margin-left: 12px;" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"/>
</svg>
                                <input type="text" id="date_booking" name="date_from1" class="date_bookings" placeholder="@lang('choose_dates')" value="" />

                                </div>


                          


                            

                                </div>

                            


                                </div>
                                   
                                </div>

                            

                        
                                </div>


                                </div>


                                <button  type="submit" class="search-form-submit shows-mobile" >
                                  <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="33" cy="33" r="32.5" stroke="black"/>
<path d="M48.7071 34.7071C49.0976 34.3166 49.0976 33.6834 48.7071 33.2929L42.3431 26.9289C41.9526 26.5384 41.3195 26.5384 40.9289 26.9289C40.5384 27.3195 40.5384 27.9526 40.9289 28.3431L46.5858 34L40.9289 39.6569C40.5384 40.0474 40.5384 40.6805 40.9289 41.0711C41.3195 41.4616 41.9526 41.4616 42.3431 41.0711L48.7071 34.7071ZM13 35H48V33H13V35Z" fill="black"/>
</svg>
</button>



                        </form>

<!-- ... -->



<h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('price_include')</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                    <div class="th-key">@lang('unlimite_milage')</div>

                                        
<div class="th-value">@lang('free_cancel')</div>
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

                        {{-- 
                        <div class="d-flex" style="margin-left: 20px;">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="{{ $car->user->get_image }}">
							</div>
							<div style="padding-top: 20px;">
								<h5>{{ $car->user->full_name }}</h5>
                                <p>@lang('car_provider')</p>
							</div>
						</div>
                        --}}


                        {{-- 


<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('additionaly_services')</h4>




<ul class="list-group list-group-borderless mb-0" id="additionalServicesList" style="margin-left: 20px;">
									@foreach($additionalServices as $additionalService)
                                    @php
                                    $totalPrice = $additionalService->price;
                                    if($additionalService->type == 1){
                                        $totalPrice = $additionalService->price * $diffDays;
                                    }
                                    @endphp
                                    <li class="list-group-item d-flex justify-content-between">
										<span>{{ $additionalService->title }} / ${{$totalPrice}} @if($additionalService->type == 1) @lang('dayes') @endif</span>
										<span>

                                        <!-- -->

                                        <input type="checkbox" class="additional_services" data-price="{{ $totalPrice }}" value="{{ $additionalService->id }}" name="additional_services[]">
                                        <!-- -->

                                        </span>
									</li>
                                    <li class="list-group-item py-0"><hr class="my-1"></li>
                                    @endforeach

								</ul>
                                --}}




                                
<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('cost')</h4>




                                <ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">



									<li class="list-group-item d-flex justify-content-between">
										<span>(1/4) დღე</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $car->price + ($car->price * 20 / 100) }} $
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>
                                    <li class="list-group-item d-flex justify-content-between">
										<span>(5/9) დღე</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $car->price_5_9 + ($car->price_5_9 * 20 / 100) }} $
                                        <!-- -->
                                        </span>
									</li>


                                    
                                    <li class="list-group-item d-flex justify-content-between">
										<span>(10+) დღე</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $car->price_10 + ($car->price_10 * 20 / 100) }} $
                                        <!-- -->
                                        </span>
									</li>


                                   



									

								</ul>

{{-- 
                                <a class="src-btn add-to-cart" data-id="{{ $car->id }}" href="javascript:0;" style="padding-top: 10px; padding-bottom: 10px; border-radius: 40px;    background: #79C064; width: 100%!important; display: block; text-align: center;margin-left: 20px;margin-top:40px;margin-bottom:30px;  "> @lang('payes')</a>
                                --}}
</div>




<!-- ... -->



    </div>


    </div>






    </div>



    </section>

    <script>
    $(".additional_services").change(function(){
  const additionalServicesList = document.getElementById('additionalServicesList');
    additionalServicesList.addEventListener('change', function(event) {
        if (event.target.classList.contains('additional_services')) {
            updateTotalPrice();
        }
    });
});


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
        }

$(function() {
  $('input[class="date_bookings"]').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
      format: 'Y-MM-DD HH:mm'
    }
  });    
});

  console.log("page is fully loaded");



            function updateTotalPrice() {
                let totalPrice = 0;
                const checkboxes = document.querySelectorAll('.additional_services');
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        totalPrice += parseFloat(checkbox.getAttribute('data-price'));
                    }
                });
                if(totalPrice > 0){
                    $('#additional_services_total_box').removeClass('d-none')
                    $('#additional_services_total_price').html(`${totalPrice} $`)
                }else{
                    $('#additional_services_total_box').addClass('d-none')
                    $('#additional_services_total_price').html(`${totalPrice} $`)
                }
                
            }
            
            
            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
            
            function formatDuration(duration) {
                var hours = Math.floor(duration / 3600);
                var minutes = Math.floor((duration % 3600) / 60);
                return hours + ' hours ' + minutes + ' minutes';
            }
                                        </script>
                                        <script async defer>
        initAutocomplete();
    </script>
    </main>