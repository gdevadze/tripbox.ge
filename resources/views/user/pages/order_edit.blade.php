@extends('user.layouts.app')

@section('content')
    <main>


    @include('user.general.header')



        <div class="page-content">


        @include('user.particials.user-header')

            <div class="page-content-wrapper p-xxl-4">





                <!-- <div class="d-flex  p-2 p-xl-0 mt-xl-4">
                    <button class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#20B486; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">ჩემი პროფილი</button>
                   

                </div> -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                @endif


                <form class="row g-3 mt-3" action="{{ route('user.orders.update.order',$order->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <style>
                        .form-control {
                            background: #F2F2F2;
                            border: 0;
                            border-radius: 20px;
                            padding-top:10px;
                            padding-bottom:10px;
                            width: 40%;
                        }
                        .form-control {
    background: #f2f2f200;
    border: 0;
    border-radius: 5px;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 100%;
    border: 1px solid #DAD3D3;
    margin-bottom: 10px;
    margin-top: 10px;
}
                    </style>


<div class="col-md-8">

<h4 style="color: #2A2D2D; font-size: 18px; border-bottom: 1px solid #5555553b; padding-bottom: 10px;">ავტომობილი - {{ $order->car->vehicle_number }}</h4>
<div class="row" style="margin-top:20px;">
                    <div class="col-md-6">
                        <select class="form-control" name="car_id">
                        @foreach($cars as $car)
                            <option value="{{ $car->id }}">{{ $car->brand->name }} {{ $car->brand_model->name }} - {{ $car->vehicle_number }}</option>
                            @endforeach
                        </select>
                    </div>
                    



                    <div class="col-12 text-start" style="margin-top: 50px;">
                        <button type="submit" class="btn btn-primary mb-0" style="background-color: #20B486!important;border-radius: 20px;border: 0px;padding-left: 20px;padding-right: 20px;">@lang('saved')</button>
                    </div>

</div>
</div>



                </form>



            </div>

        </div>


    </main>

@endsection
