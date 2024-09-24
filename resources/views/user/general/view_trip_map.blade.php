<div id="map" style="height:450px;"></div>

<p>Distance: {{ $distance }}</p>
<p>Driving Hours: {{ floor($drivingDuration / 3600) }} Hours {{ floor(($drivingDuration % 3600) / 60) }} Minutes</p>
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
