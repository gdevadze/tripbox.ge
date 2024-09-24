@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">სერვისის რედაქტირება</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('admin.settings.services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="example-text-input"
                                               class="col-md-2 col-form-label">დასახელება</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="{{ $service->title }}"
                                                   required
                                                   name="title" id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="text" class="col-md-2 col-form-label">აღწერა</label>
                                        <div class="col-md-10">
                                            <textarea name="description" id="text" placeholder="სრული ინფორმაცია"
                                                      class="form-control"
                                                      required
                                                      type="text">{{ $service->description }}</textarea>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light">
                                        დამატება
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

@endsection
@push('js')

@endpush
