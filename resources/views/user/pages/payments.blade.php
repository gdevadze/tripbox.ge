@extends('user.layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <main>


        @include('user.general.header')



        <div class="page-content">

        @include('user.particials.user-header')


        <div class="page-content-wrapper p-xxl-4">

              

<style>
.buttons_orders {
    margin-right:15px;border-radius:30px;border:0;background-color:#20B486; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;
}
.buttons_orders_finished {
    margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #20B486; color: #20B486; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;
}
</style>
              

                <h4 style="font-size: 30px;margin-top:30px;">@lang('payments')</h4>
              

                <style>
                    .table th {
                        color: #61657E!important;
                        font-size:13px;
                    }
                    .table tr {


                    }
                    .table {
                        --bs-table-border-color: #dfdfe300!important;
                    }
                </style>
<div class="table-responsive">
                <table class="table" id="myTable" style="margin-top:20px;">
                    <thead>
                    <tr>
                    <th scope="col">@lang('order_numers')</th>
                        <th scope="col">@lang('carss')</th>
                     <th scope="col">@lang('froms')</th>
              <th scope="col">@lang('dates')</th>
                        <th scope="col">@lang('cost')</th>
						{{-----
                        <th scope="col">@lang('status')</th>----}}

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr style="box-shadow: 2px 2px 10px 0px #00000026;border-radius:20px;">
                        <th>


{{ $order->id }}
</th>
                            <th>
                            {{ $order->car->brand->name ?? '' }} {{ $order->car->brand_model->name ?? '' }}
                            <br>
                            {{ $order->car->vehicle_number ?? '' }}
                            </th>
                       <td>{{ $order->location_from_id }} - {{ $order->location_to_id }}</td>
                         <td>{{ $order->formatted_date_from }} - {{ $order->formatted_date_to }}</td>
                            <td>
							@if(currentUser()->user_type == 1)
							${{ $order->total_price + $order->payable_price }}
							@else
							{{ $order->total_price }}
							@endif
							</td>
							
                           
                            <!-- <a href="{{ route('user.orders.show',$order->id) }}" class="btn btn-sm btn-primary mb-0" style="background: #20B486; border: 0;  border-radius: 30px; ">სრულად</a> -->
                        
                        
                        </tr>


                    @endforeach

                    </tbody>
                </table>


</div>





            </div>

        </div>
        </div>

    </main>


@endsection

@push('js')
<script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script>
let table = new DataTable('#myTable');
</script>


@endpush