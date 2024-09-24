@extends('user.layouts.app')

@section('content')
    <main>


      
    @include('user.general.header')



        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">



<!-- 
                <div class="row g-4">

                    <img src="{{ asset('assets/images/trip-box-image.png') }}">

                </div>
 -->

                <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">@lang('car_detailes')</h4>








                <div class="row">


                    <div class="col-md-2">

                        <p>@lang('rentereds')</p>
                        <h5>{{ $car->orders()->count() }} </h5>
                    </div>
                    <div class="col-md-2">

                        <p>@lang('get_profit')</p>
                        <h5>{{ number_format($car->orders()->sum('total_price'),2) }}$ </h5>
                    </div>
                    <div class="col-md-2">

                        <p>@lang('speed_warning')</p>
                        <h5>0</h5>
                    </div>
                    <div class="col-md-2">

                    <p>@lang('claims')</p>
                    <h5>0</h5>
                    </div>
<div class="col-md-2">

<p>@lang('total_already_run')</p>
<h5>{{ ($car->orders()->sum('location_from_distance') / 1000) + ($car->orders()->sum('location_from_distance') / 1000) }}KM</h5>
</div>

                </div>

                <hr />
               


<style>

.table tr {
    padding-left:15px!important;padding-right:15px!important;
}
.tabl-icons a{
margin-right: 15px;
}
</style>


<div class="row" style="margin-top:30px;">

<div class="col-md-4">

<div class="card shadow" style="padding:35px;">


<img src="{{ $car->get_poster }}">

</div>


<ul class="items-routes" style="margin-left:0px;padding-left:0px;margin-top:40px;">



                                                        <li>

                                                            <p style="  padding-bottom: 10px; margin-bottom: 15px; font-weight: bold; font-size: 20px; text-align: center;">{{ $car->vehicle_number }}</p>
                                                            <p>@lang('numbers'): {{ $car->vehicle_number }} </p>
                                                            <p>@lang('types'): {{ $car->category->title }}</p>
                                                            <p>@lang('site_registration_date'): {{ Carbon\Carbon::parse($car->created_at)->format('d.m.Y') }}</p>
                                                            <!--<p>ვინ კოდი: FYDR4698798D98</p>-->
                                                            <p>@lang('owerss'): <b>{{ $car->user->full_name }}</b></p>
                                                       
                                                        </li>
                                                       

                                                    </ul>

</div>
<div class="col-md-8">

<h4>@lang('orderss')</h4>
<div class="table-responsive">
<table class="table  shadow" style="border-radius: 10px;margin-top:20px;padding-left:15px;padding-right:15px;padding-bottom:20px;">
  <thead>
    <tr>
      <th scope="col">Trip #</th>
      <th scope="col">@lang('dates')</th>
      <th scope="col">@lang('number_of_days')</th>
      <th scope="col">@lang('moneys')</th>
      <th scope="col">@lang('clients')</th>
      <th scope="col">@lang('actions')</th>
    </tr>
  </thead>
  <tbody>
 
 @foreach($car['orders'] as $order)
    <tr >
      <th scope="row" style="padding-left:25px!important;">#{{ $order->id }}</th>
     
    
      <td>27-2-2023</td>
      <td>{{ Carbon\Carbon::parse($order->date_from)->diffInDays($order->date_to) }} @lang('dayes')</td>
      <td>{{ $order->total_price }} $</td>
      <td>{{ $order->user->full_name ?? '' }}</td>
      <td> <div class="tabl-icons" style="display:flex;">


<a href="javascript:0;" class="btn btn-primary mb-0 order-detail" data-id="{{ $order->id }}" style="font-size: 10px;">@lang('detailess')</a>
</div></td>
    </tr>
    @endforeach
    
    


    
  </tbody>
</table>


</div>

</div>


</div>



                








            </div>

        </div>


    </main>

    <div class="modal fade" id="orderss" tabindex="-1" aria-labelledby="orderssLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl ">
		<div class="modal-content" style="    padding: 20px;">

			<div class="modal-body" style=" padding: 0px;">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>



				<div class="htmlDisplay"></div>








			</div>

		</div>
	</div>
</div>
@endsection
@push('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk&libraries=places"></script>
<script>
$(document.body).on('click', '.order-detail', function(){
    $('#orderss').modal('show'); // show bootstrap modal when complete loaded
    $(".htmlDisplay").html('<h3 align=center class=text-warning><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> დაელოდეთ...</h3>');
    let id = $(this).data('id');
    $.ajax({
        url: "{{ route('user.orders.detail.render') }}",
        method: "POST",
        data: {
            _token: '{{ csrf_token() }}',
            'id': id
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
@endpush