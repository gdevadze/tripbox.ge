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

                </div> -->

                <div class="d-flex  p-2 p-xl-0 mt-xl-4">
                    <button class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#78BC61; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">პირადი ინფორმაცია</button>
                    <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">გადახდის მეთოდები </button>

                    <!-- <a href="javascript:0;" data-bs-toggle="modal" data-bs-target="#cars">Создать Trip</a>

                    <a href="javascript:0;" data-bs-toggle="modal" style="margin-left: 40px;" data-bs-target="#routes">Создать Routes</a> -->
                </div>


                <h4 style="font-size: 30px;margin-top:30px;">ჩემი პროფილი</h4>
                <a href="/user/profile" style="color:#78BC61">პროფილის რედაქტირება</a>


                <div class="row" style="margin-top:40px;">

                    <div class="col-md-4">
                        <p style="color: #000000;font-size: 16px;margin-bottom: 0px;">სახელი გვარი</p>
                        <h5 style="margin-bottom:60px;">{{ currentUser()->full_name }}</h5>



                    </div>


                    <div class="col-md-4">
                        <p style="color: #000000;font-size: 16px;margin-bottom: 0px;">ტელეფონი</p>
                        <h5 style="margin-bottom:60px;">{{ currentUser()->tel }}</h5>


                        <p style="color: #000000;font-size: 16px;margin-bottom: 0px;">Email- მისამართი</p>
                        <h5 style="margin-bottom:30px;">{{ currentUser()->email }}</h5>


                    </div>


                    <div class="col-md-4">
                        <p style="color: #898B9E;font-size: 16px;margin-bottom: 0px;">სად გსურთ შეტყობინებეის მიღება</p>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-12">
                                <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                    <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">Email - მისამართზე</label>
                                    <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1" checked>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                    <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">მობილური</label>
                                    <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1" checked>
                                </div>

                            </div>

                            <div class="col-md-12">
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

                            </div>
                          
                          
                        </div>


                    </div>


                </div>


            </div>

        </div>


    </main>
@endsection
