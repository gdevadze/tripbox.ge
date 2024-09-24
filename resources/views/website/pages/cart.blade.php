@extends('user.layouts.app')

@section('content')
<main>


<nav class="navbar sidebar navbar-expand-xl navbar-light">

    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="#">
            <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-user.png') }}" style="height: 30px; " alt="logo">
            <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-user.png') }}" alt="logo">
        </a>
    </div>


    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">


            @include('user.general.sidebar')





        </div>
    </div>
</nav>



<div class="page-content">


    <nav class="navbar top-bar navbar-light py-0 py-xl-3">
        <div class="container-fluid p-0">
            <div class="d-flex align-items-center w-100">


                <div class="d-flex align-items-center d-xl-none">
                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-item h-40px" src="{{ asset('assets/images/logo-icon.svg') }}" alt="">
                    </a>
                </div>



                <div class="navbar-expand-xl sidebar-offcanvas-menu">
                    <button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                        <i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
                    </button>
                </div>






                <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                    <li class="nav-item dropdown ms-3">
                        <button class="nav-notification lh-0 btn  p-0 mb-0" id="bd-theme"
                                type="button"
                                aria-expanded="false"
                                data-bs-toggle="dropdown"
                                data-bs-display="static">
                            <img src="{{ asset('assets/images/svg/global.svg') }}">
                            <span style="color:#032E2E;margin-left: 5px;">English</span>
                        </button>

                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                                    Russian
                                </button>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item dropdown ms-3">

                        <a class="nav-notification  p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <img src="{{ asset('assets/images/svg/notification-bing.svg') }}">
                        </a>
                        <span class="notif-badge animation-blink"></span>




                        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
                            <div class="card bg-transparent">

                                <div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
                                    <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>

                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-unstyled p-2">

                                        <li>
                                            <a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                                <h6 class="mb-2">New! Booking flights from New York ✈️</h6>
                                                <p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
                                                <span>Wednesday</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                                <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
                                                <span>15 Nov 2022</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="card-footer bg-transparent text-center border-top">
                                    <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
                                </div>
                            </div>
                        </div>

                    </li>



                    <li class="nav-item dropdown ms-3">

                        <a class="nav-notification  p-0 mb-0" href="#" >
                            <img src="{{ asset('assets/images/svg/sms-notification.svg') }}">
                        </a>




                    </li>






                    <li class="nav-item ms-3 dropdown">

                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex">

                                <div >
                                    <img class="avatar-img rounded-2" src="{{ asset('assets/images/Profile.png') }}"  alt="avatar">
                                </div>
                                <div style="    margin-left: 15px;">
                                    <p class="small m-0" style="color: #808080;font-size:12px!important;text-transform: uppercase;margin-bottom: 0px!important;">Owner</p>
                                    <a class="h6 mt-2 mt-sm-0" style="font-size:15px!important;" href="#">{{ currentUser()->full_name }}</a>

                                </div>
                            </div>
                        </a>

                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">

                            <li class="px-3 mb-3">
                                <div class="d-flex align-items-center">

                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                        <p class="small m-0">example@gmail.com</p>
                                    </div>
                                </div>
                            </li>


                            <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
                            <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <div class="page-content-wrapper p-xxl-4">

 


            <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">Информаия о поездке</h4>
           


			<div class="row">


				<div class="col-md-4">
					<div class="card  p-2 pb-0 " style="    height: 250px; background: #F2F2F2;">
					
						<div class="card-body px-3 pb-0" style="   padding-bottom: 50px;    padding-top: 10px;">
						
					
							<h5 class="card-title" style="     margin-bottom: 0px;   font-size: 20px;"><a href="#">VW Polo </a></h5>
							<p style="    font-size: 14px;">Кроссовер</p>
	
							<img src="https://tripbox.phpweb.ge/assets/images/svg/favourite.svg" style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">
							<img src="https://tripbox.phpweb.ge/assets/images/cars/1.png" style=" height: 100px; object-fit: contain;" alt="Card image">
							
						</div>
	
					
						
						
						
					</div>
				</div>
<div class="col-md-8">

	<div class="row g-4 mb-5">
		
		<div class="col-md-6 ">
			<div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #B2D2D2!important;">
				<div class="d-flex justify-content-between align-items-center">
					
					<div>
						<h4 class="mb-0">149 км</h4>
						<span class="h6 fw-light mb-0">проехали</span>
					</div>
					
					
				</div>
			</div>
		</div>


		<div class="col-md-6 ">
			<div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #B2D2D2!important;">
				<div class="d-flex justify-content-between align-items-center">
					
					<div>
						<h4 class="mb-0">200 $</h4>
						<span class="h6 fw-light mb-0">сумма аренды</span>
					</div>
					
					
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #B2D2D2!important;">
				<div class="d-flex justify-content-between align-items-center">
					
					<div>
						<h4 class="mb-0">2</h4>
						<span class="h6 fw-light mb-0">бронирования</span>
					</div>
					
					
				</div>
			</div>
		</div>

		<div class="col-md-6 ">
			<div class="card card-body  bg-opacity-10 border border-warning border-opacity-25 p-4 h-100" style="border: 1px solid #B2D2D2!important;">
				<div class="d-flex justify-content-between align-items-center">
					
					<div>
						<h4 class="mb-0">5%</h4>
						<span class="h6 fw-light mb-0">скидка</span>
					</div>
					
					
				</div>
			</div>
		</div>

		
	</div>


</div></div>



<div class="row">


	<div class="col">

		<p>Путешествовали</p>
		<h5>4 дня</h5>
	</div>
	<div class="col">

		<p>Посетили</p>
		<h5>5 городов</h5>
	</div>
	<div class="col">

		<p>Посетили</p>
		<h5>3 локации</h5>
	</div>
	<div class="col">

		<p>Остановились</p>
		<h5>1 Жилье</h5>
	</div>

	<div class="col">

		<p>Штрафы</p>
		<h5>10</h5>
	</div>


</div>





<div class="row mt-5">
              
	<div class="col-xl-12 col-xxl-12">
		<div class="vstack gap-4">

		  
			<div class="card shadow p-2">
				<div class="row g-0">
				   
					<div class="col-md-3 position-relative">

					   

					 
						<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
							<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items="1">
								
								<div><img src="https://tripbox.phpweb.ge/assets/images/places-picture.jpg" alt="Card image"></div>

							   
							</div>
						</div>
					  
					</div>

			 
					<div class="col-md-9">
						<div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

						  
							<h5 class="card-title mb-1"><a href="#">Монастырь Давид-Гареджи и радужные холмы </a></h5>
							<small>Вместе с Вардзией и Уплисцихе Давид-Гареджи входит в тройку хорошо сохранившихся средневековых достопримечательностей – уникальных пещерных монастырей.</small>
						  
							<ul class="nav nav-divider mt-3">
								<li class="nav-item">10 км от Тбилиси</li>
								<li class="nav-item">Бесплатный вход</li>
								
							</ul>

						  
						   
						   
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>



    <section class="pt-0 pt-md-5">
            <div class="container">


                <div class="row">

                    @foreach($carts as $cart)
                        <div class="col-md-3" style="margin-bottom:70px;display:none;">
                            <div class="card  p-2 pb-0 h-100" style="    background: #F2F2F2;">

                                <div class="card-body px-3 pb-0" style="    padding-top: 10px;">


                                    <h5 class="card-title" style="     margin-bottom: 0px;   font-size: 20px;"><a href="#">{{ $cart->model->brand->name }} {{ $cart->model->brand_model->name }}</a></h5>
                                    <p style="    font-size: 14px;">Кроссовер</p>

                                    <img src="assets/images/svg/favourite.svg" style="height: 20px; position: absolute; right: 0; margin-right: 20px; margin-top: -60px;">


                                </div>

                                <img src="{{ $cart->model->get_poster }}"  style=" height: 100px; object-fit: contain;"  alt="Card image">
                                <div class="card-body px-3 pb-0">





                                    <ul class="nav nav-divider text-center mb-2 mb-sm-3 car-parametres">
                                        <li class="nav-item"><img src="assets/images/svg/gear.svg"> АКПП</li>
                                        <li class="nav-item"><img src="assets/images/svg/place.svg"> 2</li>
                                        <li class="nav-item"><img src="assets/images/svg/delivery.svg"> Доставка</li>

                                    </ul>
                                </div>


                            </div>
                            <div class="card-footer pt-0" style="margin-top:15px;margin-bottom:20px;">

                                <div class="d-sm-flex justify-content-sm-between align-items-center">

                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-normal text-success mb-0 me-1" style="    color: #232538!important;font-weight: bold!important;">
                                            {{ \Carbon\Carbon::parse($cart->date_from)->diffInDays($cart->date_to) * $cart->model->price }}</h5>
                                        <span class="mb-0 me-2" style="text-transform: capitalize; font-size: 13px; padding-left: 5px;">/ день</span>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach


                

                        <form action="{{ route('user.make.order') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary-soft mb-0 w-100" style="background: #78BC61; color: #fff; border: 0; border-radius: 40px; font-size: 11px;">Забронировать тур<i class="bi bi-arrow-right ms-2"></i></button>
                        </form>

                </div>
        </section>


<!-- aqamde -->

    </div>

</div>


</main>




<!--- .... new -->
    <main>






@endsection
@push('js')
    <script>
        $(document.body).on('click', '.add-to-cart', function () {
            let id = $(this).data('id');
            let modelType = $(this).data('model-type');
            $.ajax({
                url: "{{ route('add-to-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'model_type': modelType,

                },
                success: function (response) {
                    if (response.status == 0) {
                        $('#cart_count').html(response.cart_count);
                        $('#cart_count_mobile').html(response.cart_count);
                        // getCartData()
                        notify('success', response.message);
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
@endpush
