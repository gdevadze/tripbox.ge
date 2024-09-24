@extends('website.layouts.app')

@section('content')
    <main>



        <section>
            <img src="{{ asset('assets/images/detailed_home.jpg') }}" style="    margin-top: -220px;">


        </section>




        <section class="card-grid pt-0">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">
                        <div class="stars-place">
                            <img src="{{ asset('assets/images/svg/star.svg') }}">
                            <img src="{{ asset('assets/images/svg/star.svg') }}">
                            <img src="{{ asset('assets/images/svg/star.svg') }}">
                            <img src="{{ asset('assets/images/svg/star.svg') }}">
                        </div>

                        <h4 style="font-size: 50px;">{{ $location['name'] }}</h4>
                        <p>Village Merisi, Кеда 6010 Грузия</p>
                    </div>

                    <div class="col-md-6">
                        <div class="search-right-share">


                            <div class="buttons-social-share">

                                <a href=""><i class="fa-regular fa-heart"></i></a>
                                <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>

                            </div>

                            <a class="src-btn" href="#" style="padding-top: 10px;
					padding-bottom: 10px;
					border-radius: 40px;
					background: #79C064;
					display: block;
					text-align: center;
					height: 50px;
					margin-top: 60px;
					margin-left: 20px;">Добавить в Trip</a>
                        </div>
                    </div>

                </div>
                <div class="row g-2" style="margin-top:20px">

                    <div class="col-md-6">
                        <a data-glightbox data-gallery="gallery" href="{{ $locationImages[0]['images']['original']['url'] }}">
                            <div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden" style="background-image:url({{ $locationImages[0]['images']['original']['url'] }}); background-position: center left; background-size: cover;">

                                <div class="hover-element position-absolute w-100 h-100">
                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">

                        <div class="row g-2">
                            @foreach($locationImages as $key => $locationImage)
                                @if($key > 0 && isset($locationImage['images']['original']))
                            <div class="col-md-6">
                                <a data-glightbox data-gallery="gallery" href="{{ $locationImage['images']['original']['url'] }}">
                                    <div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url({{ $locationImage['images']['original']['url'] }}); background-position: center left; background-size: cover;">

                                        <div class="hover-element position-absolute w-100 h-100">
                                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                @endif
                            @endforeach
{{--                            <div class="col-md-6">--}}
{{--                                <a data-glightbox data-gallery="gallery" href="assets/images/hotelebi.jpg">--}}
{{--                                    <div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/hotelebi.jpg); background-position: center left; background-size: cover;">--}}

{{--                                        <div class="hover-element position-absolute w-100 h-100">--}}
{{--                                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <a data-glightbox data-gallery="gallery" href="assets/images/hotelebi.jpg">--}}
{{--                                    <div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(assets/images/hotelebi.jpg); background-position: center left; background-size: cover;">--}}

{{--                                        <div class="hover-element position-absolute w-100 h-100">--}}
{{--                                            <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}


{{--                            <div class="col-md-6">--}}
{{--                                <div class="card card-grid-sm overflow-hidden" style="background-image:url(assets/images/hotelebi.jpg); background-position: center left; background-size: cover;">--}}

{{--                                    <div class="bg-overlay bg-dark opacity-7"></div>--}}


{{--                                    <a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/11.jpg" class="stretched-link z-index-9"></a>--}}
{{--                                    <a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/15.jpg"></a>--}}
{{--                                    <a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/16.jpg"></a>--}}


{{--                                    <div class="card-img-overlay d-flex h-100 w-100">--}}
{{--                                        <h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#" class="text-white">Смотреть все +</a></h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                    </div>
                </div>
            </div>
        </section>





        <div class="container-fluid" style="margin-top:50px;">

            <style>
                nav {
                    box-shadow: 4px 4px 15px 0px #00000026; background: #fff; margin-left: 100px; margin-right: 100px; border-radius: 20px; margin-top: 50px;
                }
            </style>


            <form class=" position-relative p-4 pe-md-5 pb-5 pb-md-4" style="box-shadow: 4px 4px 15px 0px #00000026;

		box-shadow: 0px 4px 4px 0px #00000040;
		background: linear-gradient(90.79deg, #78BC61 0%, #AED7A0 100%);
		border-radius: 30px;
		margin-top: -40px;">
                <div class="row  align-items-center">

                    <div class="col-lg-3">
                        <div class="form-control-border form-control-transparent form-fs-md d-flex">



                            <div class="flex-grow-1">
                                <label class="form-label" style="    background: #0000;
							color: #fff;">Место получения</label>
                                <select class="form-select " style="padding-top: 20px; padding-bottom: 20px; border-radius: 40px;" data-search-enabled="true">
                                    <option value="">Тбилиси</option>
                                    <option>Тбилиси</option>
                                    <option>Тбилиси</option>
                                    <option>Тбилиси</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3">
                        <div class="d-flex">


                            <div class="form-control-border form-control-transparent form-fs-md">
                                <label class="form-label" style="    background: #0000;
							color: #fff;">Дата и время</label>
                                <input type="text" style="  padding-top: 20px; padding-bottom: 20px; border-radius: 40px;     background: #fff!important;" class="form-control " data-mode="range" placeholder="Select date" value="19 Sep to 28 Sep">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex">


                            <div class="form-control-border form-control-transparent form-fs-md">
                                <label class="form-label" style="    background: #0000;
							color: #fff;">Дата и время</label>
                                <input type="text" style="  padding-top: 20px; padding-bottom: 20px; border-radius: 40px;     background: #fff!important;" class="form-control " data-mode="range" placeholder="Select date" value="19 Sep to 28 Sep">
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2">



                        <a  class="src-btn" href="#" style="margin-top:35px;padding-top: 20px; padding-bottom: 20px; border-radius: 40px;    background: #49733C; width: 100%!important; display: block; text-align: center;">Найти</a>




                    </div>


                </div>


            </form>
        </div>


        <section>
            <div class="container-fluid">
                <div class="row">



                    <div class="col-md-6">

                        <div class="card-body pt-4 p-0">
                            <h5 class="fw-light mb-4">Об отеле</h5>
                            @if(isset($location['description']))
                            <p class="mb-3">{{ $location['description'] }}</p>
                            @endif
                            <div class="advantages-propereties">
                                @isset($location['amenities'])
                                @foreach($location['amenities'] as $amenity)
                                    <p>{{ $amenity }}</p>
                                @endforeach
                                @endisset
{{--                                --}}
{{--                                <p><i class="fa-solid fa-people-roof"></i> Семейный номер</a></p>--}}
{{--                                <p><i class="fa-solid fa-mountain-sun"></i> Вид на горы</a></p>--}}
{{--                                <p><i class="fa-solid fa-paw"></i> Можно с питомцами</a></p>--}}
{{--                                <p><i class="fa-solid fa-fan"></i> Кондиционер</a></p>--}}
{{--                                <p><i class="fa-solid fa-wifi"></i> Бесплатный Wi-fi</a></p>--}}
{{--                                <p><i class="fa-solid fa-people-roof"></i> Семейный номер</a></p>--}}
{{--                                <p><i class="fa-solid fa-mountain-sun"></i> Вид на горы</a></p>--}}
{{--                                <p><i class="fa-solid fa-paw"></i> Можно с питомцами</a></p>--}}
{{--                                <p><i class="fa-solid fa-fan"></i> Кондиционер</a></p>--}}
                            </div>


                        </div>




                    </div>


                    <style>
                        .accordion-item {
                            box-shadow: 4px 4px 15px 0px #00000026;
                            margin-bottom: 15px;
                            border-radius: 30px;
                            border: 0px;
                        }
                        .accordion .accordion-button {

                        }
                        .accordion-button:not(.collapsed) {
                            color: #000;
                            background-color: #fff!important;
                        }
                    </style>

                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Стоимость
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

								<span style="font-size:13px;color: #898B9E;
								">24 - 30 декабря</span>
                                        <p style="border-bottom:1px solid #E0E0E0;padding-bottom:10px;color: #000000;
								">Проживание</p>

                                        <span style="font-size:13px;color: #898B9E;
								">24 - 30 декабря</span>
                                        <p style="padding-bottom:10px;color: #000000;
								">Проживание 7 ночей</p>


                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Парковка - Free
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>ThПарковка - Free
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Ресторан
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Ресторан.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="src-btn" href="#" style="padding-top: 10px; padding-bottom: 10px; border-radius: 40px;    background: #79C064; width: 100%!important; display: block; text-align: center;">Оплатить</a>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <h3>Отзывы</h3>
                <p>25 отзывов</p>

                <div class="row">

                    <div class="col-md-3">
                        <div class="customer-review">
                            <div class="customer-profile">


                                <img src="{{ asset('assets/images/customer.jpg') }}">
                                <div class="review-title">


                                    <h4>Александр</h4>
                                    <p>София, Болгария</p>

                                </div>
                            </div>

                            <div class="stars-place" style="margin-top: 15px;">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                            </div>


                            <p style="font-size:13px;color: #898B9E;
						">Очень красивое место! Прекрасный, добрый персонал! Благодаря их гостеприимству сбылась мечта и удалось побыть гостем за грузинским новогодним столом. Танцы, великолепное вино, чача, традиционные и душевные тосты за мир, любовь и дружбу народов.</p>
                            <a href="" style="font-size:14x;color: #232538;
				">Подробнее</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="customer-review">
                            <div class="customer-profile">


                                <img src="{{ asset('assets/images/customer.jpg') }}">
                                <div class="review-title">


                                    <h4>Александр</h4>
                                    <p>София, Болгария</p>

                                </div>
                            </div>

                            <div class="stars-place" style="margin-top: 15px;">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                            </div>


                            <p style="font-size:13px;color: #898B9E;
						">Очень красивое место! Прекрасный, добрый персонал! Благодаря их гостеприимству сбылась мечта и удалось побыть гостем за грузинским новогодним столом. Танцы, великолепное вино, чача, традиционные и душевные тосты за мир, любовь и дружбу народов.</p>
                            <a href="" style="font-size:14x;color: #232538;
				">Подробнее</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="customer-review">
                            <div class="customer-profile">


                                <img src="{{ asset('assets/images/customer.jpg') }}">
                                <div class="review-title">


                                    <h4>Александр</h4>
                                    <p>София, Болгария</p>

                                </div>
                            </div>

                            <div class="stars-place" style="margin-top: 15px;">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                            </div>


                            <p style="font-size:13px;color: #898B9E;
						">Очень красивое место! Прекрасный, добрый персонал! Благодаря их гостеприимству сбылась мечта и удалось побыть гостем за грузинским новогодним столом. Танцы, великолепное вино, чача, традиционные и душевные тосты за мир, любовь и дружбу народов.</p>
                            <a href="" style="font-size:14x;color: #232538;
				">Подробнее</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="customer-review">
                            <div class="customer-profile">


                                <img src="{{ asset('assets/images/customer.jpg') }}">
                                <div class="review-title">


                                    <h4>Александр</h4>
                                    <p>София, Болгария</p>

                                </div>
                            </div>

                            <div class="stars-place" style="margin-top: 15px;">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                                <img src="{{ asset('assets/images/svg/star.svg') }}">
                            </div>


                            <p style="font-size:13px;color: #898B9E;
						">Очень красивое место! Прекрасный, добрый персонал! Благодаря их гостеприимству сбылась мечта и удалось побыть гостем за грузинским новогодним столом. Танцы, великолепное вино, чача, традиционные и душевные тосты за мир, любовь и дружбу народов.</p>
                            <a href="" style="font-size:14x;color: #232538;
				">Подробнее</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>





    </main>
@endsection
