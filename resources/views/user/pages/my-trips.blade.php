@extends('user.layouts.app')

@section('content')
    <main>


    @include('user.general.header')

<style>
.my-trip-box {
    border: 1px solid #55555529;
    border-radius: 20px;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 30px;
}
</style>

        <div class="page-content">


        @include('user.particials.user-header')

            <div class="page-content-wrapper p-xxl-4">


            <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">ჩემი მოგზაურობები</h4>

            
            <div class="my-trip-box">


           
            
            <div class="row mt-2">


            <div class="col">

            <p>მოგზაურობები</p>
            <h5>5 დღე</h5>
            </div>

            <div class="col">

            <p>იმუგზაორეთ</p>
            <h5>4 ქალაქში</h5>
            </div>

            <div class="col">

            <p>მოინახულეთ</p>
            <h5>3 ლოკაცია</h5>
            </div>

            <div class="col">

            <p>გაჩერდით</p>
            <h5>1 სასტუმროში</h5>
            </div>

            <div class="col">

            <p>ჯარიმები</p>
            <h5>0</h5>
            </div>



            </div>
            </div>


            <a href="" style="background: linear-gradient(90deg, rgba(86, 173, 56, 0.4) 0%, rgba(0, 132, 97, 0.4) 100%);
    width: 100%;
    text-align: center;
    margin-top: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    border-radius: 15px;
    color: #032E2E;
">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="9" y1="4.37115e-08" x2="9" y2="18" stroke="black" stroke-width="2"/>
<line x1="18.0003" y1="9" x2="0.000322618" y2="9.00579" stroke="black" stroke-width="2"/>
</svg>
    
            დაგეგმეთ თქვენი მოგზაურობა ჩვენთან ერთად</a>


            <div class="d-flex  p-2 p-xl-0 mt-xl-4">
				<button class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#78BC61; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">აქტიური</button>
				<button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">დაგეგმილი </button>
				<button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">დასრულებული </button>
	
			</div>


            <br />

            @foreach($trips as $trip)
            <div class="col-xl-12 col-xxl-12 mt-5">
                <div class="vstack gap-4">

                    
                    <div class="card shadow p-2">
                        <div class="row g-0">
                            

                        
                            <div class="col-md-9">
                                <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                    
                                    <h5 class="card-title mb-1"><a href="#">{{ $trip->title }}</a></h5>
                                    
                                    <ul class="nav nav-divider mt-3">
                                    @foreach($trip->trip_details as $tripDetail)
                                        @if($tripDetail->img)
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <img src="{{ $tripDetail->img }}" class="card-img rounded-0" alt="">
                                        </div>
                                        @endif
                                        <li class="nav-item">ადგილი: {{ $tripDetail->location_name }}</li>
                                    @endforeach
                                        
                                    </ul>

                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            

            


            </div>




        </div>


    </main>

@endsection