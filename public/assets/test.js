function initializePlacesSearch() {
    var input = document.getElementById('placeSearchInput');
    var autocomplete = new google.maps.places.Autocomplete(input);
    console.log(autocomplete)
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        console.log(place)
        if (!place.geometry) {
            console.log("No details available for input: '" + place.name + "'");
            return;
        }

        console.log("Place details: ", place);
        // Do something with the place details
    });
}
