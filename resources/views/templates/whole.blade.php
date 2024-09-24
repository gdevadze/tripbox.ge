@extends('user.layouts.app')

@section('content')
    <main>


        @include('user.general.header')

<style>
.invoice-box {
width: 70%;
}
.invoice-main-block{
    margin-top: 30px;
    margin-bottom: 30px;
}
.invoice-main-block h5 {
    margin-bottom: 20px;
}
.invoice-main-block p {
    margin-bottom: 0px;
}
.invoice-main-block h6 {
    margin-bottom: 20px;
}
.invoice-main-block ul {
    padding-left: 0px;
}
.invoice-main-block ul li {
    list-style: none;
    margin-bottom: 10px;
    color:#0b0a12;
    border-bottom: 1px solid #e1e1e1;
    padding-bottom: 10px;
}
</style>

        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">


     
            <div class="invoice-box">

            <div class="cotaniner">

            <div class="d-flex justify-content-between">


           
            <h4>Trip Details</h4>


            <div class="d-flex">
            
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.5 16V2M12.5 16C11.5197 16 9.68814 13.208 9 12.5M12.5 16C13.4803 16 15.3119 13.208 16 12.5" stroke="#141B34" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M23 18C23 21.3093 22.3201 22 19.0625 22H5.9375C2.67987 22 2 21.3093 2 18" stroke="#141B34" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>


            </div>

            </div>


            <div class="invoice-main-block">


            <h5>Customer Details (#FT584GH)</h5>

          

            <div class="row">


            <div class="col-md-2">

            <img src="/assets/images/invoice/Profile.png">

            </div>

            <div class="col-md-5">


            <p>Name</p>
            <h6>Karima Jameel Adas</h6>

            <div class="d-flex">


           <div>
            <p>Contact Number</p>
            <h6>+966593948852</h6>
           </div>

            <svg style="    margin-left: 20px;margin-top: 12px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.7157 0.000688331C8.64698 -0.0324644 5.69032 1.15268 3.49409 3.29625C1.29787 5.43982 0.0413243 8.36685 5.94847e-06 11.4355C-0.00157362 12.9671 0.311443 14.4827 0.919655 15.8884C1.52787 17.2941 2.41831 18.5599 3.53579 19.6073L3.10832 21.8871C3.06179 22.1371 3.07076 22.3942 3.13459 22.6403C3.19842 22.8865 3.31555 23.1155 3.4777 23.3114C3.63985 23.5072 3.84306 23.665 4.07294 23.7737C4.30282 23.8823 4.55377 23.9391 4.80802 23.94C5.09522 23.9388 5.37769 23.8668 5.63039 23.7303L8.21556 22.338C9.34956 22.689 10.5297 22.8684 11.7167 22.8703C14.7855 22.9035 17.7421 21.7183 19.9384 19.5747C22.1346 17.4312 23.3911 14.5041 23.4325 11.4355C23.3911 8.36667 22.1345 5.43949 19.938 3.29589C17.7416 1.15229 14.7846 -0.0327358 11.7157 0.000688331ZM8.16569 8.14297H12.2368C12.5068 8.14297 12.7656 8.2502 12.9565 8.44107C13.1474 8.63194 13.2546 8.89082 13.2546 9.16075C13.2546 9.43068 13.1474 9.68956 12.9565 9.88043C12.7656 10.0713 12.5068 10.1785 12.2368 10.1785H8.16569C7.89576 10.1785 7.63688 10.0713 7.44601 9.88043C7.25514 9.68956 7.14791 9.43068 7.14791 9.16075C7.14791 8.89082 7.25514 8.63194 7.44601 8.44107C7.63688 8.2502 7.89576 8.14297 8.16569 8.14297ZM14.2724 14.2497H8.16569C7.89576 14.2497 7.63688 14.1424 7.44601 13.9516C7.25514 13.7607 7.14791 13.5018 7.14791 13.2319C7.14791 12.962 7.25514 12.7031 7.44601 12.5122C7.63688 12.3213 7.89576 12.2141 8.16569 12.2141H14.2724C14.5423 12.2141 14.8012 12.3213 14.9921 12.5122C15.183 12.7031 15.2902 12.962 15.2902 13.2319C15.2902 13.5018 15.183 13.7607 14.9921 13.9516C14.8012 14.1424 14.5423 14.2497 14.2724 14.2497Z" fill="#032E2E"/>
</svg>
</div>

            </div>


            <div class="col-md-5">


            <p>Date of Birth</p>
            <h6>4-12-1995</h6>

            <p>Email Address</p>
            <h6>customer@gmail.com</h6>


            

            </div>
            </div>


            <img src="/assets/images/invoice/map.png" class="mt-3 mb-3">


            </div>



            <div class="invoice-main-block">






<div class="row">


<div class="col-md-4">


<p>გასვლა</p>
<h6>Batumi,Pharnavaz 141</h6>

<p>დათოვება</p>
<h6>Tbilisi , Nation Airport</h6>


<div class="d-flex">

<div style="margin-right: 15px;">
<p style="font-size: 12px;">Vehicle Make/Model</p>
<h6>Totora Prius</h6>
</div>


<div>
<p style="font-size: 12px;">Vehicle Number</p>
<h6>LL-444-LL</h6>
</div>

</div>



<img src="/assets/images/invoice/Car.png">

</div>


<div class="col-md-3">


<p>12:30</p>
<h6>25 დეკებერი 2024</h6>


<p>12:30</p>
<h6>30 დეკებერი 2024</h6>


<p>Driver Name</p>
<h6>Giorgi Lazishvili</h6>
<p>Status</p>
<h6>Confirmed</h6>
<p>Payment</p>
<h6>By cash</h6>
</div>







<div class="col-md-5">


<ul>
    <li>გაქირავება 5 დღით <span>200 $</span></li>
    <li>Дополнительные услуги <span>200 $</span></li>
    <li style="color:#747579;">Child Seat</li>
    <li style="color:#747579;">$7.00 / day <span>15 $</span></li>
    <li>Доставка <span>15 $</span></li>
    <li>При сдаче <span>15 $</span></li>
</ul>

<p>დეპოზიტი 100$</p>
<h6>სულ შემოსავალი 350$</h6>

</div>



</div>



</div>






            </div>

            </div>


            </div>






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