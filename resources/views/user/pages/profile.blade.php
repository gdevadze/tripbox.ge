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


                <form class="row g-3 mt-3" action="{{ route('user.update.profile') }}" method="POST" enctype="multipart/form-data">
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



<div class="col-md-4">


<div style="width: 100%;margin: 0 auto;text-align: center;">

<img src="{{ currentUser()->get_image }}" width="150">
<h5 style="margin-bottom:20px;margin-top:20px;">{{ currentUser()->full_name }}</h5>
<p style="color: #000000;font-size: 16px;margin-bottom: 0px;">@lang('change_profile_picture')</p>
<div class="col-md-12">
                  
                        <input type="file" class="form-control" name="img" placeholder="">
                    </div>


</div>

<h4 style="color: #2A2D2D; font-size: 18px; border-bottom: 1px solid #5555553b; padding-bottom: 10px;">@lang('message')</h4>
<p style="color: #898B9E;font-size: 16px;margin-bottom: 0px;">@lang('where_you_want_to_get')</p>

<div class="row" style="margin-top:10px;">
    <div class="col-md-12">
        <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
            <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">@lang('email-adress')</label>
            <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1" checked>
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
            <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">@lang('mobiles')</label>
            <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1" checked>
        </div>

    </div>

    <!-- <div class="col-md-12">
        <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
            <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">Viber</label>
            <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1" checked>
        </div>

    </div>
  

    <div class="col-md-12">
        <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
            <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">Whatsaap</label>
            <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1" checked>
        </div>

    </div> -->
  
  
</div>
</div>


<div class="col-md-8">

<h4 style="color: #2A2D2D; font-size: 18px; border-bottom: 1px solid #5555553b; padding-bottom: 10px;">@lang('profile_information')</h4>
<div class="row" style="margin-top:20px;">
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="{{ currentUser()->name }}" name="name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="{{ currentUser()->surname }}" name="surname" placeholder="">
                    </div>
                    @if(currentUser()->user_type == 2 && currentUser()->is_verified == 1 || currentUser()->hasRole('მენეჯერი') || currentUser()->hasRole('Admin'))
                    <div class="col-md-6">
                        <input type="text" class="form-control" value="{{ currentUser()->company_name }}" placeholder="@lang('company_names')" name="company_name" placeholder="">
                    </div>
                    @endif
                    <div class=" col-md-6">
                        <input type="text" class="form-control" value="{{ currentUser()->email }}" disabled placeholder="">
                    </div>
                    

                    <div class="col-md-12">
              
                        <input type="text" class="form-control" value="{{ currentUser()->tel }}" name="tel" placeholder="">
                    </div>



                 



                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">@lang('old_password')</label>
                        <input type="password" class="form-control"  placeholder="">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">@lang('new_password')</label>
                        <input type="password" class="form-control"  placeholder="">
                    </div>





                    <div class="col-12 text-end mobile-lefts-side-button" style="margin-top: 50px;    margin-bottom: 50px;">
                        <button type="submit" class="btn btn-primary mb-0" style="background-color: #20B486!important;border-radius: 20px;border: 0px;padding-left: 20px;padding-right: 20px;">@lang('saved')</button>
                    </div>

</div>
</div>



                </form>



            </div>

        </div>


    </main>

@endsection
