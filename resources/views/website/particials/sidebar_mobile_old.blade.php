


<div class=""  >

    
    <h5 style="    color: #232538;
    font-size: 20px;
    margin-bottom: 20px;
    position: absolute;
    margin-top: -34px;
    margin-left: 20px;">@lang('filter')</h5>
    <div class=" flex-column p-3 p-xl-0">
        <form style="border: 1px solid #AED7A0;
    border-radius: 30px;">

            <form class="rounded-3 shadow">

              
                <div class="card card-body rounded-0 rounded-top p-4" style="    background: #0000;">

                    <h6 class="mb-2">@lang('types')</h6>

                    <div class="col-12">
                    @foreach($categories as $category)
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category_{{ $category->id }}" name="category_ids[]"
                                @if(isset(\request()->category_ids) && in_array($category->id,\request()->category_ids)) checked @endif
                                >
                                <label class="form-check-label" for="category_{{ $category->id }}">{{ $category->translated_title }}</label>
                            </div>
                            <span class="small">({{ $category->cars->count() }})</span>
                        </div>
                    @endforeach
                    </div>
                </div>


                <div class="card card-body rounded-0 rounded-top p-4">

                    <h6 class="mb-2">@lang('models')</h6>

                    <div class="col-12">
                    @foreach($brands as $brand)
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $brand->id }}" name="brand_ids[]" id="brand-{{ $brand->id }}"
                                @if(isset(\request()->brand_ids) && in_array($brand->id,\request()->brand_ids)) checked @endif
                                >
                                <label class="form-check-label" for="brand-{{ $brand->id }}">{{ $brand->name }}</label>
                            </div>
                            <span class="small">({{ $brand->cars->count() }})</span>
                        </div>
                    @endforeach
                    </div>
                </div>


                <!-- <div class="card card-body rounded-0 rounded-top p-4">

                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-left: 10px;">დეპოზიტით</label>
                </div>
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-left: 10px;">დეპოზიტის გარეშე </label>
                </div>

                </div> -->


              


                <div class="card card-body rounded-0 rounded-top p-4" style="background: #0000;">
                    <div class="d-flex justify-content-between p-2 p-xl-0 ">
                        <button class="btn btn-primary mb-0" style="border-radius:30px;border:0;background-color:#20B486; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;">@lang('searchs_button')</button>


                    </div>
                </div>
            </form>
    </div>




</div>

</aside>
