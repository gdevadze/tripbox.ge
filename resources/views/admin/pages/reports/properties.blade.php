@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">რეპორტი</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    {{--                                    <div class="stamp text-center stamp-lg bg-azure"></div>--}}
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">ჯამური შეკვეთები</h5>
                                        <p class="text-muted mb-0"><strong>{{ $properties }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-6 col-md-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <div class="item-box text-center">
                                    {{--                                    <div class="stamp text-center stamp-lg bg-primary"><i class="fa fa-money"></i></div>--}}
                                    <div class="item-box-wrap">
                                        <h5 class="mb-2">მომხმარებლები</h5>
                                        <p class="text-muted mb-0"><strong>{{ $users }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div> <!-- container-fluid -->
    </div>

@endsection
