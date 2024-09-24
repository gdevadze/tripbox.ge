@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">საკონტაქტო გვერდი</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif
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
                                <form action="{{ route('admin.settings.contact.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @foreach($contactSettings as $contactSetting)
                                    <div class="mb-3 row">
                                        <label for="setting-{{ $contactSetting->id }}" class="col-md-2 col-form-label">{{ $contactSetting->title }}</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="{{ $contactSetting->value }}"
                                                   name="settings[{{ $contactSetting->key }}]" id="setting-{{ $contactSetting->id }}">
                                        </div>
                                    </div>
                                    @endforeach
                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light">
                                        განახლება
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
