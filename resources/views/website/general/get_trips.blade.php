@foreach($trips as $trip)
    <div class="card shadow rounded-3 overflow-hidden" style="    margin-top: 20px;">
        <div class="row g-0 align-items-center">
        
            

            
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between" style="        border-bottom: 1px solid #eee;
    padding: 8px 8px 8px 32px;
    padding-left: 0px;
    margin-bottom: 20px;" >

                    
                    <h6 class="card-title"><a href="javascript:0;" class="stretched-link" style="      font-size: 15px;
    padding: 0px;
    color: #92d0b5;   ">@lang('trip'): {{ $trip->title }}</a></h6>
                    <p class="mb-0" style="    font-size: 13px;">@lang('places_numbers'): {{ $trip->trip_details()->count() }}</p>
                    </div>


                    @foreach($trip->trip_details as $tripDetail)
                    <div class="d-flex"  style="    height: 60px;
    margin-bottom: 10px;">
                    

                    <div class="">
                    @if($tripDetail->img)
                        <img src="{{ $tripDetail->img }}" class="card-img rounded-0" style="       height: 50px;
    border-radius: 10px !important;
    width: 50px;
    object-fit: cover;" alt="">

    @else

    <img src="/assets/images/logo_sidebar_icon.png" class="card-img rounded-0" style="       height: 50px;
    border-radius: 10px !important;
    width: 50px;
    object-fit: cover;" alt="">
                        @endif
                    </div>

                    
                    <p class="mb-0" style="   font-size: 13px;
    margin-left: 10px;
    margin-top: 16px;">@lang('pllaces'): {{ $tripDetail->location_name }}</p>

                    </div>
                    @endforeach


                    
                </div>
            </div>
        </div>
    </div>
@endforeach