<div class="search-bar-for-modal" style="padding-top:30px;padding-bottom:30px;">
                    <!-- search bar -->


                    <h4 style="font-size: 25px;" class="mb-3">@lang('find_your_car_on_map')</h4>

                    <form class="row">

                      



                        <div class="col-md-12 mt-2">
                          <div id="map"></div>
                        </div>

                       

                   

                     
                        <div class="col-md-12 mt-4">
                            <a href="#" class="btn btn-sm btn-primary mb-0" style="background: #78BC61; border: 0; padding-left: 20px; padding-right: 20px; border-radius: 30px; ">@lang('close')</a>
                        </div>
                    </form>




                    <!-- ... serach bar -->
                </div>
                
<script>
        // Initialize and display the map
        function initMap() {
            // Set the coordinates for the center of the map
            var myLatLng = {lat: 40.712776, lng: -74.005974}; // Example coordinates (New York City)

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
        
        initMap();
    </script>
