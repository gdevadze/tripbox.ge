<div id="map" style="height:400px;"></div>

                                        <div class="search-bar-for-modal">
                                            <div class="row" style="margin-top:50px;margin-bottom:100px;">


                                            <div class="col-md-6">


                                            <img src="https://tripbox.phpweb.ge/storage/images/cars//car-image-YiDvLbRZIj-1711549149.png">
                                                {{--
                                                    <!-- slider -->
                                                    <div class="splide splide-main mb-3" data-splide='{"type" : "fade","autoplay": true,"heightRatio":0.5,"pagination":false,"arrows":false,"cover":true,"lazyLoad":"sequential"}'>
                                                        <div class="splide__track">
                                                            <ul class="splide__list">
                                                                <li class="splide__slide rounded"><img src="assets/images/cars/3.png" alt="">

                                                                    <a href="assets/images/cars/3.png" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
                                                                </li>
                                                                <li class="splide__slide rounded"><img src="assets/images/cars/3.png" alt="">

                                                                    <a href="assets/images/cars/3.png" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
                                                                </li>
                                                                <li class="splide__slide rounded"><img src="assets/images/cars/3.png" alt="">

                                                                    <a href="assets/images/cars/3.png" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
                                                                </li>
                                                                <li class="splide__slide rounded"><img src="assets/images/cars/3.png" alt="">

                                                                    <a href="assets/images/cars/3.png" class="stretched-link" data-glightbox="" data-gallery="banner"></a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="splide splide-thumb" data-splide='{"rewind":true,"fixedWidth":200,"fixedHeight":120,"isNavigation":true,"gap":20,"focus":"center","pagination":false,"cover":true,"lazyLoad":"sequential","breakpoints":{"600":{"fixedWidth":150,"fixedHeight":80}}}'>
                                                        <div class="splide__track">
                                                            <ul class="splide__list">
                                                                <li class="splide__slide"><img src="{{ asset('assets/images/cars/3.png') }}" alt=""></li>
                                                                <li class="splide__slide"><img src="assets/images/cars/3.png" alt=""></li>
                                                                <li class="splide__slide"><img src="assets/images/cars/3.png" alt=""></li>
                                                                <li class="splide__slide"><img src="assets/images/cars/3.png" alt=""></li>

                                                            </ul>
                                                        </div>

                                                        <div class="splide__arrows">
                                                            <button class="splide__arrow  splide__arrow--prev p-splide__arrow--prev bg-primary"><span class="spi-angle-left text-white"><i class="fa-solid fa-fw fa-angle-left"></i></span></button>
                                                            <button class="splide__arrow splide__arrow--next p-splide__arrow--next bg-primary"><span class="spi-angle-right text-white"><i class="fa-solid fa-fw fa-angle-right"></i></span></button>
                                                        </div>
                                                    </div>
                                        --}}

                                                    <!-- ... slider -->





                                                    <ul class="items-routes down-slider" style="margin-top:30px;">
                                                        <h4>ღირებულება</h4>
                                                        <li>
                                                            <!-- <span style="margin-left: 0px;">Тбилиси, 25 - 30 декабря</span> -->
                                                            
                                                            <p style="margin-left: 0px;">ავტომობილის {{ $diffDays }} დღიანი ჯავშანი</p>

                                                            <h4 style="color:#79C064;">{{ $diffDays * $car->price }} $</h4>



{{--                                                            <span style="margin-left: 0px;">Тбилиси, 25 - 30 декабря</span>--}}
{{--                                                            <sub>150 $</sub>--}}
{{--                                                            <p style="margin-left: 0px;">Аренда 10 дней</p>--}}

{{--                                                            <span style="margin-left: 0px;">Тбилиси, 25 - 30 декабря</span>--}}
{{--                                                            <sub>150 $</sub>--}}
{{--                                                            <p style="margin-left: 0px;">Аренда 10 дней</p>--}}


{{--                                                            <span style="margin-left: 0px;">Итого</span>--}}
{{--                                                            <sub>150 $</sub>--}}
{{--                                                            <p style="margin-left: 0px;">К оплате сейчас</p>--}}
                                                        </li>

                                                        <li>
                                                            <a class="src-btn add-to-cart" href="javascript:0;"
                                                               data-id="{{ $car->id }}"
                                                               style="padding-top: 10px; padding-bottom: 10px; border-radius: 40px;    background: #79C064; width: 100%!important; display: block; text-align: center;">

                                                                დაჯავშვნა

                                                            </a>
                                                        </li>




                                                    </ul>
                                                </div>

                                                

                                                <div class="col-md-6">

                                                    <ul class="items-routes">

                                                        <li>
                                                            <img src="assets/images/svg/location-for-groups.svg">
                                                            <span>გასვლა</span>
                                                            <p>{{ $cityFrom }}, {{ \request()->date_from }} {{ carRentalCalculation($cityFrom,$car->gps_car_id)['delivery_cost'] }}</p>


                                                            <img src="assets/images/svg/location-for-groups-red.svg">
                                                            <span>დაბრუნება</span>
                                                            <p>{{ $cityTo }}, {{ \request()->date_to }} {{ carRentalCalculation($cityTo,$car->gps_car_id)['delivery_cost'] }}</p>
                                                        </li>


                                                        <li>

                                                            <p style="   border-bottom:0px solid #E0E0E0;margin-bottom:0px;padding-bottom:0px;margin-bottom:15px;">პარამეტრები</p>
                                                            <p>მარკა: {{ $car->brand->name }} </p>
                                                            <p>მოდელი: {{ $car->brand_model->name }} </p>
                                                            <p>ტიპი: {{ $car->category->title }}</p>
                                                            <p>ფერი: {{ $car->color->name }}</p>
                                                            <p>გადაცემათა კოლოფი: {{ $car->transmission_title }}</p>
                                                            <p>ძრავი: {{ $car->engine }}</p>
                                                            <p>ადგილების რაოდენობა: {{ $car->number_of_seats }}</p>
                                                            <p>წამყვანი თვლები: {{ $car->drive_wheels_title }}</p>
                                                        </li>
                                                       

                                                    </ul>




                                                </div>


                                             
                                            </div>
                                            <!-- ... serach bar -->
                                        </div>
                                        
                                        <script>
                                            $( document ).ready(function() {
    console.log( "ready!" );
});
                                            // Set the coordinates for the center of the map
            
            function initMap() {
            // Set the coordinates for the starting and ending points for each route
            var routes = [
                { color: '#4287f5', start: {lat: {{ $location['latitude'] }}, lng: {{ $location['longitude'] }} }, end: {lat: {{ $lat }}, lng: {{ $lon }} } }, // Example route 1 (New York City to Los Angeles)
                { color: '#fcba03', start: {lat: {{ $lat }}, lng: {{ $lon }} }, end: {lat: {{ $locationTo['latitude'] }}, lng: {{ $locationTo['longitude'] }} } }            // Example route 2 (Chicago to Indianapolis)
            ];

            // Create a new map object
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 37.7749, lng: -122.4194}, // Example center (San Francisco)
                zoom: 5 // Adjust the zoom level as needed
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
                    } else {
                        // Handle any errors
                        alert('Error: ' + status);
                    }
                });
            });
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
            
            initMap();
                                        </script>