@extends('user.layouts.app')
@push('css')
<style>
       ul.cvf_uploaded_files{list-style-type:none;margin:20px 0 0;padding:0}ul.cvf_uploaded_files li{background-color:#fff;border:1px solid #ccc;border-radius:5px;float:left;margin:20px 20px 0 0;padding:2px;width:150px;height:150px;line-height:150px;position:relative}ul.cvf_uploaded_files li img.img-thumb{width:150px;height:150px;object-fit:contain}ul.cvf_uploaded_files .ui-selected{background:red}ul.cvf_uploaded_files .highlight{border:1px dashed #000;width:150px;background-color:#ccc;border-radius:5px}ul.cvf_uploaded_files .delete-btn{width:24px;border:0;position:absolute;top:-12px;right:-14px}.bg-success{padding:7px}.forma-inputa-select{border:1px solid var(--color-border);border-radius:4px;padding:20px 15px 0;min-height:70px;transition:.2s cubic-bezier(.165, .84, .44, 1)}.hide_commercial_type,.hide_district{display:none}.select2-container{display:block;padding:.475rem 1.125rem;font-size:1rem;font-weight:400;line-height:1.5;color:#454056;background-color:#fff;background-clip:padding-box;border:1px solid #d5d2dc;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.5rem;box-shadow:inset 0 1px 2px transparent;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.select2-container--default .select2-selection--single .select2-selection__arrow b{top:80%!important}.drop-container{position:relative;display:flex;gap:10px;flex-direction:column;justify-content:center;align-items:center;height:200px;padding:20px;border-radius:10px;border:2px dashed #555;color:#444;cursor:pointer;transition:background .2s ease-in-out,border .2s ease-in-out}.drop-container:hover{background:#eee;border-color:#111}.drop-container:hover .drop-title{color:#222}.drop-title{color:#444;font-size:20px;font-weight:700;text-align:center;transition:color .2s ease-in-out}input[type=file]{width:350px;max-width:100%;color:#444;padding:5px;background:#fff;border-radius:10px;border:1px solid #555}input[type=file]::file-selector-button{margin-right:20px;border:none;background:#084cdf;padding:10px 20px;border-radius:10px;color:#fff;cursor:pointer;transition:background .2s ease-in-out}input[type=file]::file-selector-button:hover{background:#0d45a5}
    </style>
    <style>
.uploaded_images li {
    float: left;
    margin-right: 15px;
    margin-bottom: 15px;
}
.uploaded_images li img {
    height: 120px;
    width: 120px;
    object-fit: cover;
}
.uploaded_images {
    list-style:none;
}
</style>
@endpush
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
                    
                    #map {
            height: 400px;
            width: 100%;
        }
        #autocomplete {
            width: 300px;
            padding: 10px;
            font-size: 16px;
        }
                </style>




                <form class="row" action="{{ route('user.cars.update',$car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4  mt-2">

                    
<a href="" style="    margin-bottom: 20px;background: linear-gradient(90deg, rgba(86, 173, 56, 0.4) 0%, rgba(0, 132, 97, 0.4) 100%); width: 100%; padding-top: 10px; padding-bottom: 10px; border-radius: 10px; display: block; text-align: center; color: #31344B;">დააყენე
    

    <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M27.0714 0.732747C26.8163 0.766597 25.515 0.894559 24.1862 1.04887C22.8577 1.18966 21.1134 1.37356 20.2952 1.44665C18.0691 1.63133 13.2829 1.47743 9.43981 1.07777C6.62455 0.773041 5.94297 0.741445 5.17685 0.870054C2.50305 1.28654 0.776065 3.33905 0.700072 6.20693C0.686808 6.70746 0.847948 8.20083 1.06688 9.53328C1.71028 13.5303 1.76029 14.1679 1.66996 17.5768C1.59576 20.3771 1.52364 21.0791 1.11289 23.4508C0.797072 25.2699 0.638733 26.7007 0.595251 27.8367C0.553311 29.4194 0.575752 29.5825 0.904409 30.3086C1.3343 31.2541 2.06482 31.9639 3.07029 32.3966C4.1813 32.8863 6.5762 32.8956 10.1741 32.4495C11.6911 32.2595 13.7304 32.0564 14.7224 31.9879C17.0009 31.8452 22.4937 32.0991 25.3201 32.4853C26.9338 32.6905 27.5883 32.7349 28.1795 32.6423C29.8996 32.363 31.3446 31.3589 32.2007 29.8519C32.8607 28.6781 32.9511 27.2862 32.5407 24.5949C31.6175 18.5328 31.639 15.7041 32.6705 9.59909C33.1299 6.90382 33.2347 4.97077 32.9656 4.01603C32.562 2.58393 31.6399 1.53066 30.3814 1.05059C29.7985 0.832079 27.9167 0.646846 27.0714 0.732747ZM19.2756 9.12232C20.9052 9.73406 22.4194 11.1685 23.1392 12.785C24.3881 15.6474 23.6779 18.715 21.043 21.7046C20.2019 22.6435 17.7673 24.6366 16.8722 25.0867L16.4111 25.3182L15.454 24.5753C13.3699 22.9363 11.6316 20.8731 10.7458 18.9545C9.37943 15.9807 9.79294 12.9999 11.8983 10.8085C13.0678 9.59407 14.2212 8.98839 15.8199 8.74647C16.7469 8.60858 18.3345 8.78602 19.2756 9.12232Z" fill="#31344B"/>
    <path d="M15.7718 12.824C14.1466 13.3256 13.2069 14.8765 13.6783 16.3501C14.3438 18.4449 17.6977 19.0957 19.3151 17.4391C21.4577 15.2262 18.8947 11.893 15.7718 12.824Z" fill="#31344B"/>
    </svg>
    
    
@lang('gps_tracker_for_free')
    
    
    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="16" cy="16" r="15.5" stroke="#31344B"/>
    <path d="M23.7071 17.7071C24.0976 17.3166 24.0976 16.6834 23.7071 16.2929L17.3431 9.92893C16.9526 9.53841 16.3195 9.53841 15.9289 9.92893C15.5384 10.3195 15.5384 10.9526 15.9289 11.3431L21.5858 17L15.9289 22.6569C15.5384 23.0474 15.5384 23.6805 15.9289 24.0711C16.3195 24.4616 16.9526 24.4616 17.3431 24.0711L23.7071 17.7071ZM7 18H23V16H7V18Z" fill="#31344B"/>
    </svg>
    
    </a>
    
                    <h4>@lang('transport_add')</h4>

                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('choose_location_where_is_car')</p>

<!--                        <svg style="    position: absolute;-->
<!--    margin-top: 15px;-->
<!--    margin-left: 15px;" width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--<path d="M8.06523 4.17099C8.0692 3.53194 7.92932 2.90061 7.65653 2.32632C7.38374 1.75204 6.98543 1.25037 6.49273 0.860518C6.00002 0.470667 5.42627 0.203196 4.81631 0.0790082C4.20636 -0.0451792 3.57673 -0.0227168 2.97662 0.144636C2.37651 0.31199 1.82218 0.619702 1.35696 1.04372C0.891745 1.46775 0.528236 1.99659 0.294845 2.58893C0.061454 3.18127 -0.0354981 3.82105 0.0115704 4.45828C0.058639 5.09551 0.248451 5.71292 0.566172 6.26226L0.577935 6.27781C0.73252 6.54375 0.925753 6.73543 1.12067 7.01692L3.4596 10.1996C3.52722 10.2922 3.61488 10.3673 3.71564 10.4191C3.8164 10.4708 3.9275 10.4978 4.04014 10.4978C4.15278 10.4978 4.26388 10.4708 4.36464 10.4191C4.4654 10.3673 4.55305 10.2922 4.62067 10.1996L6.91929 7.06872C7.1285 6.81478 7.32372 6.549 7.50402 6.27262L7.51242 6.26226C7.8751 5.62842 8.06599 4.90631 8.06523 4.17099ZM4.03258 5.97214C3.68197 5.97214 3.33924 5.86529 3.04772 5.6651C2.75621 5.46491 2.529 5.18037 2.39483 4.84747C2.26066 4.51456 2.22555 4.14825 2.29395 3.79484C2.36235 3.44143 2.53118 3.1168 2.77909 2.86201C3.02701 2.60721 3.34288 2.43369 3.68674 2.3634C4.03061 2.2931 4.38704 2.32918 4.71096 2.46707C5.03487 2.60496 5.31173 2.83848 5.50651 3.13809C5.7013 3.43769 5.80526 3.78993 5.80526 4.15027C5.80571 4.6327 5.61978 5.09558 5.28833 5.4372C4.95688 5.77882 4.50703 5.97123 4.03762 5.97214H4.03258Z" fill="#31344B"/>-->
<!--</svg>-->

                        <input class="form-control" name="address" id="address" value="{{ $car->address }}" placeholder="@lang('enter_adressss')">
                    </div>


                    <div class="col-md-8">

                    <div id="map"></div>


                    </div>


{{--                    <div class="col-md-6 mt-2">--}}
{{--                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">Добавить по VIN</p>--}}
{{--                        <input class="form-control" name="vin_code" placeholder="Добавить по VIN" required style="border: 1px solid #48713A!important;border-radius: 20px;">--}}
{{--                    </div>--}}

                    <div class="col-md-12 mt-3">
                        <p>@lang('car_properties')</p>
                    </div>

                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('models')</p>
                        <select id="brand_id" class="form-control" name="brand_id" required>
                            <option value="">@lang('enterss')</option>
                            @foreach($brandsa as $brand)
                                <option value="{{ $brand->id }}" @selected($car->brand_id == $brand->id)>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('moodels')</p>
                        <select id="model_id" class="form-control" name="brand_model_id" required>
                            <option value="">@lang('enterss')</option>
                             @foreach($brandModels as $model)
                                <option value="{{ $model->id }}" @selected($car->brand_model_id == $model->id)>{{ $model->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">წელი</p>
                        <select class="form-control" name="year" required>
                            <option value="">@lang('chooses')</option>
                            @for($year = date('Y'); $year >= 1900; $year--)
                                <option value="{{ $year }}" @if($year == $car->year) selected @endif>{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('colors')</p>
                        <select id="color_id" class="form-control" name="color_id" required>
                            <option value="">@lang('enterss')</option>
                            @foreach($colors as $color)
                                <option value="{{ $color->id }}" @selected($car->color_id == $color->id)>{{ $color->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('gear_boxes')</p>
                        <select class="form-control" name="transmission" required>
                            <option value="">@lang('enterss')</option>
                            <option value="manual" @if('manual' == $car->transmission) selected @endif>@lang('manual')</option>
                            <option value="automatic" @if('automatic' == $car->transmission) selected @endif>@lang('automatic')</option>
                            <option value="tiptronic" @if('tiptronic' == $car->transmission) selected @endif>@lang('tiptronic')</option>
                            <option value="variator" @if('variator' == $car->transmission) selected @endif>@lang('variator')</option>
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('fuel_type')</p>
                        <select id="fuel_type" class="form-control" name="fuel_type" required>
                            <option value="">@lang('enterss')</option>
                            @foreach($fuelTypes as $fuelType)
                                <option value="{{ $fuelType['key'] }}" @selected($car->fuel_type == $fuelType['key'])>{{ $fuelType['key'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('engine')</p>
                        <select class="form-control" name="engine" required>
                            <option selected value="">@lang('enterss')</option>
                            @for($i=0.1; $i <= 13; $i += 0.1)
                                <option value="{{$i}}"
                                        @if (number_format($i,1) == $car->engine) selected @endif>{{number_format($i,1)}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('types')</p>
                        <select id="category_id" class="form-control" name="category_id" required>
                            <option>@lang('chooses')</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected($car->category_id == $category->id)>{{ $category->title_en }}</option>
                            @endforeach
                        </select>
                    </div>
                 
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('wamyvani_tvlebi')</p>
                        <select class="form-control" name="drive_wheels" required>
                            <option selected value="">@lang('enterss')</option>
                            <option value="fore"
                                    @if ( $car->drive_wheels == 'fore')  selected @endif>
                                @lang('wina')
                            </option>
                            <option value="back"
                                    @if ( $car->drive_wheels == 'back')  selected @endif>
                                @lang('ukana')
                            </option>
                            <option value="4x4"
                                    @if ( $car->drive_wheels == '4x4')  selected @endif>
                                4x4
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('places_numbers')</p>
                        <input class="form-control" name="number_of_seats" value="{{ $car->number_of_seats }}" required placeholder="შეიყვანეთ" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('car_number')</p>
                        <input class="form-control" name="vehicle_number" value="{{ $car->vehicle_number }}" required placeholder="შეიყვანეთ" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('prices_1')</p>
                        <input class="form-control field-amount" name="price_1" value="{{ $car->price_1 }}" placeholder="@lang('prices_1')" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('prices_2_4')</p>
                        <input class="form-control field-amount" name="price" value="{{ $car->price }}" required placeholder="@lang('prices_2_4')" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('prices_5_9')</p>
                        <input class="form-control field-amount" name="price_5_9" value="{{ $car->price_5_9 }}" required placeholder="@lang('prices_5_9')" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('price_10_plus')</p>
                        <input class="form-control field-amount" name="price_10" value="{{ $car->price_10 }}" required placeholder="@lang('price_10_plus')" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                    <div class="col-md-3  mt-2">
                        <p style="color:#000000;margin-bottom:10px;font-weight: bold;">@lang('deposit')</p>
                        <input class="form-control" name="deposit" value="{{ $car->deposit }}" placeholder="@lang('deposit')" style="border: 1px solid #48713A!important;border-radius: 20px;">
                    </div>
                <h5 class="mt-4">@lang('photoos')</h5>
                    <input type="file" name="image"  class="mb-4">
                    
                    
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="photos">
                    <h2 class="h4 mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>@lang('photos')</h2>
                    <div class="alert alert-info mb-4" role="alert">
                        <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                            <p class="fs-sm mb-1">@lang('photos_text')  </p>
                        </div>
                    </div>

                    <div class="row mb-8">


                        <div class="col-lg-12">

                            <div class = "form-group" style="    width: 100%;display: block;">
                                <label style="display:none;">@lang('choose_photoss')</label>

                                <label for="images" class="drop-container">
                                    <span class="drop-title">@lang('drags')</span>
                                    @lang('ors')

                                    <input type = "file" id="images" name = "upload[]" multiple = "multiple" class = " user_picked_files" />


                                </label>



                            </div>

                            <div class = "form-group cvf_order" style="display:none">
                                <label>Order</label>
                                <input type = "text" name="sortable" id="sortable" class = "form-control cvf_hidden_field" value = "" />
                            </div>

                            <!--<input type = "submit" class = "cvf_upload_btn btn btn-primary" value = "Upload" />-->

                            <ul class = "cvf_uploaded_files"></ul>

                        </div>

                    </div>


                </section>
                <ul class="uploaded_images ui-sortable mt-4" >
                            @foreach($car['images'] as $key => $image)
                                <li file="file{{ $key+1 }}.jpg" item="{{ $key }}" id="imageNo{{ $key+1 }}" data-img-id="{{ $image->id }}" class="listitemClass">
                                    <img class="img-thumb" src="{{ asset('storage/images/cars/'.$image->folder.'/'.$image->url) }}" alt="" width="150">

                                    <a href="javscript:void(0)" onclick="deletePhoto({{ $image['id'] }})"><img style="

                                                height: 20px;

                                                width: 20px;

                                                margin-left: -30px;

                                                margin-top: 10px;position:absolute;" src="{{asset('/admin/images/remove_btn.png')}}"></a>
                                </li>
                            @endforeach
                        </ul>
                    <div class="col-12 text-start" style="margin-bottom: 100px;">
                        <button type="submit" class="btn btn-primary mb-0 cvf_upload_btn" style="background-color: #20B486!important;border-radius: 20px;border: 0px;padding-left: 20px;padding-right: 20px;">დამატება</button>
                    </div>

                </form>

            </div>

        </div>


    </main>
@endsection
@push('js')
<script>
    $('.field-amount').keypress(function (eve) {
    if ((eve.which != 46 || $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 0)) {
        eve.preventDefault();
    }

// this part is when left part of number is deleted and leaves a . in the leftmost position. For example, 33.25, then 33 is deleted
    $('.field-amount').keyup(function (eve) {
        if ($(this).val().indexOf('.') == 0) {
            $(this).val($(this).val().substring(1));
        }
    });
});

</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {

            var storedFiles = [];
            //$('.cvf_order').hide();

            // Apply sort function
            function cvf_reload_order() {
                var order = $('.cvf_uploaded_files').sortable('toArray', {attribute: 'item'});
                $('.cvf_hidden_field').val(order);
            }

            function cvf_add_order() {
                $('.cvf_uploaded_files li').each(function(n) {
                    $(this).attr('item', n);
                });
                console.log('test');
            }

            $(function() {
                $('.uploaded_images').sortable({
                    cursor: 'move',

                    update: function (event, ui) {
                        getIdsOfImages();
                    },

                });
                $('.uploaded_images').disableSelection();
            });

            function getIdsOfImages() {

                var values = [];
                var imgIds = [];
                var assocArr = [];
                $('.listitemClass').each(function(index) {

                    values.push($(this).attr("id").replace("imageNo", ""));
                    imgIds.push($(this).data('img-id'));
                    assocArr.push({
                        'index': $(this).attr("id").replace("imageNo", "")
                    });
                    // console.log($(this).data('img-id'))
                });
                console.log(assocArr)
                $('#outputvalues').val(values);


                let join_selected_values = values.join(",");
                let imagesIdArr = imgIds.join(",");
                $.ajax({
                    url: '{{ route("user.cars.sortable.images") }}',
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'sortable_arr': join_selected_values,
                        'images_arr': imagesIdArr,
                        'id': '{{ $car->id }}'
                    },
                })
                    .done(function (response) {
                        // if (response.status === 1) {
                        //     reload();
                        //     Swal.fire('{{ __('succcesd') }}', '{{ __('successfully_send') }}', 'success');

                        // } else {
                        //     Swal.fire('Error!', 'Please try again', 'error');
                        // }
                    })
                    .fail(function () {
                        // Swal.fire('Oops...', 'Please try again!', 'error');
                    });


            }


            $(function() {
                $('.cvf_uploaded_files').sortable({
                    cursor: 'move',
                    placeholder: 'highlight',
                    start: function (event, ui) {
                        ui.item.toggleClass('highlight');
                    },
                    stop: function (event, ui) {
                        ui.item.toggleClass('highlight');
                    },
                    update: function () {
                        //cvf_reload_order();
                    },
                    create:function(){
                        var list = this;
                        resize = function(){
                            $(list).css('height','auto');
                            $(list).height($(list).height());
                        };
                        $(list).height($(list).height());
                        $(list).find('img').load(resize).error(resize);
                    }
                });
                $('.cvf_uploaded_files').disableSelection();
            });

            $('body').on('change', '.user_picked_files', function() {

                var files = this.files;
                var i = 0;
                if(files.length > 6){
                    $(this).val("");
                    Swal.fire('შეცდომა!','მაქსიმუმ შეგიძლიათ ატვირთოთ 6 ფოტო','warning');
                    return
                }
                for (i = 0; i < files.length; i++) {
                    var readImg = new FileReader();
                    var file = files[i];

                    if (file.type.match('image.*')){
                        storedFiles.push(file);
                        readImg.onload = (function(file) {
                            return function(e) {
                                $('.cvf_uploaded_files').append(
                                    "<li file = '" + file.name + "'>" +
                                    "<img class = 'img-thumb' src = '" + e.target.result + "' />" +
                                    "<a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = '/front/img/remove_btn.png' /></a>" +
                                    "</li>"
                                );
                            };
                        })(file);
                        readImg.readAsDataURL(file);
                        cvf_add_order()
                        cvf_reload_order()
                    } else {
                        alert('the file '+ file.name + ' is not an image<br/>');
                    }

                    if(files.length === (i+1)){
                        setTimeout(function(){
                            cvf_add_order();
                        }, 1000);
                    }
                }
            });

            // Delete Image from Queue
            $('body').on('click','a.cvf_delete_image',function(e){
                e.preventDefault();
                $(this).parent().remove('');

                var file = $(this).parent().attr('file');
                for(var i = 0; i < storedFiles.length; i++) {
                    if(storedFiles[i].name == file) {
                        storedFiles.splice(i, 1);
                        break;
                    }
                }

                //cvf_reload_order();

            });




            // AJAX Upload
            $('body').on('click', '.cvf_upload_btn', function(e){

                // e.preventDefault();
                cvf_reload_order();
                console.log('testsss')
                //$(".cvf_uploaded_files").html('<p><img src = "loading.gif" class = "loader" /></p>');
                var data = new FormData();

                var items_array = $('.cvf_hidden_field').val();
                var items = items_array.split(',');

                for (var i in items){
                    var item_number = items[i];
                    data.append('files' + i, storedFiles[item_number]);

                }
                data.append('order', items_array)


            });

        });

        $(document).ready(function(){
            $('#city_id').on('change', function() {
                if ( this.value == '1')
                {
                    $(".hide_district").show();
                }
                else
                {
                    $(".hide_district").hide();
                }
            });
            
            

            // $('#real_estate_type').on('change', function() {
            //     console.log(this.value)
            //     if (this.value == 1)
            //     {
            //         $(".show_flat").show();
            //         $('#show_flat').prop('required',true)
            //     }
            //     else if(this.value == 4){
            //         $(".hide-col").hide();
            //         $('.disable_required').prop('required',false)
            //     }
            //     else
            //     {
            //         $(".hide_commercial_type").hide();
            //         $('#commercial_type').prop('required',false)
                    
            //         $(".hide-col").show();
            //         $('.disable_required').prop('required',true)
            //     }
            // });
        });
    </script>
    
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

        function deletePhoto(id) {
            Swal.fire({
                title: 'ნამდვილად გსურთ ფოტოს წაშლა?',
                text: "",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'დიახ!',
                cancelButtonText: 'არა!',
                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $('.swal2-confirm').html('<i class="fa fa-spinner fa-spin mr-1"></i>');
                        $.ajax({
                            url: "{{ route('user.cars.delete.image') }}",
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                '_token': '{{ csrf_token() }}',
                                'id': id
                            },
                        })
                            .done(function (response) {
                                if (response.status === 1) {
                                    Swal.fire({
                                        title: 'წარმატებული!',
                                        text: "ფოტო წარმატებით წაიშალა",
                                        icon: 'success',
                                        allowOutsideClick:false,
                                    }).then((result) => {
                                        if (result.value) {
                                            location.reload();
                                        }
                                    })
                                } else {
                                    Swal.fire('Error!', 'Please try again', 'error');
                                }
                            })
                            .fail(function () {
                                Swal.fire('Oops...', 'Please try again!', 'error');
                            });
                    });
                },
                allowOutsideClick: true
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk&libraries=places"></script>
<script>
        var map;
        var marker;
        var autocomplete;

        function initMap() {
            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 37.7749, lng: -122.4194}, // Example center (San Francisco)
                zoom: 13 // Adjust the zoom level as needed
            });

            // Initialize the marker
            marker = new google.maps.Marker({
                map: map,
                draggable: true // Make the marker draggable if needed
            });

            // Initialize the autocomplete
            var input = document.getElementById('address');
            autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['(cities)'],
                componentRestrictions: { country: 'GE' } // Restrict suggestions to Georgia (GE)
            });

            // When the user selects an address from the dropdown, update the marker
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (place.geometry) {
                    // Center the map on the selected place
                    map.setCenter(place.geometry.location);
                    map.setZoom(15); // Adjust the zoom level as needed

                    // Set the position of the marker
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);
                } else {
                    alert('No details available for input: \'' + place.name + '\'');
                }
            });

            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
            });
        }

        // Call the initMap() function after the API has loaded
        window.onload = initMap;
    </script>
@endpush
