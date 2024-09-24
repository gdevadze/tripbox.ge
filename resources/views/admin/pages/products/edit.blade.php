@extends('admin.layouts.app')


@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">პროდუქციის რედაქტირება</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            {{--                            <h4 class="card-title">Default Datatable</h4>--}}
                            {{--                            <p class="card-title-desc">DataTables has most features enabled by--}}
                            {{--                                default, so all you need to do to use it with your own tables is to call--}}
                            {{--                                the construction function: <code>$().DataTable();</code>.--}}
                            {{--                            </p>--}}
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
                            <form action="{{ route('admin.products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <strong>დასახელება:</strong>
                                        <input type="text" class="form-control" value="{{ $product->title }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <strong>ფასი:</strong>
                                        <input type="text" class="form-control" value="{{ $product->price }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <strong>კატეგორია:</strong>
                                        <select class="form-control" name="category_id">
                                            <option>აირჩიეთ</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->infinati_category_id }}" @selected($category->infinati_category_id == $product->category_id)>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <strong>ფასი:</strong>
                                        <textarea name="description" id="text" placeholder="სრული ინფორმაცია" class="form-control" type="text">{!! $product->description !!}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong>სურათი:</strong>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <button type="submit" class="btn btn-primary mb-2">განახლება</button>
                                    </div>
                                </div>
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
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('text', {
            language: 'en'
        })
    </script>
    <script>
        $(document).ready(function () {
            $('#real_estate_type').on('change', function () {
                if (this.value == '1') {
                    $(".hide-district").show();
                } else {
                    $(".hide-district").hide();
                }
            });
        });
    </script>
@endpush
