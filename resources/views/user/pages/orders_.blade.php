@extends('user.layouts.app')

@section('content')
    <main>


        @include('user.general.header')



        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">



            {{--

                <div class="row g-4">

                    <img src="{{ asset('assets/images/trip-box-image.png') }}">

                </div>
                --}}

                <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">შეკვეთების ისტორია</h4>



                <!-- graphicks -->

                <div class="row g-4">
			
				<div class="col-xxl-8">
				
					<div class="card shadow h-100">
					
						<div class="card-header border-bottom">
							<h5 class="card-header-title">გრაფიკი</h5>
						</div>

						<div class="card-body">
							
							<div class="d-flex gap-4 mb-3">
								<h6><span class="fw-light"><i class="bi bi-square-fill text-primary"></i> დაჯავშვნილი:</span> 475 </h6>
								<h6><span class="fw-light"><i class="bi bi-square-fill text-info"></i> დასრულებული:</span> 157 </h6>
							</div>
						
							<div id="ChartGuesttraffic" class="mt-2"></div>
						</div>
					</div>
				
				</div>
				

				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">სტატისტიკა</h5>
						</div>

						
						<div class="card-body p-3">
						
							<div class="col-sm-6 mx-auto">
								<div class="d-flex justify-content-center" id="ChartTrafficRooms"></div>
							</div>

						
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="text-success fas fa-circle me-2"></i> დასრულებული</span>
									<span class="h6 fw-light mb-0">73 </span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="text-danger fas fa-circle me-2"></i> მიმდინარე</span>
									<span class="h6 fw-light mb-0">245 </span>
								</li>
							</ul>
						</div>
					</div>
				</div>
                </div>
                <!-- ... graphicks -->



                <div class="row g-4 mb-5 mt-4">

                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #78BC61!important;">
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <h4 class="mb-0">149 კმ</h4>
                                    <span class="h6 fw-light mb-0">გავლილი</span>
                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #78BC61!important;">
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <h4 class="mb-0">200 $</h4>
                                    <span class="h6 fw-light mb-0">სულ თანხა</span>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #78BC61!important;">
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <h4 class="mb-0">{{ count($orders) }}</h4>
                                    <span class="h6 fw-light mb-0">ჯავშანი</span>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #78BC61!important;">
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <h4 class="mb-0">5%</h4>
                                    <span class="h6 fw-light mb-0">ფასდაკლება</span>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>


                <h4 style="font-size: 30px;margin-top:30px;">შეკვეთების ისტორია</h4>
                <div class="d-flex  p-2 p-xl-0 mt-xl-4">
                    <button class="btn btn-primary mb-0" style="margin-right:15px;border-radius:30px;border:0;background-color:#78BC61; box-shadow: 2px 2px 10px 0px #0000001A;padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">მიმდინარე</button>
                    <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">დასრულებული </button>
                    <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">ელოდება დადასტურებას </button>
                    <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">მიმდინარე </button>
                    <button class="btn btn-link p-0 mb-0" style="margin-right:15px;border-radius:30px;box-shadow: 2px 2px 10px 0px #0000001A;border: 1px solid #78BC61; color: #78BC61; padding-right: 10px!important; padding-left: 10px!important; font-size: 14px;    padding: 10px 35px 10px 35px!important;">გაუქმებული </button>
                </div>
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

                <table class="table" style="margin-top:20px;">
                    <thead>
                    <tr>
                    <th scope="col">შეკვეთის #</th>
                        <th scope="col">ავტომობილი</th>
                     <th scope="col">საიდანჯ</th>
              <th scope="col">თარიღი</th>
                        <th scope="col">ღირებულება</th>
                        <th scope="col">სტატუსი</th>
                        <th scope="col">ქმედება</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr style="box-shadow: 2px 2px 10px 0px #00000026;border-radius:20px;">
                        <th>


{{ $order->id }}
</th>
                            <th>


                            {{ $order->car->vehicle_number }}
                            </th>
                       <td>ბათუმი - თბილისი</td>
                         <td>{{ $order->date_from }}-{{ $order->date_to }}</td>
                            <td>${{ $order->price }}</td>
                            <td><div class="badge rounded-pill text-bg-warning">ელოდება დასტურს</div></td>
                            <td>
                                
                            <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #78BC61;border:0;"><i class="fa-solid fa-check"></i></a>
                    
                            <a href="javascript:0;" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#orderss">    
                            <i class="fa-solid fa-circle-info"></i></a>
                            <a href="" class="btn btn-sm btn-primary mb-0" style="background-color: #d6293d;border:0px;"><i class="fa-solid fa-trash"></i></a>
                   
                            <!-- <a href="{{ route('user.orders.show',$order->id) }}" class="btn btn-sm btn-primary mb-0" style="background: #78BC61; border: 0;  border-radius: 30px; ">სრულად</a> -->
                        
                        </td>
                        </tr>


                    @endforeach

                    </tbody>
                </table>








            </div>

        </div>


    </main>
@endsection

@push('js')


<div class="modal fade" id="orderss" tabindex="-1" aria-labelledby="orderssLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content" style="    padding: 20px;">

            <div class="modal-body" style=" padding: 0px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>
               


                <div class="">
                 

<!-- ---->

<div class="card-header border-bottom p-4" style="    margin-bottom: 20px;">
							<h1 class="mb-0 fs-3" style="font-size: 25px!important;margin-bottom: 20px;">ჩემი ჯავშანი #1</h1>
						</div>




<div class="row">

<div class="col">

<div class="card shadow rounded-2"  style="    padding: 20px;">



<p>სულ თანხა</p>
<h5>2424$</h5>

</div>
</div>
<div class="col">
<div class="card shadow rounded-2" style="    padding: 20px;">
<p>გასავლელი მანძილი</p>
<h5>150 კმ</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>ხანგძლივობა</p>
<h5>4 დღე</h5>
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
											<h4 class="card-title mb-2">CHEVROLET Captiva</h4>
											<ul class="nav nav-divider h6 fw-normal mb-2">
												<li class="nav-item">ჯიპი</li>
												<li class="nav-item">ავტ</li>
												<li class="nav-item">4 ადგლი</li>
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
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>4X4 </span>
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
										<h5 class="mb-1">2024/02/12</h5>
										<small><i class="bi bi-alarm me-1"></i>12:30 </small>
									</div>
								</div>

							
								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">დატოვება</h6>
										<h5 class="mb-1">2024/02/12</h5>
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
                            <p>მიწოდების მისამართი: ბათუმი მისამართი</p>
                            <p>დატოვების მისამართი: ბათუმი მისამართი</p>
							
						</div>
					
					</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
							</div>
							<div style="padding-top: 0px;">
                            <p style="margin-bottom:0px;">ინფორმაცია კლიენტზე</p>
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

<div class="card shadow rounded-2" style="    margin-top: 27px;    margin-bottom: 20px;">
					
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


                        <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #d6293d;border:0;">უარყოფა</a>
                        <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #78BC61;border:0;">დათანხმება</a>
                    

</div>        
</div>        

                  
                    <!-- ... serach bar -->
                </div>








            </div>

        </div>
    </div>
</div>

@endpush