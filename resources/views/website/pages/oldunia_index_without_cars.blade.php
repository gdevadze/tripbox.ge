@extends('website.layouts.app')

@section('content')

<style>
.home-banner div,.home-banner h3{margin-top:23px;margin-right:20px}.choices .choices__inner{border:2px solid #48713a94;border-radius:8px;border:1px solid #cbc2c2}.choices__list--single .choices__item{width:100%;padding-left:20px}.form-control-border .form-label,.home-banner div h5{margin-bottom:0}.form-fs-md .form-control{border-top-left-radius:16px;border-bottom-left-radius:16px;border:1px solid #cbc2c2}.home-banner{background:#f7faed;display:flex;border-radius:6px;padding-top:10px;padding-left:20px;padding-right:20px}.home-banner img{height:103px;object-fit:contain}.home-banner a{margin-top:23px}.home-banner h3{border-right:2px solid #555;padding-right:20px}.car-parametres li{font-size:15px;text-align:left}.ratings-home-car{border:1px solid #e4e6e8;box-shadow:0 2px 7px 0 #00000012;border-radius:50px;display:inline-flex;padding:10px;font-size:10px;position:absolute;margin-top:-40px;background:#fff;right:0;margin-right:35px}.ratings-home-car h5{font-size:13px;margin-bottom:0}.ratings-home-car h5 span{color:#737373;font-weight:300}.card-metro img{height:265px;object-fit:cover;width:100%}

</style>
    <main>


    @include('website.particials.home-search')

       

        


       @include('website.particials.trips')


    </main>

@endsection
@push('js')
<style>

#ui-datepicker-div{display:none;background-color:#fff;box-shadow:0 .125rem .5rem rgba(0,0,0,.1);margin-top:.25rem;border-radius:.5rem;padding:.5rem}table{border-collapse:collapse;border-spacing:0}.ui-datepicker-calendar thead th{padding:.25rem 0;text-align:center;font-size:.75rem;font-weight:400;color:#78909c}.ui-datepicker-calendar tbody td{width:2.5rem;text-align:center;padding:0}.ui-datepicker-calendar tbody td a{display:block;border-radius:.25rem;line-height:2rem;transition:.3s;color:#546e7a;font-size:.875rem;text-decoration:none}.ui-datepicker-calendar tbody td a:hover{background-color:#e0f2f1}.ui-datepicker-calendar tbody td a.ui-state-active{background-color:#009688;color:#fff}.ui-datepicker-header a.ui-corner-all{cursor:pointer;position:absolute;top:0;width:2rem;height:2rem;margin:.5rem;border-radius:.25rem;transition:.3s}.ui-datepicker-header a.ui-corner-all:hover{background-color:#eceff1}.ui-datepicker-header a.ui-datepicker-prev{left:0;background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==") 50%/.5rem no-repeat;transform:rotate(180deg)}.ui-datepicker-header a.ui-datepicker-next{right:0;background:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==') 50%/10px no-repeat}.ui-datepicker-header a>span{display:none}.ui-datepicker-title{text-align:center;line-height:2rem;margin-bottom:.25rem;font-size:.875rem;font-weight:500;padding-bottom:.25rem}.ui-datepicker-week-col{color:#78909c;font-weight:400;font-size:.75rem}

</style>
    <script>
        flatpickr('#fltpcks',{
            mode: "range",
            minDate: "today",
            dateFormat: "Y-m-d",
            disable: [
                function(date) {
                    // disable every multiple of 8
                    return !(date.getDate() % 8);
                }
            ]
        });
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script>
   
$( function() {
	$( ".datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk&libraries=places"></script>
<script>
    // function initAutocomplete() {
    //         var deliveryAddress = document.getElementById('delivery_address');
    //         var leaveAddress = document.getElementById('leave_address');
    //         var autocomplete = new google.maps.places.Autocomplete(deliveryAddress,{
    //             types: ['geocode'], // Only suggest geocoding results (addresses)
    //             componentRestrictions: { country: 'GE' }, // Restrict suggestions to Georgia (GE)
                
    //         });
            
    //         var autocomplete1 = new google.maps.places.Autocomplete(leaveAddress,{
    //             types: ['geocode'], // Only suggest geocoding results (addresses)
    //             componentRestrictions: { country: 'GE' }, // Restrict suggestions to Georgia (GE)
                
    //         });
    //     }
        const searchTextField = document.getElementById('leave_address');
        const leaveAddress = document.getElementById('delivery_address');
        const popularPlacesList = document.getElementById('popularPlacesList');
        const popularPlacesList1 = document.getElementById('popularPlacesList1');
        searchTextField.addEventListener('focus', function() {
            displayPopularPlaces(['My Location', 'Tbilisi','Batumi',  'Kutaisi', 'Tbilisi Internation Airport','Batumi Internation Airport','Kutaisi Internation Airport']);
            popularPlacesList.style.display = 'block'
        });
        // searchTextField.addEventListener('focusout', function() {
        //     displayPopularPlaces([]);
        //     popularPlacesList.style.display = 'none'
        // });
        leaveAddress.addEventListener('focus', function() {
            displayPopularPlaces1(['My Location', 'Tbilisi','Batumi',  'Kutaisi', 'Tbilisi Internation Airport','Batumi Internation Airport','Kutaisi Internation Airport']);
            popularPlacesList1.style.display = 'block'
        });
        // leaveAddress.addEventListener('focusout', function() {
        //     displayPopularPlaces1([]);
        //     popularPlacesList1.style.display = 'none'
        // });

        searchTextField.addEventListener('input', function() {
            if (searchTextField.value.length === 0) {
                displayPopularPlaces(['My Location', 'Tbilisi','Batumi',  'Kutaisi', 'Tbilisi Internation Airport','Batumi Internation Airport','Kutaisi Internation Airport']);
            } else {
                popularPlacesList.innerHTML = '';
            }
        });

        leaveAddress.addEventListener('input', function() {
            if (leaveAddress.value.length === 0) {
                displayPopularPlaces1(['My Location', 'Tbilisi','Batumi',  'Kutaisi', 'Tbilisi Internation Airport','Batumi Internation Airport','Kutaisi Internation Airport']);
            } else {
                popularPlacesList1.innerHTML = '';
            }
        });

        function displayPopularPlaces(places) {
            popularPlacesList.innerHTML = '';
            places.forEach(place => {
                const listItem = document.createElement('li');
                listItem.textContent = place;
                listItem.className = 'popular-place';
                listItem.onclick = function() {
                    if (place === 'My Location') {
                        getLocation();
                    } else {
                        searchTextField.value = place;
                        popularPlacesList.innerHTML = '';
                    }
                };
                popularPlacesList.appendChild(listItem);
            });
            return popularPlacesList;
        }

        function displayPopularPlaces1(places) {
            popularPlacesList1.innerHTML = '';
            places.forEach(place => {
                const listItem = document.createElement('li');
                listItem.textContent = place;
                listItem.className = 'popular-place';
                listItem.onclick = function() {
                    if (place === 'My Location') {
                        getLocation();
                    } else {
                        leaveAddress.value = place;
                        popularPlacesList1.innerHTML = '';
                    }
                };
                popularPlacesList1.appendChild(listItem);
            });
            return popularPlacesList1;
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError, {enableHighAccuracy: true, timeout: 5000, maximumAge: 0});
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latlng = position.coords.latitude + ',' + position.coords.longitude;
            fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latlng}&key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'OK') {
                        searchTextField.value = data.results[0].formatted_address;
                    } else {
                        searchTextField.value = "Address not found";
                    }
                    popularPlacesList.innerHTML = '';
                })
                .catch(error => {
                    alert('Error fetching address: ' + error);
                });
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }

        let autocomplete;
        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                searchTextField,
                {types: ['geocode'],componentRestrictions: {country: 'GE'},}
            );
            autocomplete1 = new google.maps.places.Autocomplete(
                leaveAddress,
                {types: ['geocode'],componentRestrictions: {country: 'GE'},}
            );
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.log("No details available for input: '" + place.name + "'");
                    return;
                }
            });
            autocomplete1.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.log("No details available for input: '" + place.name + "'");
                    return;
                }
            });
        }

        

        $(document.body).on('click', '.car-detail', function(){
            $('#car_detail').modal('show'); // show bootstrap modal when complete loaded
            $(".htmlDisplay").html('<h3 align=center style="color:#6ecead"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Waiting...</h3>');
            let id = $(this).data('id');
            let carId = 2;
            $.ajax({
                url: "{{ route('car.detail.render') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'diff_days': carId,
                    'city_from': '{{ \request()->location_from }}',
                    'city_to': '{{ \request()->location_to }}',
                    'date_from' : '',
                    'date_to' : '',
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
</script>
<script async defer>
        initAutocomplete();
    </script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <script>
$(function() {
  $('input[name="date_from"]').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(48, 'hours'), // Default to a 2-day range
    minDate: moment().startOf('day'), // Minimum date selectable is today
    locale: {
      format: 'Y-MM-DD HH:mm'
    }
  });

  $('input[name="date_from"]').on('apply.daterangepicker', function(ev, picker) {
    var startDate = picker.startDate;
    var endDate = picker.endDate;
    
    // if (endDate.diff(startDate, 'days') < 2) {
    //   Swal.fire('Error','Please select a range of at least 2 days.','warning');
    //   picker.setStartDate(startDate);
    //   picker.setEndDate(startDate.clone().add(2, 'days'));
    // }
  });
});

$(document.body).on('click', '.add-to-favorite', function () {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('user.add-to-favorite') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'car_id': id,
                },
                success: function (response) {
                    if (response.status == 0) {
                        notify('success', response.message);
                        $(`#add-to-favorite-${id}`).addClass('added_favorites')
                    }else if(response.status == 1){
                        notify('success', response.message);
                        $(`#add-to-favorite-${id}`).removeClass('added_favorites')
                    }
                    else {
                        $('.htmlDisplay').html('<h3 align=center class=text-danger><i class="fa fa-spin fa-spinner"></i> პროდუქტზე ინფორმაცია ვერ მოიძებნა!</h3>');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    if (xhr.status == 401) {
                        Swal.fire({
                            title: 'შეცდომა!',
                            text: "რჩეულებში დასამატებლად გთხოვთ გაიაროთ ავტორიზაცია!",
                            icon: 'error',
                            showCancelButton: false
                        }).then((result) => {
                            if (result.value) {
                                location.href = "{{ route('login') }}"
                            }
                        })
                    }
                }
            })
        })
</script>
@endpush
