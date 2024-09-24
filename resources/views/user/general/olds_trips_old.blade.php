
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
</style>
    <main>



<section class="py-0 pt-sm-5">
	<div class="container position-relative">
	
		<div class="row mb-3">
			<div class="col-12">
				
				<div class="d-lg-flex justify-content-lg-between mb-1">
				
					<div class="mb-2 mb-lg-0">
						<h1 class="fs-2">{{ $location['name'] ?? '' }} </h1>
						
						<p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>{{ $location['formatted_address'] ?? '' }}
							<a href="#" class="ms-2 text-decoration-underline view-map" data-id="{{ $location['place_id'] }}">
								<i class="bi bi-eye-fill me-1"></i>View On Map
							</a>
						</p>
					</div>

					
				</div>
			</div>
		</div>
	
		
	</div>
</section>


{{-- 
	@foreach($location['photos'] as $key => $locationPhoto)

	@if($key == 0)
	/assets/images/cities/restaurant/restaurant_kakheti.jpg

	@endif

	@endforeach

	--}}



<section class="card-grid pt-0">
	<div class="container">
    
		<div class="row g-2">

        
			
			<div class="col-md-6">
				<a data-glightbox data-gallery="gallery" href="/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][0]['photo_reference'] }}">
					<div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][0]['photo_reference'] }}); background-position: center left; background-size: cover;">
						
						<div class="hover-element position-absolute w-100 h-100">
							<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
						</div>
					</div>
				</a>
			</div>
            
            
			<div class="col-md-6">
				
				<div class="row g-2"> 
					<div class="col-12">
						<a data-glightbox data-gallery="gallery" href="/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][1]['photo_reference'] }}">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][1]['photo_reference'] }}); background-position: center left; background-size: cover;">
								
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<div class="col-md-6">
						<a data-glightbox data-gallery="gallery" href="/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][2]['photo_reference'] }}">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][2]['photo_reference'] }}); background-position: center left; background-size: cover;">
								
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>
                    
					
					
					<div class="col-md-6">
						<div class="card card-grid-sm overflow-hidden" style="background-image:url(/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][0]['photo_reference'] }}); background-position: center left; background-size: cover;">
						
							<div class="bg-overlay bg-dark opacity-7"></div>

						@foreach($location['photos'] as $key => $locationPhoto)
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/11.jpg" class="stretched-link z-index-9"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/15.jpg"></a>
							<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/16.jpg"></a>
                        @endforeach
							
							<div class="card-img-overlay d-flex h-100 w-100">
								<h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#" class="text-white">View all</a></h6>
							</div>
						</div>
					</div>
				</div>
				
			</div>
            



		</div>
        
	</div>
</section>









<section class="pt-0 mt-3">
	<div class="container" data-sticky-container>

		<div class="row g-4 g-xl-5">
			
			<div class="col-xl-7 order-1">
				<div class="vstack gap-5">

				{{--
					<div class="card bg-transparent">
						
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0">@lang('object_on_the_map')</h3>
						</div>
						@isset($location['description'])
						<div class="card-body pt-4 p-0">
							

							
                            
							<p class="mb-3">{{ $location['description'] }}</p>
							
							
						</div>
						@endisset


						

						


				
				
				
				</div>	
				--}}


				@if($locationFrom)

				<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0" style="
    font-size: 20px;
    padding-bottom: 20px;">@lang('object_on_the_map')</h3>
						</div>

                        <div id="map" style="height:450px;"></div>
						<p  style="    margin-bottom: -45px;
    font-weight: bold;">Distance: {{ $distance }}</p>
						<p style="    
    font-weight: bold;">Driving Hours: {{ floor($drivingDuration / 3600) }} Hours {{ floor(($drivingDuration % 3600) / 60) }} Minutes</p>

				@endif


					@isset($location['reviews'])
					<div class="card bg-transparent">
				
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="card-title mb-0"  style="
    font-size: 20px;
    padding-bottom: 20px;">@lang('reviews')</h3>
						</div>

						
						<div class="card-body pt-4 p-0">
                        @foreach($location['reviews'] as $review)
							<div class="d-md-flex my-4">
								
								<div class="avatar avatar-lg me-3 flex-shrink-0">
									<img class="avatar-img rounded-circle" src="{{ $review['profile_photo_url'] }}" alt="avatar">
								</div>
							
								<div>
									<div class="d-flex justify-content-between mt-1 mt-md-0">
										<div>
											<h6 class="me-3 mb-0">{{ $review['author_name'] }}</h6>
										
											<ul class="nav nav-divider small mb-2">
												<li class="nav-item">{{ Carbon\Carbon::parse($review['time'])->format('d.m.Y') }}</li>
											</ul>
										</div>
										
										<div class="icon-md rounded text-bg-warning fs-6">{{ $review['rating'] }}</div>
									</div>
									
									<p class="mb-0">{{ $review['text'] }}</p>
								</div>
							</div>
                        @endforeach
						</div>
						
					</div>
					@endisset



			</div>
			</div>
			@auth
			{{-- 
			<div class="col-xl-5 order-xl-2">
				<div data-sticky data-margin-top="100" data-sticky-for="1199">
					
				
					<div class="card bg-transparent border">
				
						<div class="card-header bg-transparent border-bottom">
							
							<h4 class="card-title mb-0"  style="
    font-size: 20px;
    ">@lang('add_to_tripsu')</h4>
						</div>
					
						<div class="card-body">

							<p>@lang('select_chosen_trips')</p>
						


							<select class="form-select form-select-sm js-choice border-0" id="trip_id" style="    color: var(--bs-gray-900);
								border: 1px solid var(--bs-gray-300) !important;
								height: 50px;margin-bottom:10px;
								padding-left: 20px;">
								<option value="">@lang('chosinia')</option>
								@foreach($trips as $trip)
								<option value="{{ $trip->id }}">{{ $trip->title }}</option>
								@endforeach
							</select>
						

					

							<p>@lang('or_create_new')</p>
							<input type="hidden" id="location_id" value="{{ $locationId }}" >
							<input type="hidden" id="location_name" value="{{ $location['name'] }}" >
							<input type="hidden" id="location_img" value="/places/{{ $location['place_id'] }}/photo/{{ $location['photos'][0]['photo_reference'] }}" >
							<input class="form-control" type="text" id="trip_title" placeholder="@lang('enter_trips_name')">



							<div class="mt-3">
								<a type="button" class="btn btn-lg btn-primary-soft mb-0 save-btn" data-link="{{ route('user.add-to-trip.detail') }}" style="    color: #fff;background-color: #20B486;width: 100%;" href="javascript:void(0)">@lang('saved')</a>
							</div>

						</div>
					
					</div>
				</div>	
			</div>

			@else 

			
			<div class="col-xl-5 order-xl-2">

			<div class="alert alert-success" role="alert">
			@lang('for_add_trip_please_login') <a href="/login">@lang('login')</a>
		</div>

			</div>

			@endauth

			--}}
		</div> 
	</div>
</section>



    </main>
	@if($locationFrom)
<script>

    function initMap() {
        // Set the coordinates for the starting and ending points for the route
        var route = {
            color: '#3434eb', 
            start: {lat: {{ $lat }}, lng: {{ $lng }} }, 
            end: {lat: {{ $location['geometry']['location']['lat'] }}, lng: {{ $location['geometry']['location']['lng'] }}}
        };

        // Create a new map object
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: (route.start.lat + route.end.lat) / 2, lng: (route.start.lng + route.end.lng) / 2}, // Center the map between start and end points
            zoom: 7 // Adjust the zoom level as needed
        });

        // Create a DirectionsService object
        var directionsService = new google.maps.DirectionsService();
        
        var infoWindow = new google.maps.InfoWindow();

        // Create a DirectionsRenderer object
        var directionsRenderer = new google.maps.DirectionsRenderer({
            map: map,
            suppressMarkers: true, // Do not display the default markers
            polylineOptions: {
                strokeColor: route.color // Set the color for the route
            }
        });

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

                // Determine the icon based on the route color
                var startMarker = new google.maps.Marker({
                    position: route.start,
                    map: map,
                    title: 'Start'
                });

                var endMarker = new google.maps.Marker({
                    position: route.end,
                    map: map,
                    title: 'End'
                });


            } else {
                // Handle any errors
                alert('Error: ' + status);
            }
        });
    }

    // Function to format duration in seconds to hours and minutes
    function formatDuration(duration) {
        var hours = Math.floor(duration / 3600);
        var minutes = Math.floor((duration % 3600) / 60);
        return hours + ' hours ' + minutes + ' minutes';
    }
</script>
<script async defer>
    initMap();
</script>

@endif
