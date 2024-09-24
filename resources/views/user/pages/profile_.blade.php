@extends('user.layouts.app')

@section('content')
    <main>


    @include('user.general.header')



        <div class="page-content">


        @include('user.particials.user-header')

            <div class="page-content-wrapper p-xxl-4">





                <div class="d-flex  p-2 p-xl-0 mt-xl-4">
                    <button class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#78BC61; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">ჩემი პროფილი</button>
                   

                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                @endif


                <form class="row g-3 mt-3" action="{{ route('user.update.profile') }}" method="POST">
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
                    </style>


                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">სახელი</label>
                        <input type="text" class="form-control" value="{{ currentUser()->name }}" name="name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">გვარი</label>
                        <input type="text" class="form-control" value="{{ currentUser()->surname }}" name="surname" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">მობილური</label>
                        <input type="text" class="form-control" value="{{ currentUser()->tel }}" name="tel" placeholder="">
                    </div>

{{--                    <div class="col-md-6">--}}
{{--                        <label class="form-label" style="color:#000!important;font-weight: bold;">Дата рождения</label>--}}
{{--                        <input type="text" class="form-control"  placeholder="Имя Фамилия">--}}
{{--                    </div>--}}

                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">Email</label>
                        <input type="text" class="form-control" value="{{ currentUser()->email }}" disabled placeholder="">
                    </div>



                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">ძველი პაროლი</label>
                        <input type="password" class="form-control"  placeholder="">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" style="color:#000!important;font-weight: bold;">ახალი პაროლი</label>
                        <input type="password" class="form-control"  placeholder="">
                    </div>





                    <div class="col-12 text-start">
                        <button type="submit" class="btn btn-primary mb-0" style="background-color: #78BC61!important;border-radius: 20px;border: 0px;padding-left: 20px;padding-right: 20px;">შენახვა</button>
                    </div>
                </form>



            </div>

        </div>


    </main>

@endsection
