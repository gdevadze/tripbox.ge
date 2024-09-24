@extends('website.layouts.app')

@section('content')

<style>
nav {
    box-shadow: 4px 4px 15px 0px #e1777700!important;
    background:#fff0 !important;
    margin-left: 100px!important;
    margin-right: 100px!important;
    border-radius: 20px!important;
    margin-top: 0px!important;
}
.map-boxes img {
    width: 100%; height: 450px; margin-top: -56px; object-fit: cover;
}


.list-items-second {
                        list-style: none;
    box-shadow: 4px 4px 15px 0px #00000026;
    border-radius: 20px;
    padding: 20px 20px;
    margin-bottom: 20px;
                    }
.list-items-second li {

    border-bottom: 1px solid #E0E0E0!important;
}
.list-items-second li p {
    color: #000000;
    margin-left: 0px;
    border-bottom: 1px solid #ffffff00;
    padding-bottom: 0px;
    float:left;
}   
.detail-car-table {
    font-size: 11px;
    font-weight: 400;
    color: #34495e;
    background: #fdfdfe;
    margin: 0 0 8px;
    width: 100%;
    border-collapse: collapse;
}
.detail-car-table th {
    width: 53%;
    height: 27px;
    background: #fdfdfe;
    border: 1px solid #edeef000;
    padding: 4px 0;
}
.detail-car-table .th-left {
    border: 1px solid #edeef000;
    border-left: 0;
}
.th-left .th-value {

    text-align: left;
    font-weight: 700;
}
.th-value {
font-size: 16px;
color:#000000A6 ;
border-bottom: 1px solid #44444426;
    padding-bottom: 10px;
    padding-top: 10px;

}
.th-key {
    font-size: 16px;
    color:#000000A6 ;
    padding-top: 10px;
}

.th-key {
    font-size: 16px;
    color: #000000A6;
    border-bottom: 1px solid #44444426;
    padding-bottom: 10px;
    padding-top: 10px;
}
.boxes-informations {
display: flex;
margin-bottom: 30px;
}
.boxes-informations div {
    margin-right:40px;
    background: #FFFFFF;
color: #000000;
margin-left: 20px;
padding: 20px;
border-radius: 5px;
}
.boxes-informations div p {
    color: #898B9E;
    font-size: 14px;
    margin-bottom: 0px;

}
.main-block {
    margin-top: -77px;
}
.dec i  {
    color:#A9D6B8
}
.inc i {
    color:#A9D6B8
}
.prices_boxes {
    color: #000000;
    font-weight: bold;

}

.not-registered-form input {
    border: 1px solid #D9D9D9;
    padding: 1rem 1rem;
    border-radius: 4px;
}

.not-registered-form textarea {
    border: 1px solid #D9D9D9;

    border-radius: 4px;
}
</style>
    <main>


    <section>
    <div class="map-boxes">

<img src="/assets/images/templates/n-register/map.png">

</div>
    <div class="container">


 


    <div class="main-block">

    <div class="row">

<!-- -->
    <div class="col-md-6">


					<div class="card  p-2 pb-0 " style="  background: #ffffff; box-shadow: 4px 4px 15px 0px #00000026;">
					
						<div class="card-body px-3 pb-0" style="   padding-bottom: 50px;    padding-top: 10px;">
						
					
							<h5 class="card-title" style="     margin-bottom: 0px;   font-size: 20px;"><a href="#">VW Touareg </a></h5>
							<p style="    font-size: 14px;">ჯიპი</p>
	
							<img src="/assets/images/svg/favourite.svg" style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">
							<img src="/storage/images/cars//car-image-YiDvLbRZIj-1711549149.png" style="width:100%; height:200px; display:block;margin:0 auto;object-fit: contain;margin-bottom:20px;" alt="Card image">
							
		
	
					
						
						
						
					</div>
				</div>


              
<h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">სპეპციფიკაციები</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                        <div class="th-key">საწვავი</div>

                                        
                                        <div class="th-value">ტიპი</div>
                                        <div class="th-value">წელი</div>
                                        <div class="th-value">ძრავი</div>
                                        <div class="th-value">გად. კოლოფი</div>
                                        <div class="th-value">წამნყვანი</div>
                                        <div class="th-value">ადგ. რაოდენობა</div>




                                        
                                    </th>

                                    <th class="th-right">

                                        <div class="th-key">ბენზინი</div>

                                        <div class="th-value">ჯიპი</div>
                                        <div class="th-value">2015</div>
                                        <div class="th-value">2.5</div>
                                        <div class="th-value">ავტომატიკა</div>
                                        <div class="th-value">უკანა</div>
                                        <div class="th-value">8</div>




                                    </th>

                                </tr>


                                </tbody>

</table>



<h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">პირადი ინფორმაცია</h4>




<form class="row g-3 not-registered-form">
								
								
								<div class="col-md-6">
								
									<input type="text" class="form-control" placeholder="სახელი">
								</div>

                                <div class="col-md-6">
								
									<input type="text" class="form-control" placeholder="გვარი">
								</div>

                                <div class="col-md-12">
								
									<input type="text" class="form-control" placeholder="Email">
								</div>


                                <div class="col-md-6">
								
									<input type="text" class="form-control" placeholder="ქვეყანა">
								</div>

                                <div class="col-md-6">
								
                                <input type="text" class="form-control" placeholder="ტელეფონი">
                            </div>


                            <div class="col-md-6">

                            <p>დამიკავშირდით</p>
                            </div>


                            <div class="col-md-6">

                            <div style="display: flex;">
                        
                            <div class="form-check">
											<input style="    padding: 0.8rem 0.8rem;" class="form-check-input" type="checkbox" value="" id="hotelType1">
											<label class="form-check-label" for="hotelType1" style="padding-top: 6px; margin-right: 5px; margin-left: 5px;">Telegram</label>
										</div>

                                        <div class="form-check">
											<input style="    padding: 0.8rem 0.8rem;" class="form-check-input" type="checkbox" value="" id="hotelType1">
											<label class="form-check-label" for="hotelType1" style="padding-top: 6px; margin-right: 5px; margin-left: 5px;">Viber</label>
										</div>

                                        <div class="form-check">
											<input style="    padding: 0.8rem 0.8rem;" class="form-check-input" type="checkbox" value="" id="hotelType1">
											<label class="form-check-label" for="hotelType1" style="padding-top: 6px; margin-right: 5px; margin-left: 5px;">Whatsap</label>
										</div></div>
</div>



                            <div class="col-md-12">
								<textarea class="form-control" placeholder="სურვილები" ></textarea>
                             
                            </div>


							</form>




<h4 style="margin-top:40px;margin-bottom:30px;    font-size: 20px;">ფასში შედის</h4>

<table class="detail-car-table">

                                <tbody>

                                <tr>

                                    <th class="th-left">

                                        <div class="th-key">ულიმიტო გარბენი</div>

                                        
                                        <div class="th-value">უფასო გაუქმება 24 საათით ადრე</div>
                                        <div class="th-value">დამატებითი მძღოლი</div>
                                        <div class="th-value">დაზღვევა</div>
                                     




                                        
                                    </th>

                                    <th class="th-right">

                                        <div class="th-key"><i style="color: #78BC61;" class="bi bi-check2"></i></div>

                                        <div class="th-value"><i style="color: #78BC61;" class="bi bi-check2"></i></div>
                                        <div class="th-value"><i style="color: #78BC61;" class="bi bi-check2"></i></div>
                                        <div class="th-value"><i style="color: #78BC61;" class="bi bi-check2"></i></div>
                                 



                                    </th>

                                </tr>


                                </tbody>

</table>
               




    </div>
<!-- -->

<!-- -->

<div class="col-md-6">


<div class="boxes-informations">

<div>
მიწოდება $15
<p>24.კმ თქვენგან</p>
</div>

<div>
დაბრუნება $15
<p>24.კმ თქვენგან</p>
</div>

</div>




<div class="d-flex" style="margin-left: 20px;">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="assets/images/no-photo-avatar.png">
							</div>
							<div style="padding-top: 20px;">
								<h5>სახელი გვარი</h5>
								<p>მანქანის მფლობელი</p>
							</div>
						</div>

                        <ul class="items-routes" style="margin-top: 30px;
    padding-left: 0px">

<li style="    box-shadow: 4px 4px 15px 0px #00000000;">
    <img src="assets/images/svg/location-for-groups.svg">
    <span>მიწოდება</span>
<p>Тбилиси, 25 декабря, в 13:00</p>


<img src="assets/images/svg/location-for-groups-red.svg">
    <span>დატოვება</span>
<p>Тбилиси, 25 декабря, в 13:00</p>
</li>


</ul>





<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">დამატებიტი სერვისები</h4>




<ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">
									<li class="list-group-item d-flex justify-content-between">
										<span>ბავშვის სავარძელი / $7.00 დღე</span>
										<span>

                                        <!-- -->

                                        <span class="qty">
                                        <span class="dec">
                                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                                        </span>
                                        <span class="num">1</span>
                                        <span class="inc">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </span>
                                        </span>
                                        <!-- -->

                                        </span>
									</li>

									<li class="list-group-item py-0"><hr class="my-1"></li>

									<li class="list-group-item d-flex justify-content-between">
										<span>Child Booster / $7.00 დღე</span>
                                        <span>

<!-- -->

<span class="qty">
<span class="dec">
<i class="fa fa-minus-square" aria-hidden="true"></i>
</span>
<span class="num">1</span>
<span class="inc">
<i class="fa fa-plus-square" aria-hidden="true"></i>
</span>
</span>
<!-- -->

</span>
									</li>

									<li class="list-group-item py-0"><hr class="my-1"></li>

									<li class="list-group-item d-flex justify-content-between">
                                    <span>Full Tank Option / $7.00 დღე</span>
                                    <span>

<!-- -->

<span class="qty">
<span class="dec">
<i class="fa fa-minus-square" aria-hidden="true"></i>
</span>
<span class="num">1</span>
<span class="inc">
<i class="fa fa-plus-square" aria-hidden="true"></i>
</span>
</span>
<!-- -->

</span>
									</li>

									<li class="list-group-item py-0"><hr class="my-1"></li>

									<li class="list-group-item d-flex justify-content-between">
										<span>Cleaning not need / $7.00 დღე</span>
										<span>

                                        <!-- -->

                                        <span class="qty">
                                        <span class="dec">
                                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                                        </span>
                                        <span class="num">1</span>
                                        <span class="inc">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </span>
                                        </span>
                                        <!-- -->

                                        </span>
									</li>

									

								</ul>





                                
<h4 style="margin-left: 20px;margin-top:40px;margin-bottom:30px;    font-size: 20px;">ღირებულება</h4>




                                <ul class="list-group list-group-borderless mb-0" style="margin-left: 20px;">



									<li class="list-group-item d-flex justify-content-between">
										<span>20 დღით დაჯავშნა</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        150$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>


                                    <li class="list-group-item d-flex justify-content-between">
										<span>მიწოდება</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        15$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>

                                    <li class="list-group-item d-flex justify-content-between">
										<span>დაბრუნება</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        15$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>


                                    <li class="list-group-item d-flex justify-content-between">
										<span>დამ. სერვისები</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        15$
                                        <!-- -->
                                        </span>
									</li>
									<li class="list-group-item py-0"><hr class="my-1"></li>



                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #898B9E;">სულ</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        400$
                                        <!-- -->
                                        </span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between">
										<span>დეპოზიტი</span>
										<span class="prices_boxes_last">
                                        <!-- -->
                                        100$
                                        <!-- -->
                                        </span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between">
										<span style="color: #000000;">ეხლა გადასახდელი</span>
										<span class="prices_boxes">
                                        <!-- -->
                                        150$
                                        <!-- -->
                                        </span>
									</li>



									

								</ul>


                                <a class="src-btn" href="#" style="padding-top: 10px; padding-bottom: 10px; border-radius: 40px;    background: #79C064; width: 100%!important; display: block; text-align: center;margin-left: 20px;margin-top:40px;margin-bottom:30px;  ">გადახდა</a>

</div>




<!-- ... -->



    </div>


    </div>






    </div>



    </section>



    </main>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
    $('#btn').click(function() {
        $('#btn').toggleClass("cart_clk");

    });
    $("#btn").one("click", function() {
        $('.cart .fa').attr('data-before', '1');
    });

    var prnum = $('.num').text();
    $('.inc').click(function() {
        if (prnum > 0) {
            prnum++;
            $('.num').text(prnum);
            $('.cart .fa').attr('data-before', prnum);
        }

    });
    $('.dec').click(function() {
        if (prnum > 1) {
            prnum--;
            $('.num').text(prnum);
            $('.cart .fa').attr('data-before', prnum);
        }

    });

});
</script>
@endpush
