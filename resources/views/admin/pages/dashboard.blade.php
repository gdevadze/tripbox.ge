@extends('admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-8">
                    <div class="row">

                        <div class="col-lg-4">
                            <a href="#">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">

                                        <div class="d-flex flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-2">მომხმარებლები</p>
                                                <h5 class="mb-0">{{ $usersCount }}</h5>
                                            </div>

                                            <div class="avatar-sm ms-auto">
                                                <div
                                                    class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                    <i class="bx bxs-book-bookmark"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- end row -->


                </div>
                <!-- end col -->


                <!-- end col -->

            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
@endsection
