@extends('user.layouts.app')

@section('content')

    <main>


    
    @include('user.general.header')



        <div class="page-content">


        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">












                <style>
                    .table th {
                        color: #61657E!important;
                        font-size:13px;
                    }
                    .table tr {


                    }
                    .table {
                        --bs-table-border-color: #dfdfe300!important;
                    }
                </style>

                <h4>ავტომობილის დამატება</h4>


                <form class="row" action="{{ route('user.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">ქალაქი</p>
                        <select id="city_id" class="form-control" name="city_id" required>
                            <option value="">შეიყვანეთ</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->city_en }}</option>
                            @endforeach
                        </select>
                    </div>



{{--                    <div class="col-md-6 mt-2">--}}
{{--                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">Добавить по VIN</p>--}}
{{--                        <input class="form-control" name="vin_code" placeholder="Добавить по VIN" required style="border: 1px solid #48713A!important;border-radius: 20px;">--}}
{{--                    </div>--}}

                    <div class="col-md-12 mt-3">
                        <p>ავტომობილის მონაცემები</p>
                    </div>

                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">მარკა</p>
                        <select id="brand_id" class="form-control" name="brand_id" required>
                            <option value="">შეიყვანეთ</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">მოდელი</p>
                        <select id="model_id" class="form-control" name="brand_model_id" required>
                            <option value="">შეიყვანეთ</option>

                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">ფერი</p>
                        <select id="color_id" class="form-control" name="color_id" required>
                            <option value="">შეიყვანეთ</option>
                            @foreach($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">გადაცემათა კოლოფი</p>
                        <select class="form-control" name="transmission" required>
                            <option value="">შეიყვანეთ</option>
                            <option value="manual" @if('manual' == old('transmission')) selected @endif>@lang('manual')</option>
                            <option value="automatic" @if('automatic' == old('transmission')) selected @endif>@lang('automatic')</option>
                            <option value="tiptronic" @if('tiptronic' == old('transmission')) selected @endif>@lang('tiptronic')</option>
                            <option value="variator" @if('variator' == old('transmission')) selected @endif>@lang('variator')</option>
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">მატორი</p>
                        <select class="form-control" name="engine" required>
                            <option selected value="">შეიყვანეთ</option>
                            @for($i=0.1; $i <= 13; $i += 0.1)
                                <option value="{{$i}}"
                                        @if (number_format($i,1) == old('engine')) selected @endif>{{number_format($i,1)}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">ტიპი</p>
                        <select id="category_id" class="form-control" name="category_id" required>
                            <option>არჩევა</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title_en }}</option>
                            @endforeach
                        </select>
                    </div>
                 
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">წამყვანი თვლები</p>
                        <select class="form-control" name="drive_wheels" required>
                            <option selected value="">შეიყვანეთ</option>
                            <option value="fore"
                                    @if ( old('drive_wheels') == 'fore')  selected @endif>
                                @lang('wina')
                            </option>
                            <option value="back"
                                    @if ( old('drive_wheels') == 'back')  selected @endif>
                                @lang('ukana')
                            </option>
                            <option value="4x4"
                                    @if ( old('drive_wheels') == '4x4')  selected @endif>
                                4x4
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">ადგილების რაოდენობა</p>
                        <input class="form-control" name="number_of_seats" required placeholder="შეიყვანეთ" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">ავტომობილის ნომერი</p>
                        <input class="form-control" name="vehicle_number" placeholder="შეიყვანეთ" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">GPS-ს კოდი</p>
                        <input class="form-control" name="vehicle_number" placeholder="შეიყვანეთ" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>


                <h5 class="mt-4">ფოტოები</h5>
                    <input type="file" name="image" multiple class="mb-4">



                    <div class="col-12 text-start">
                        <button type="submit" class="btn btn-primary mb-0" style="background-color: #78BC61!important;border-radius: 20px;border: 0px;padding-left: 20px;padding-right: 20px;">დამატება</button>
                    </div>

                </form>

            </div>

        </div>


    </main>
@endsection
@push('js')
    <script>
        $('#brand_id').on('change', function () {

            let select = $('#brand_id').val();

            console.log(select)

            $.ajax({

                type: 'POST',

                url: "{{ route('get_models') }}",

                data: {

                    _token: "{{@csrf_token()}}",

                    'select': select

                },

                success: function (data) {

                    let html, models;

                    html += '<option value=""></option>'

                    for (let i = 0; i < data.length; i++) {

                        models = data[i];

                        html += '<option value="' + models.id + '" data-tokens="'+ models.name+'">' + models.name + '</option>'

                    }

                    $('#model_id').html(html);

                    // $('#model_id').selectpicker('refresh');



                }

            }).fail(function () {

                console.log('something wrong at = route|profile.fetch');

            });

        });
    </script>
@endpush
