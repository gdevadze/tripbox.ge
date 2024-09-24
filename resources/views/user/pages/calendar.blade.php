@extends('user.layouts.app')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://newesthetic.ge/rbtheme/css/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://newesthetic.ge/rbtheme/js/fullcalendar.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <style>

.fc-direction-ltr .fc-toolbar>*>:not(:first-child) {
    display: none;
}
</style>
    <main>


    @include('user.general.header')



        <div class="page-content">


        @include('user.particials.user-header')

            <div class="page-content-wrapper p-xxl-4">


            <!-- calendar space -->

            <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">@lang('car_calendar')</h4>


           
            <form action="{{ route('user.calendar.car.pause') }}" method="POST">
            @csrf

            <div class="row">


            <div class="col-md-4">

 
													<label class="form-label">@lang('choose_car') *</label>
                                                   <br /> <small>@lang('choose_car_text')</small>
													<select class="form-select js-choice" name="id">
														<option value="">@lang('chooses')</option>
                                                        @foreach($cars as $car)
														<option value="{{ $car->id }}">{{ $car->brand->name }} {{ $car->brand_model->name }} - {{ $car->vehicle_number }}</option>
                                                        @endforeach
													</select>
            </div>


            <div class="col-md-4">

 
<label class="form-label">@lang('choose_datess') *</label>
<small>@lang('choose_datess_text')</small>

<input type="text" id="date_booking" required name="date_from" class="form-select" placeholder="Choose dates" value="" />


</div>

<div class="col-md-4">

<button type="submit" class="btn btn-success" style="    margin-top: 55px;
">@lang('addds')</button>
</div>

            </div>


      </form>
    <div class="card mt-5">
      
        <div class="card-body">
            <div id='appointment-calendar'></div>
        </div>
    </div>

  
<script type="text/javascript">


  
(function($) {

    "use strict";

    

        $.ajax({

            type: 'POST',

            url: '{{ route('user.calendar.index') }}',

            data: {_token: '{{ csrf_token() }}' },

            dataType: 'json',

            async: true,

            success: function(response) {
                    var eventsdata = [];

                    var object = {};

                    $.each(response, function(index, value) {

                        let color = '#17a2b8';
                        let route = "{{ route('user.orders.info', ':id') }}"
                        route = route.replace(':id', value.id);
                        if(value.type == 2){
                            color = '#FF0000';
                            route = '#';
                        }
                        
                        eventsdata.push({

                            title: value.date_from+' - '+value.date_to+' - '+value.location_from_id+' - '+value.car.brand.name + ' '+value.car.brand_model.name+' - '+value.car.vehicle_number,

                            start: value.date_from,

                            end: value.date_to,
                            url: route,
                            backgroundColor: color

                        });

                    });

                    var calendarEl = document.getElementById('appointment-calendar');
                    console.log(calendarEl)


                    if ($(window).width() < 765){
                        var DAY_NAMES = ['კვი', 'ორშ', 'სამ', 'ოთხ', 'ხუთშ', 'პარ', 'შაბ'];
                } else {
                    var DAY_NAMES = ['კვირა', 'ორშაბათი', 'სამშაბათი', 'ოთხშაბათი', 'ხუთშაბათი', 'პარასკევი', 'შაბათი'];
                }



                    

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                       
                        initialView: 'dayGridMonth',

                        
                        dayHeaderContent: function(arg) {
                            return DAY_NAMES[arg.date.getDay()]
                          },


                          
                        headerToolbar: {

                            left: 'title',

                            center: 'dayGridMonth,timeGridWeek',

                            right: 'prev,next ',

                        },
                        buttonText: {
                            today: 'დღევანდელი',
                            day: 'დღე',
                            week:'კვირა',
                            month:'თვე',
                            list:'სია',
                          },
                    //    monthNames:['იანვარი','თებერვალი','მარტი','აპრილი','მაისი','ივნისი','ივლისი','აგვისტო','სექტემბერი','ოქტომბერი','ნოემბერი','დეკემბერი'],
                        // editable: true,

                        height:750,

                        events : eventsdata,
                        firstDay: 1,
                        // timeFormat: 'H(:mm)',
                        eventTimeFormat: { // like '14:30:00'
                            hour: '2-digit',
                            minute: '2-digit',
                           
                            hour12: false
                          }

                          


                    });

                    calendar.render();

                

            }

        });

    

}(jQuery)); 
</script>



            <!-- ... calendar space -->


            </div>

        </div>


    </main>

@endsection
