
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
.boxes-informations {
    position: relative;
    z-index: 1000;
}
.map-boxes {
  margin-top: -26px!important;
}
</style>
@php
$carPrice = $car->price;
if(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) >= 10){
    $carPrice = $car->price_10;
}elseif(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) >= 5){
    $carPrice = $car->price_5_9;
}elseif(Carbon\Carbon::parse(\request()->date_from)->diffInDays(\request()->date_to) == 1){
    $carPrice = $car->price_1;
}

$deliveryPrice = carRentalCalculation($cityFrom,$car->gps_car_id,$car->id)['delivery_cost'];
$refundPrice = carRentalCalculation($cityTo,$car->gps_car_id,$car->id)['delivery_cost']
@endphp


    <section style="padding-top:0px;overflow-x: hidden;">
    <div class="map-boxes">
    <div id="map" style="height:450px;"></div>
<!-- <img src="/assets/images/templates/n-register/map.png"> -->

</div>
    <div class="container">


 


    <div class="main-block">

    <div class="row">

<!-- -->
    <div class="col-md-6">


					<div class="card  p-2 pb-0 " style="  background: #ffffff; box-shadow: 4px 4px 15px 0px #00000026;">
					
						<div class="card-body px-3 pb-0" style="   padding-bottom: 50px;    padding-top: 10px;">
						
					@php
                                $favorite = \App\Models\Favorite::where('car_id',$car->id)->where('user_id',currentUser()->id)->first();
                                $savedFavorite = false;
                                if($favorite){
                                    $savedFavorite = true;
                                }
                                @endphp
							<h5 class="card-title" style="     margin-bottom: 0px;   font-size: 20px;"><a href="#">{{ $car->brand->name }} {{ $car->brand_model->name }} </a></h5>
                            <div class="d-flex" style="margin-top: 5px;">
                            <p style="
    color: #898B9E;
    font-size: 14px;
    font-weight: 300;
    padding-left: 0;
    border-right: 1px solid #555;
    padding-right: 10px;">Or Similar</p>
							<p style="padding-left:10px;    font-size: 14px;">{{ $car->category->translated_title }}</p>
                            </div>
                            <a href="javascript:void(0)" data-id="{{ $car->id }}" class="add-to-favorite">
                            <img id="add-to-favvorite-{{ $car->id }}" @if($savedFavorite) class="added_favorites" @endif src="{{asset('/assets/images/svg/favourite.svg')}}" style="height: 20px; position: absolute; right: 0; margin-right: 30px; margin-top: -20px;">
                            </a>


                            <a href="{{ $car->get_poster }}" data-fancybox="gallery">
                            
							<img src="{{ $car->get_poster }}" style="width:100%; height:200px; display:block;margin:0 auto;object-fit: contain;margin-bottom:20px;" alt="Card image">
							</a>

                            <!-- carousel -->


<style>
.images-gallery img {
    width: 15%;
    object-fit: contain;
    margin-right: 10px;
    margin-left: 10px;
    margin-bottom: 20px;

}

@media only screen and (max-width: 600px) {

.detail-car-table th {
    width: 83%;
}
}
</style>

                            <!-- ... carousel -->
                             <div class="images-gallery">

                            @foreach($car->images as $key => $image)
			            <a href="{{ asset('storage/images/cars/'.$image->folder.'/'.$image->url) }}" data-fancybox="gallery">

            
						
								<img src="{{ asset('storage/images/cars/'.$image->folder.'/'.$image->url) }}" class="card-img rounded-0" alt="">
                                </a>

                             @endforeach


                            </div>


     
           

             
		


                           
                                  
                                 
                             
                        

					
						
						
						
					</div>
				</div>


              
<h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('specification')</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                        <div class="th-key">@lang('fuel_types')</div>

                                        
                                        <div class="th-value">@lang('types')</div>
                                        <!-- <div class="th-value">წელი</div> -->
                                        <div class="th-value">@lang('engine')</div>
                                        <div class="th-value">@lang('gear_box')</div>
                                        <div class="th-value">@lang('driving_wheel')</div>
                                        <div class="th-value">@lang('number_of_places')</div>




                                        
                                    </th>

                                    <th class="th-right">

                                        <div class="th-key">{{ $car->fuel_type_title }}</div>

                                        <div class="th-value">{{ $car->category->translated_title }}</div>
                                        <!-- <div class="th-value">{{ $car->year }}</div> -->
                                        <div class="th-value">{{ $car->engine }}</div>
                                        <div class="th-value">{{ $car->transmission_title }}</div>
                                        <div class="th-value">{{ $car->drive_wheels_title }}</div>
                                        <div class="th-value">{{ $car->number_of_seats }}</div>




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
               




    </div>
<!-- -->

<!-- -->

<div class="col-md-6">


<div class="boxes-informations">

<div>
@lang('deliverys') {{ $deliveryPrice }}$
<p>{{ number_format(carRentalCalculation($cityFrom,$car->gps_car_id,$car->id)['distance'] / 1000,0) }} @lang('from_yous')</p>
</div>

<div>
@lang('returnes') {{ $refundPrice }}$
<p>{{ number_format(carRentalCalculation($cityTo,$car->gps_car_id,$car->id)['distance'] / 1000,0) }} @lang('from_yous')</p>
</div>

</div>




<div class="d-flex" style="margin-left: 20px;">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="{{ $car->user->get_image }}">
							</div>
							<div style="padding-top: 20px;">
								<h5>{{ $car->user->full_name }}</h5>
								<p>@lang('car_provider')</p>
							</div>
						</div>

                        <ul class="items-routes" style="margin-top: 30px;padding-bottom:0px;margin-bottom:0px;
    padding-left: 0px">

<li style="    box-shadow: 4px 4px 15px 0px #00000000;">
    <img src="{{asset('/assets/images/svg/location-for-groups.svg')}}">
    <span>@lang('deliverys')</span>
<p>{{ $cityFrom }}, {{ \request()->date_from }}</p>


<img src="{{asset('/assets/images/svg/location-for-groups-red.svg')}}">
    <span>@lang('returnes')</span>
<p>{{ $cityTo }}, {{ \request()->date_to }}</p>
</li>

<li style="    box-shadow: 4px 4px 15px 0px #00000000;padding-top:0px;">
<label style="    font-weight: bold;
    color: #000;
    margin-bottom: 10px;font-size: 19px;">@lang('car_pickup_location')</label>
									<input type="text" class="form-control" name="address" id="address" placeholder="@lang('enter_adressss')">
</li>
</ul>





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
										<span>{{ $additionalService->translated_title }} / ${{$totalPrice}} @if($additionalService->type == 1) {{ $diffDays }} - @lang('dayes') @endif</span>
										<span>

                                        <!-- -->

                                        <input type="checkbox" class="additional_services" data-price="{{ $totalPrice }}" value="{{ $additionalService->id }}" name="additional_services[]">
                                        <!-- -->

                                        </span>
									</li>
                                    <li class="list-group-item py-0"><hr class="my-1"></li>
                                    @endforeach
									

									

									

									
									

								</ul>

                            
                                

                           

                                
<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">@lang('cost')</h4>




                                <ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">



									<li class="list-group-item d-flex justify-content-between">
										<span>{{ $diffDays }} @if($diffDays == '1') @lang('days_diferent') @else @lang('dayes') @endif</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ ($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100) }} $
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>


                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('deliverys')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $deliveryPrice }}$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('returnes')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ $refundPrice }}$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    <div id="additional_services_total_box" class="d-none">
                                    <li class="list-group-item d-flex justify-content-between " >
										<span>@lang('adds_service')</span>
										<span class="prices_boxes" id="additional_services_total_price">
                                        <!-- -->
                                        $
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>
                                    </div>


                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #898B9E;">@lang('totals')</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        {{ ($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100) + $deliveryPrice + $refundPrice }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @if($car->deposit > 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span>@lang('deposits')</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        {{ $car->deposit }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @endif

                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('after_payments_moneys')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ (($diffDays * $carPrice) + ($diffDays * $carPrice * 15 / 100) + $deliveryPrice + $refundPrice) - (($diffDays * $carPrice * 15 / 100)) }}$
                                        <!-- -->
                                        </span>
									</li>
                                    @php
                                    $discountPrice = 0;
                                    @endphp
                                    @if(currentUser()->orders()->where('is_paid',1)->count() == 0)
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('30_percentage_discount')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ ($diffDays * $carPrice * 15 / 100) * 30 / 100 }}$
                                        @php
                                        $discountPrice = ($diffDays * $carPrice * 15 / 100) * 30 / 100;
                                        @endphp
                                        <!-- -->
                                        </span>
									</li>
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">@lang('now_must_pay')</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        {{ ($diffDays * $carPrice * 15 / 100) - $discountPrice }}$
                                        <!-- -->
                                        </span>
									</li>




									

								</ul>


                                <a href="javascript:0;" class="src-btn pay-now-buttons add-to-cart"   data-id="{{ $car->id }}"  \>
                                
                                @lang('payes')</a>


                                <div class="d-flex">
                                <a href="https://wa.me/995708001008" target="_blank" style="        padding-top: 6px;
    padding-bottom: 6px;
    border-radius: 40px;
    background: #63A5A5;;
    width: 100% !important;
    display: block;
    text-align: center;
    margin-left: 20px;
    margin-top: 40px;
    margin-bottom: 30px;
    color: #fff;
    /* padding-left: 23px; */
    margin-top: 0px;
    margin-right: -20px;">
                                  
                                    @if (currentLocale() == 'ru')
                                    Проблема с картой при оплате? Пишите нам
                                    @endif
                                    @if (currentLocale() == 'en')
                                    Cant pay by card? Contact us
                                    @endif
                                    <img src="/assets/images/social/whatsaap.svg">
                                    </a>
                                </div>

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



                                            // Set the coordinates for the center of the map
            
            @if($deliveryPrice > 0 || $refundPrice > 0)
            function initMap() {
            // Set the coordinates for the starting and ending points for each route
            var routes = [
                { color: '#3434eb', start: {lat: {{ $location['latitude'] }}, lng: {{ $location['longitude'] }} }, end: {lat: {{ $lat }}, lng: {{ $lon }} } }, // Example route 1 (New York City to Los Angeles)
                { color: '#eb4034', start: {lat: {{ $lat }}, lng: {{ $lon }} }, end: {lat: {{ $locationTo['latitude'] }}, lng: {{ $locationTo['longitude'] }} } }            // Example route 2 (Chicago to Indianapolis)
            ];

            // Create a new map object
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: {{ $location['latitude'] }}, lng: {{ $location['longitude'] }} }, // Example center (San Francisco)
                zoom: 12 // Adjust the zoom level as needed
            });

            // Create a DirectionsService object
            var directionsService = new google.maps.DirectionsService();
            
            var infoWindow = new google.maps.InfoWindow();

            // Create a DirectionsRenderer object for each route
            var directionsRenderers = [];

            // Loop through each route and create a DirectionsRenderer for it
            routes.forEach(function(route, index) {
                // Create a DirectionsRenderer object
                var directionsRenderer = new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: true, // Do not display the default markers
                    polylineOptions: {
                        strokeColor: route.color // Set a random color for each route
                    }
                });

                // Push the DirectionsRenderer object to the array
                directionsRenderers.push(directionsRenderer);

                // Define the request object for the Directions Service
                var request = {
                    origin: route.start,
                    destination: route.end,
                    travelMode: 'DRIVING' // Set the travel mode (DRIVING, WALKING, BICYCLING, TRANSIT)
                };

                // Send the request to the Directions Service
                directionsService.route(request, function(result, status) {
                    if (status == 'OK') {
                        // Display the route on the map
                        directionsRenderer.setDirections(result);
                        
                        // Get the total duration of the route
                        var totalDuration = result.routes[0].legs.reduce((total, leg) => total + leg.duration.value, 0);
                        var totalDurationText = formatDuration(totalDuration);

                        // Add event listeners to the polylines for hover events
                        var routePolyline = new google.maps.Polyline({
                            path: result.routes[0].overview_path,
                            strokeColor: route.color,
                            strokeOpacity: 0,
                            fillOpacity: 0,
                            map: map
                        });

                        google.maps.event.addListener(routePolyline, 'mouseover', function(event) {
                            infoWindow.setPosition(event.latLng);
                            infoWindow.setContent('<div><strong>Driving Hours:</strong> ' + totalDurationText + '</div>');
                            infoWindow.open(map);
                        });

                        google.maps.event.addListener(routePolyline, 'mouseout', function() {
                            infoWindow.close();
                        });

                        var startIcon, endIcon;
                        if (route.color === '#3434eb') {
                            startIcon = 'https://tripbox.ge/assets/images/map_icon/marker_last.png.png'; // Car icon
                            endIcon = 'https://tripbox.ge/assets/images/map_icon/marker_last.png';   // Car icon
                        } else if (route.color === '#eb4034') {
                            startIcon = 'https://tripbox.ge/assets/images/map_icon/marker_last.png'; // Location icon
                            endIcon = 'https://tripbox.ge/assets/images/map_icon/marker_last.png';   // Location icon
                        }

                        // Add start and end markers with appropriate icons
                        var startMarker = new google.maps.Marker({
                            position: route.start,
                            map: map,
                            icon: startIcon,
                            title: 'Start'
                        });

                        var endMarker = new google.maps.Marker({
                            position: route.end,
                            map: map,
                            icon: endIcon,
                            title: 'End'
                        });
                    } else {
                        // Handle any errors
                        alert('Error: ' + status);
                    }
                });
            });
        }
        @else
        function initMap() {
            // Set the coordinates for the center of the map
            var myLatLng = {lat: {{ $location['latitude'] }}, lng: {{ $location['longitude'] }}}; // Example coordinates (New York City)

            // Create a new map object
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 12 // Adjust the zoom level as needed
            });

            // Create a marker and set its position
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'Your location' // Optional title for the marker
            });
        }
        @endif
            
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
            
            initMap();
                                        </script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

