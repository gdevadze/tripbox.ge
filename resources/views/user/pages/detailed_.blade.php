@extends('user.layouts.app')

@section('content')
    <main>

<style>
        /* Set the size of the map container */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
        
    @include('user.general.header')


        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4" style="margin-top: 0px !important;">

            <!-- -->
<!-- steps -->
<style>
.wizard-content .wizard>.steps>ul>li:after,.wizard-content .wizard>.steps>ul>li:before{content:'';z-index:9;display:block;position:absolute}.wizard-content .wizard{width:100%;overflow:hidden}.wizard-content .wizard .content{margin-left:0!important}.wizard-content .wizard>.steps{position:relative;display:block;width:100%}.wizard-content .wizard>.content>.title,.wizard-content .wizard>.steps .current-info{position:absolute;left:-99999px}.wizard-content .wizard>.steps>ul{display:table;width:100%;table-layout:fixed;margin:0;padding:0;list-style:none}.wizard-content .wizard>.steps>ul>li{display:table-cell;width:auto;vertical-align:top;text-align:center;position:relative}.wizard-content .wizard>.steps>ul>li a{position:relative;padding-top:52px;margin-top:20px;margin-bottom:20px;display:block}.wizard-content .wizard>.steps>ul>li:before{left:0}.wizard-content .wizard>.steps>ul>li:after{right:0}.wizard-content .wizard>.steps>ul>li:first-child:before,.wizard-content .wizard>.steps>ul>li:last-child:after{content:none}.wizard-content .wizard>.steps>ul>li.current>a{color:#2f3d4a;cursor:default}.wizard-content .wizard>.steps>ul>li.current .step{border-color:#076D6D;background-color:#fff;color:#076D6D}.wizard-content .wizard>.steps>ul>li.disabled a,.wizard-content .wizard>.steps>ul>li.disabled a:focus,.wizard-content .wizard>.steps>ul>li.disabled a:hover{color:#999;cursor:default}.wizard-content .wizard>.actions>ul>li.disabled>a,.wizard-content .wizard>.actions>ul>li.disabled>a:focus,.wizard-content .wizard>.actions>ul>li.disabled>a:hover,.wizard-content .wizard>.steps>ul>li.done a,.wizard-content .wizard>.steps>ul>li.done a:focus,.wizard-content .wizard>.steps>ul>li.done a:hover{color:#999}.wizard-content .wizard>.steps>ul>li.done .step{background-color:#076D6D;border-color:#076D6D;color:#fff}.wizard-content .wizard>.steps>ul>li.error .step{border-color:#f62d51;color:#f62d51}.wizard-content .wizard>.steps .step{background-color:#fff;display:inline-block;position:absolute;top:0;left:50%;margin-left:-24px;z-index:10;text-align:center}.wizard-content .wizard>.content{overflow:hidden;position:relative;width:auto;padding:0;margin:0}.wizard-content .wizard>.content>.body{padding:0 20px}.wizard-content .wizard>.content>iframe{border:0;width:100%;height:100%}.wizard-content .wizard>.actions{position:relative;display:block;text-align:right;padding:0 20px 20px}.wizard-content .wizard>.actions>ul{float:right;list-style:none;padding:0;margin:0}.wizard-content .wizard>.actions>ul:after{content:'';display:table;clear:both}.wizard-content .wizard>.actions>ul>li{float:left}.wizard-content .wizard>.actions>ul>li+li{margin-left:10px}.wizard-content .wizard>.actions>ul>li>a{background:#076D6D;color:#fff;display:block;padding:7px 12px;border-radius:4px;border:1px solid transparent}.wizard-content .wizard>.actions>ul>li>a:focus,.wizard-content .wizard>.actions>ul>li>a:hover{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.05) inset;box-shadow:0 0 0 100px rgba(0,0,0,.05) inset}.wizard-content .wizard>.actions>ul>li>a:active{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.1) inset;box-shadow:0 0 0 100px rgba(0,0,0,.1) inset}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]{background-color:#fff;color:#54667a;border:1px solid #d9d9d9}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:focus,.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:hover{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.02) inset;box-shadow:0 0 0 100px rgba(0,0,0,.02) inset}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]:active{-webkit-box-shadow:0 0 0 100px rgba(0,0,0,.04) inset;box-shadow:0 0 0 100px rgba(0,0,0,.04) inset}.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"],.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:focus,.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]:hover{-webkit-box-shadow:none;box-shadow:none}.wizard-content .wizard.wizard-circle>.steps>ul>li:after,.wizard-content .wizard.wizard-circle>.steps>ul>li:before{top:45px;width:50%;height:3px;background-color:#076D6D}.wizard-content .wizard.wizard-circle>.steps>ul>li.current:after,.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before,.wizard-content .wizard.wizard-notification>.steps>ul>li.current:after,.wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:after,.wizard-content .wizard.wizard-notification>.steps>ul>li.current~li:before{background-color:#f3f3f3}.wizard-content .wizard.wizard-circle>.steps .step{width:50px;height:50px;line-height:45px;border:3px solid #f3f3f3;font-size:1.3rem;border-radius:50%}.wizard-content .wizard.wizard-notification>.steps>ul>li:after,.wizard-content .wizard.wizard-notification>.steps>ul>li:before{top:39px;width:50%;height:2px;background-color:#076D6D}.wizard-content .wizard.wizard-notification>.steps>ul>li.current .step{border:2px solid #076D6D;color:#076D6D;line-height:36px}.wizard-content .wizard.wizard-notification>.steps>ul>li.current .step:after,.wizard-content .wizard.wizard-notification>.steps>ul>li.done .step:after{border-top-color:#076D6D}.wizard-content .wizard.wizard-notification>.steps>ul>li.done .step{color:#fff}.wizard-content .wizard.wizard-notification>.steps .step{width:40px;height:40px;line-height:40px;font-size:1.3rem;border-radius:15%;background-color:#f3f3f3}.wizard-content .wizard.wizard-notification>.steps .step:after{content:"";width:0;height:0;position:absolute;bottom:0;left:50%;margin-left:-8px;margin-bottom:-8px;border-left:7px solid transparent;border-right:7px solid transparent;border-top:8px solid #f3f3f3}.wizard-content .wizard.vertical>.steps{display:inline;float:left;width:20%}.wizard-content .wizard.vertical>.steps>ul>li{display:block;width:100%}.wizard-content .wizard.vertical>.steps>ul>li.current:after,.wizard-content .wizard.vertical>.steps>ul>li.current:before,.wizard-content .wizard.vertical>.steps>ul>li.current~li:after,.wizard-content .wizard.vertical>.steps>ul>li.current~li:before,.wizard-content .wizard.vertical>.steps>ul>li:after,.wizard-content .wizard.vertical>.steps>ul>li:before{background-color:transparent}@media (max-width:768px){.wizard-content .wizard>.steps>ul{margin-bottom:20px}.wizard-content .wizard>.steps>ul>li{display:block;float:left;width:50%}.wizard-content .wizard>.steps>ul>li>a{margin-bottom:0}.wizard-content .wizard>.steps>ul>li:first-child:before{content:''}.wizard-content .wizard>.steps>ul>li:last-child:after{content:'';background-color:#076D6D}.wizard-content .wizard.vertical>.steps{width:15%}}@media (max-width:480px){.wizard-content .wizard>.steps>ul>li{width:100%}.wizard-content .wizard>.steps>ul>li.current:after{background-color:#076D6D}.wizard-content .wizard.vertical>.steps>ul>li{display:block;float:left;width:50%}.wizard-content .wizard.vertical>.steps{width:100%;float:none}}
.wizard-content .wizard {
    width: 100%;
    overflow: visible;
}
.wizard-content .wizard>.content>.body {
    padding:0px;
}
.wizard-content .wizard>.content {
    overflow: visible;
    position: relative;
}
</style>


            <!-- ... -->
            
            <div class="card-header border-bottom p-4">
							<h1 class="mb-0 fs-3" style="font-size: 25px!important;margin-bottom: 20px;">ჩემი ჯავშანი #1</h1>
						</div>
         

<!-- -->

<div class="">
  <div class="panel">
    <div class="panel-body wizard-content">
<form id="example-form" action="#" class="tab-wizard wizard-circle wizard clearfix">
    <h6>შეკვეთის დეტალები</h6>
    <section>
      <br/>
      

<div id="map"></div>
{{--      <h5 style="margin-bottom:20px;">გოოგლუს რუკა მოხაზული საიდან სად მიდის</h5>



    <div class="row g-4">

        <img src="{{ asset('assets/images/trip-box-image.png') }}">

    </div>
    --}}







    <!-- order info -->


    <!--<div id="mapsite"></div>-->
    
    

   








<div class="row mt-4">

<div class="col">

<div class="card shadow rounded-2"  style="    padding: 20px;">



<p>სულ თანხა</p>
<h5>{{ $order->price }}$</h5>

</div>
</div>
<div class="col">
<div class="card shadow rounded-2" style="    padding: 20px;">
<p>გასავლელი მანძილი</p>
<h5>{{ $distance }}</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>ხანგძლივობა</p>
<h5>{{ \Carbon\Carbon::parse($order->date_from)->diffInDays($order->date_to) }} დღე</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>გზად ნახავთ</p>
<h5>5 ქალაქს</h5>
</div>
</div>


</div>


<div class="row">
<div class="col-md-8">


<!-- car -->
<div class="card  shadow p-4" style="margin-top: 30px;">
						
						<div class="card-body p-0">
							<div class="row g-4 align-items-center">
							
								<div class="col-md-4">
									<div class="bg-light rounded-3 px-4 py-5">
										<img src="/assets/images/car-inside.png" alt="">
									</div>
								</div>

								
								<div class="col-md-8">
							
									<div class="d-sm-flex justify-content-sm-between">
									
										<div>
											<h4 class="card-title mb-2">{{ $order->car->brand->name }} {{ $order->car->brand_model->name }}</h4>
											<ul class="nav nav-divider h6 fw-normal mb-2">
												<li class="nav-item">{{ $order->car->category->title }}</li>
												<li class="nav-item">{{ $order->car->transmission_title }}</li>
												<li class="nav-item">{{ $order->car->number_of_seats }} ადგლი</li>
											</ul>
										</div>
									
										<ul class="list-inline mb-0">
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
										</ul>
									</div>

								
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
										</li>
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>{{ $order->car->drive_wheels_title }} </span>
										</li>
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>ბენზინი</span>
										</li>
									</ul>
								</div>
							</div>
						</div>	
					

						<div class="card-footer p-0 pt-4">
							<div class="hstack gap-3 flex-wrap">
							
								<h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									ულიმიტო გარბენი
								</h6>
			
						
								<h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									მიწოდება 45 წუთში
								</h6>
                                <h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									ხანგძლივობა 4 დღე
								</h6>
							</div>
						</div>




                        <!-- -->
                        <div class="row g-4" style="margin-top:20px;">

								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">გასვლა</h6>
										<h5 class="mb-1">{{ $order->formatted_date_from }}</h5>
										<small><i class="bi bi-alarm me-1"></i>12:30 </small>
									</div>
								</div>

							
								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">დატოვება</h6>
										<h5 class="mb-1">{{ $order->formatted_date_to }}</h5>
										<small><i class="bi bi-alarm me-1"></i>4:30</small>
									</div>
								</div>

					
								<!-- <div class="col-lg-4">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">Rooms &amp; Guests</h6>
										<h5 class="mb-1">2 G - 1 R</h5>
										<small><i class="bi bi-brightness-high me-1"></i>3 Nights - 4 Days</small>
									</div>
								</div> -->
							</div>

                        <!-- .... -->


                        <div class="row" style="margin-top:30px;">
					
					<div class="col-md-6">
						<div class="d-flex">

						<style>

							.car-user-page{
								padding: 60px 10px;
border-radius: 20px;
								box-shadow: 2px 2px 10px 0px #00000026;

							}
							.pickupes {
								margin-right: 15px;
								width: 15%;
							}
							.pickupes h4 {
								font-size: 15px;
							}
							.pickupes p {
								font-size: 13px;
							}
							.search-inputes {
								width: 100%;
								margin-right: 15px;
							}
							.search-inputes input {
								margin-bottom: 20px;
								border-radius: 20px;border: 1px solid #D1D1D1
							}
							.search-pickups-infos {
								width: 25%;
								text-align: center;
							}
						</style>
						
						<div class="search-inputes">
							<input class="form-control" id="delivery_address" placeholder="მიწოდების მისამართი">
							
							<input class="form-control" id="leave_address" placeholder="დატოვების მისამართი">
						</div>
					
					</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
							</div>
							<div style="padding-top: 0px;">
                            <p style="margin-bottom:0px;">საკონტაქტო ინფორმაცია</p>
								<h5>სახელი გვარი </h5>
								<p style="margin-bottom: 0px;color:#444;"><a href="" style="color:#444;"> +995 555 55 55 55</a></p>
                                <p><a href="" style="color:#444;">info@mail.ge</a></p>
							</div>
						</div>
					</div>
				</div>


                <!-- -->
					</div>


<!-- ... cars -->

</div>
<div class="col-md-4">

<div class="card shadow rounded-2" style="    margin-top: 27px;">
					
							<div class="card-header border-bottom">
								<h5 class="card-title mb-0">ფინანსური ინფორმაცია</h5>
							</div>
	
						
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ავტომობილი 15 დღით</span>
										<span class="fs-5">424$</span>
									</li>
									
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">მიწოდება / {{ $carAddress }} - <span id="delivery_address_txt"></span></span>
										<span class="fs-5 delivery_address_price">$ {{ number_format(ceil($deliveryCost),2) }}</span>
									</li>
									
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">დატოვება / {{ $carAddress }} - <span id="leave_address_txt"></span></span>
										<span class="fs-5 leave_address_price">$ {{ number_format(ceil($deliveryCost),2) }}</span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ფასდაკლება<span class="badge text-bg-danger smaller mb-0 ms-2">10% </span></span>
										<span class="fs-5 text-success">-$2,560</span>	
									</li>


									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ეხლა გადასახდელი</span>
										<span class="fs-5">$350</span>
									</li>
								</ul>
							</div>
	
							<div class="card-footer border-top">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 mb-0">სულ თანხა</span>
									<span class="h5 mb-0">$ {{ $order->price }}</span>
								</div>
							</div>
						</div>

</div>        
</div>        
     
    </section>
 
    <h6>საინტერესო ადგილები</h6>
    <section>

        

 <div class="row">
  

 <div class="col-md-8">


 <h5 style="margin-bottom:20px;">თქვენ ასევე შეგიძლიათ დაამატოთ სასურველი ქალაქი თქვენს მოგზაურობაში
</h5>



<div class="card bg-transparent p-0">
				
					<div class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
						<h4 class="mb-2 mb-sm-0">აირჩიეთ ადგილი</h4>

						
					</div>
					
					<div class="row g-3">
                                <div class="col-xxl-10 col-sm-10">
                                    <div class="search-box">
                                        <input type="text" name="search_location_query" id="search_location_query" class="form-control search"
                                               placeholder="ძიება...">
                                        <i class="ri-search-line search-icon"></i>

                                    </div>
                                    <span class="text-danger errors tracking_code_err"></span>
                                </div>

                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <a href="javascript:void(0)" type="submit" class="btn btn-primary w-100"
                                                onclick="searchLocation();"><i
                                                    class="ri-equalizer-fill me-1 align-bottom"></i>
                                            ძიება
                                        </a>
                                    </div>
                                </div>

                            </div>

                    <div class="htmlDisplayLocations"></div>


				
				</div>	



 </div>
 

 <div class="col-md-4">

<div class="card shadow rounded-2" style="    margin-top: 27px;">
					
							<div class="card-header border-bottom">
								<h5 class="card-title mb-0">ფინანსური ინფორმაცია</h5>
							</div>
	
						
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ავტომობილი 15 დღით</span>
										<span class="fs-5">424$</span>
									</li>
									
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">მიწოდება / ბათუმი - თბილისი</span>
										<span class="fs-5">$20</span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ფასდაკლება<span class="badge text-bg-danger smaller mb-0 ms-2">10% </span></span>
										<span class="fs-5 text-success">-$2,560</span>	
									</li>


									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ეხლა გადასახდელი</span>
										<span class="fs-5">$350</span>
									</li>
								</ul>
							</div>
	
							<div class="card-footer border-top">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 mb-0">სულ თანხა</span>
									<span class="h5 mb-0">$22,500</span>
								</div>
							</div>
						</div>

</div> 
</div>
        
        
        
        
        
       
    </section>
 
    <h6>პირადი ინფორმაცია</h6>
    <section>
      <div class="row">
        <div class="col-md-8">

		<h5>პირადი ინფორმაცია</h5>



<!-- peoples form -->

<div class="card shadow">
						<div class="card-body p-4">
						
						<div class="row">


						<div class="col-md-6">
									<label class="form-label">სახელი</label>
									<input type="text" class="form-control form-control-lg" placeholder="შეიყვანეთ სახელი">
						</div>

						<div class="col-md-6">
									<label class="form-label">გვარი</label>
									<input type="text" class="form-control form-control-lg" placeholder="შეიყვანეთ გვარი">
						</div>

						<div class="col-md-6">
									<label class="form-label">მობილური</label>
									<input type="text" class="form-control form-control-lg" placeholder="შეიყვანეთ მობილური">
						</div>

						<div class="col-md-6">
									<label class="form-label">ქვეყანა</label>
									<input type="text" class="form-control form-control-lg" placeholder="შეიყვანეთ ქვეყანა">
						</div>
						<div class="col-md-6">
									<label class="form-label">Email</label>
									<input type="text" class="form-control form-control-lg" placeholder="შეიყვანეთ Email">
						</div>
						<div class="col-md-12">
									<label class="form-label">თქვენი სურვილები</label>
									<textarea class="form-control form-control-lg"></textarea>
									
						</div>

						</div>




						</div>
						</div>




<!-- ... peoples form -->

</div>


		
        
		<div class="col-md-4">

<div class="card shadow rounded-2" style="    margin-top: 27px;">
					
							<div class="card-header border-bottom">
								<h5 class="card-title mb-0">ფინანსური ინფორმაცია</h5>
							</div>
	
						
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ავტომობილი 15 დღით</span>
										<span class="fs-5">424$</span>
									</li>
									
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">მიწოდება / ბათუმი - თბილისი</span>
										<span class="fs-5">$20</span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ფასდაკლება<span class="badge text-bg-danger smaller mb-0 ms-2">10% </span></span>
										<span class="fs-5 text-success">-$2,560</span>	
									</li>


									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ეხლა გადასახდელი</span>
										<span class="fs-5">$350</span>
									</li>
								</ul>
							</div>
	
							<div class="card-footer border-top">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 mb-0">სულ თანხა</span>
									<span class="h5 mb-0">$22,500</span>
								</div>
							</div>
						</div>

</div> 
      </div>
     
       
    </section>
 
    <!-- <h6>გადახდა</h6>
    <section>
 
        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class=""> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
    </section> -->
</form>
      </div>
  </div>
</div>

<!-- ... steps -->

<!-- <div class="row">

<div class="col-md-8">
<h2 style="font-size: 25px;margin-top: 20px;">CHEVROLET Captiva 2022</h2>


<div style="background:#444;height:300px;width:100%;margin-top:25px;margin-bottom:25px;">
რუკის ადგილი
</div>


<h5>პირადი ინფორმაცია</h5>


<div class="row">


<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="სახელი">
</div>
</div>

<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="გვარი">
</div>
</div>

<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="ქვეყანა">
</div>
</div>


<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="მობილური">
</div>
</div>


<div class="col-md-6">
<div class="search-inputes" style="width:100%;">

<input class="form-control" placeholder="Email">
</div>
</div>

<div class="col-md-12">
<div class="search-inputes" style="width:100%;">

<textarea class="form-control">თქვენი სურვილები</textarea>
</div>
</div>






</div>


</div>


</div> -->




                <!-- ... order info -->



                




            </div>

        </div>


    </main>
@endsection
@push('js')

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script>

var form = $("#example-form");

form.steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
  titleTemplate: '<span class="step">#index#</span> #title#'
});

</script>

    <script>
        $(document.body).on('click', '.add-to-cart', function () {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('user.orders.add.to.order') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'order_id': '{{ $order->id }}',
                },
                success: function (response) {
                    if (response.status == 0) {
                        $('#cart_count').html(response.cart_count);
                        $('#cart_count_mobile').html(response.cart_count);
                        // getCartData()
                        notify('success', response.message);
                    }else if (response.status == 1){
                        notify('error', response.message);
                    }
                    else {
                        $('.htmlDisplay').html('<h3 align=center class=text-danger><i class="fa fa-spin fa-spinner"></i> პროდუქტზე ინფორმაცია ვერ მოიძებნა!</h3>');
                    }
                },
                error: function () {
                    alert('შეცდომა, გაიმეორეთ მოქმედება.');
                }
            })
        })
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5BQzhAUzF6Rf_C_cPFuRNrZf1BawDJQk&libraries=places"></script>
    <script>
        // Initialize and display the map
        function initMap() {
            // Set the coordinates for the starting and ending points
            var start = {lat: {{ $locationFrom['latitude'] }}, lng: {{ $locationFrom['longitude'] }} }; // Example coordinates (New York City)
            var end = {lat: {{ $locationTo['latitude'] }}, lng: {{ $locationTo['longitude'] }} };   // Example coordinates (Los Angeles)

            // Create a new map object
            var map = new google.maps.Map(document.getElementById('map'), {
                center: start,
                zoom: 6 // Adjust the zoom level as needed
            });

            // Create a DirectionsService object
            var directionsService = new google.maps.DirectionsService();

            // Create a DirectionsRenderer object to display the route on the map
            var directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: true // Do not display the default markers
            });

            // Define the request object for the Directions Service
            var request = {
                origin: start,
                destination: end,
                travelMode: 'DRIVING' // Set the travel mode (DRIVING, WALKING, BICYCLING, TRANSIT)
            };

            // Send the request to the Directions Service
            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                    // Display the route on the map
                    directionsRenderer.setDirections(result);
                } else {
                    // Handle any errors
                    alert('Error: ' + status);
                }
            });
        }
        
        function initAutocomplete() {
            var deliveryAddress = document.getElementById('delivery_address');
            var leaveAddress = document.getElementById('leave_address');
            var autocomplete = new google.maps.places.Autocomplete(deliveryAddress,{
                types: ['geocode'], // Only suggest geocoding results (addresses)
                componentRestrictions: { country: 'GE' }, // Restrict suggestions to Georgia (GE)
                
            });
            
            var autocomplete1 = new google.maps.places.Autocomplete(leaveAddress,{
                types: ['geocode'], // Only suggest geocoding results (addresses)
                componentRestrictions: { country: 'GE' }, // Restrict suggestions to Georgia (GE)
                
            });
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                lat = place.geometry.location.lat()
                lng = place.geometry.location.lng()
                $.ajax({
                    url: "{{ route('user.orders.car.rent.calculation') }}", // Adjust the URL to your Laravel route
                    method: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'id': '{{ $order->id }}',
                        'lat': lat,
                        'lng': lng
                    },
                    success: function(response) {
                        $('#delivery_address_txt').html(place.formatted_address)
                        $('.delivery_address_price').html(response.delivery_cost)
                        // Handle the response as needed
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX request failed:', error);
                    }
                });
            });
            
            autocomplete1.addListener('place_changed', function() {
                var place1 = autocomplete1.getPlace();
                lat = place1.geometry.location.lat()
                lng = place1.geometry.location.lng()
                $.ajax({
                    url: "{{ route('user.orders.car.rent.calculation') }}", // Adjust the URL to your Laravel route
                    method: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'id': '{{ $order->id }}',
                        'lat': lat,
                        'lng': lng
                    },
                    success: function(response) {
                        $('#leave_address_txt').html(place1.formatted_address)
                        $('.leave_address_price').html(response.delivery_cost)
                        // Handle the response as needed
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX request failed:', error);
                    }
                });
            });
        }
        
        function searchLocation() {
            $(".htmlDisplayLocations").html('<h3 align=center class=text-warning><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> დაელოდეთ...</h3>');
            let url;
            url = '{{ route('user.orders.search.locations') }}'
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    '_token': '{{ csrf_token() }}',
                    'search_location_query': $('#search_location_query').val(),
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status == 1) {
                        $('.htmlDisplayLocations').html(data.html);
                    }else if(data.status == 2){
                        Swal.fire('შეცდომა!','თავისუფალი თაროები აღარ არის!','warning');
                    }
                    else {
                        Swal.fire('შეცდომა!', '', 'error');
                    }
                    totalPrice()
                    $('#btnSave').html('<i class="fa fa-floppy-o mr-1" aria-hidden="true"></i>შენახვა');
                    $('#btnSave').attr('disabled', false); //set button enable
                    $('#tracking_code_err').html('');

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    if (xhr.status == 422) { // when status code is 422, it's a validation issue
                        $('.errors').html('');
                        $.each(xhr.responseJSON.errors, function (i, error) {
                            $('.'+i+'_err').html(error);
                            console.log(i)
                        });
                    }
                    $('#btnSave').html('შენახვა');
                    $('#btnSave').attr('disabled', false); //set button enable
                }
            });
        }
    </script>

    <!-- Call the initMap() function after the API has loaded -->
    <script async defer>
        initMap();
        initAutocomplete();
    </script>

    
@endpush
