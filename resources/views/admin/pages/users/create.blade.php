@extends('admin.layouts.app')


@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">მომხმარებლის დამატება</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
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
                            <form action="{{ route('admin.users.store') }}" method="POST">
                                @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <strong>სახელი:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'სახელი','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <strong>გვარი:</strong>
                                    {!! Form::text('surname', null, array('placeholder' => 'გვარი','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <strong>მობილური:</strong>
                                    {!! Form::text('tel', null, array('placeholder' => 'მობილური','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <strong>ელ. ფოსტა:</strong>
                                    {!! Form::text('email', null, array('placeholder' => 'ელ. ფოსტა','class' => 'form-control')) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <strong>პაროლი:</strong>
                                    {!! Form::password('password', array('placeholder' => 'პაროლი','class' => 'form-control')) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <strong>პაროლის დადასტურება:</strong>
                                    {!! Form::password('confirm-password', array('placeholder' => 'პაროლის დადასტურება','class' => 'form-control')) !!}
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <strong>როლი:</strong>
                                        {!! Form::select('roles', $roles,null, array('class' => 'form-control','id' => 'role_id')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 hide-district" style="margin-bottom:15px; display:none">
                                    <div class="form-group">
                                        <strong>პრომო კოდი:</strong>
                                        {!! Form::text('promo_code', null, array('placeholder' => 'პრომო კოდი','class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary mb-2">განახლება</button>
                                </div>

                                {!! Form::close() !!}

                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $('#role_id').on('change', function() {
                if ( this.value == 'Influence')
                {
                    $(".hide-district").show();
                }
                else
                {
                    $(".hide-district").hide();
                }
            });
        });
    </script>
@endpush
