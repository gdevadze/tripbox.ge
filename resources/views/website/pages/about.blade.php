@extends('website.layouts.app')

@section('content')

<style>

</style>
    <main>

    <section class="pt-4 pt-md-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-6">
			
				<h1 style="    color: #1A906B;">@lang('about_us')</h1>

                @if(App::getLocale() == 'ka') 
			<p class="lead mb-0" style="    color: #141414;
    font-weight: bold;
    font-size: 30px;">იურუდიული ინფორმაცია</p>

                <p style="margin-top:15px;color: #1E1E1E;    font-size: 14px;
">

ჩვენი სერვისები მოწოდებულია იურიდიული სახელით LTD TRIPBOX, რეგისტრირებული საქართველოში. ჩვენ ვთანამშრომლობთ მხოლოდ გადამოწმებულ და სანდო გაქირავების პროვაიდერებთან, რაც გარანტირებულია ყოველი ავტომობილის ხარისხსა და მდგომარეობას.

</p>
<p style="    font-size: 14px;color: #1E1E1E;">ჩვენ დავიწყეთ საქმიანობა 2024 წელს. ჩვენ, tripbox-ში, გვჯერა, რომ მოგზაურობა უნდა იყოს რაღაც მეტი, ვიდრე უბრალოდ გადაადგილება წერტილი A-დან წერტილი B-მდე. ჩვენი მისიაა არა მხოლოდ მოგაწოდოთ კომფორტული ტრანსპორტი, არამედ უზრუნველყოთ თქვენი სრული ჩართულობა საქართველოს კულტურაში და წარმოვაჩინოთ მისი სილამაზე</p>			
<p style="    font-size: 14px;color: #1E1E1E;">შემოუერთდით ჩვენს თავგადასავალს

გახდით tripbox-ის საზოგადოების ნაწილი, სადაც ყოველი მოგზაურობა არის შესაძლებლობა შექმნათ რაღაც უნიკალური და დაუვიწყარი. ჩვენ ვიზრუნებთ, რომ თქვენი მოგზაურობის ყოველი ასპექტი იყოს სრულყოფილი, მარშრუტიდან დაწყებული სახლში დაბრუნების მომენტამდე.
</p>                    

@endif


@if(App::getLocale() == 'en') 
			<p class="lead mb-0" style="    color: #141414;
    font-weight: bold;
    font-size: 30px;">Legal Information</p>

                <p style="margin-top:15px;color: #1E1E1E;    font-size: 14px;
">

Our services are provided by the legal entity LTD TRIPBOX, registered in Georgia. We cooperate only with verified and reliable rental suppliers, which guarantees the quality and condition of each vehicle.


</p>
<p style="    font-size: 14px;color: #1E1E1E;">We started our activities in 2024. At TripBox, we believe that a journey should be more than just moving from point A to point B. Our mission is not only to provide you with comfortable transportation but also to immerse you in the culture of Georgia and show you its beauty.
</p>			
<p style="    font-size: 14px;color: #1E1E1E;">Join our adventures and become part of the TripBox community, where every journey is an opportunity to create something unique and unforgettable. We will take care of every aspect of your trip, from the route to the moment you return home.

</p>                    

@endif

@if(App::getLocale() == 'ru') 
			<p class="lead mb-0" style="    color: #141414;
    font-weight: bold;
    font-size: 30px;">Юридическая информация</p>

                <p style="margin-top:15px;color: #1E1E1E;    font-size: 14px;
">

Наши услуги предоставляются юридическим лицом LTD TRIPBOX, зарегистрированным в Грузии. Мы сотрудничаем только с проверенными и надежными поставщиками проката, что гарантирует качество и состояние каждого автомобиля.


</p>
<p style="    font-size: 14px;color: #1E1E1E;">Мы начали свою деятельность в 2024 году. В TripBox мы верим, что путешествие должно быть чем-то большим, чем просто передвижение из точки A в точку B. Наша миссия - не только обеспечить вас комфортным транспортом, но и погрузить вас в культуру Грузии и показать ее красоту.

</p>			
<p style="    font-size: 14px;color: #1E1E1E;">Присоединяйтесь к нашим приключениям и станьте частью сообщества TripBox, где каждое путешествие - это возможность создать что-то уникальное и незабываемое. Мы позаботимся о каждом аспекте вашего путешествия, начиная с маршрута и заканчивая моментом возвращения домой.


</p>                    

@endif



</div>

<div class="col-xl-6">
<img src="/assets/images/about/about_picture_2.png">

</div>
		</div>


        <div class="row mb-5" style="margin-top: 150px;">

        <div class="col-md-6">
       <img src="/assets/images/about/about_picutre_1.png">


        </div>

        <div class="col-md-6">
        @if(App::getLocale() == 'ka') 
        <h3  style="    color: #1A906B;">ჩვენი განსაკუთრებულობები</h3>

        <p class="lead mb-0" style="    color: #141414;
    font-weight: bold;
    font-size: 30px;">   საუკეთესო სერვისები თქვენი მოგზაურობისთვის </p>

    <ul style="margin-top: 50px;">

    <li>პერსონალიზებული მარშრუტი: დაგეგმეთ მოგზაურობა თქვენი ინტერესებიდან გამომდინარე.</li>
    <li>
ყველაფერი ჩართულია: ავტომობილის გაქირავება და მოგზაურობის ორგანიზაცია ერთ სივრცეში.</li>
    <li>მხარდაჭერა 24/7: მზად ვართ დაგეხმაროთ ნებისმიერ დროს.</li>
    <li>ხარისხის გარანტია: მხოლოდ გადამოწმებული ავტომობილები.</li>
    <li>გამჭვირვალე ფასები: ფარულ გადახდების გარეშე.</li>
    <li>მოვიყვანთ ავტომობილს პირდაპირ თქვენთან ან ნებისმიერ საქართველოს წერტილშ თქვენი არჩევანით.</li>
    <li>ავტომობილი ახლოს: მოძებნეთ და დაჯავშნეთ უახლოესი ხელმისაწვდომი ავტომობილი რამდენიმე ღილაკით.</li>
   
    </ul>
    @endif


    @if(App::getLocale() == 'ru') 
        <h3  style="    color: #1A906B;">Наши особенности</h3>

        <p class="lead mb-0" style="    color: #141414;
    font-weight: bold;
    font-size: 30px;">   Лучшие услуги для вашего путешествия </p>

    <ul style="margin-top: 50px;">

    <li>Персонализированный маршрут: планируйте путешествие в соответствии с вашими интересами.</li>
    <li>
    Все включено: аренда автомобиля и организация поездки в одном месте.</li>
    <li>Поддержка 24/7: готовы помочь вам в любое время.</li>
    <li>Гарантия качества: только проверенные автомобили.</li>
    <li>Прозрачные цены: без скрытых платежей.</li>
    <li>Доставим автомобиль прямо к вам или в любой точке Грузии по вашему выбору.</li>
    <li>Автомобиль рядом: найдите и забронируйте ближайший доступный автомобиль несколькими нажатиями кнопок.</li>
   
    </ul>
    @endif

    @if(App::getLocale() == 'en') 
        <h3  style="    color: #1A906B;">Our Features</h3>

        <p class="lead mb-0" style="    color: #141414;
    font-weight: bold;
    font-size: 30px;">   The Best Services for Your Journey </p>

    <ul style="margin-top: 50px;">

    <li>Personalized Itinerary: Plan your trip according to your interests.</li>
    <li>
    All-Inclusive: Car rental and trip organization in one place.</li>
    <li>24/7 Support: Ready to assist you at any time.</li>
    <li>Quality Guarantee: Only verified vehicles.</li>
    <li>Transparent Prices: No hidden fees.</li>
    <li>We'll deliver the car directly to you or to any point in Georgia of your choice.</li>
    <li>Car Nearby: Find and book the nearest available car with just a few clicks.</li>
   
    </ul>
    @endif
        </div>

        </div>



        @include('website.particials.services_block')
       
		


	</div>
</section>



    </main>

    <style>

    .services-boxes {
        background: #F7FDF9;
        margin-bottom: 30px;
    padding: 25px;
    }
    .services-boxes h4 {
        
    font-size: 22px;
    }
    .services-boxes p {
        
        font-size: 16px;
        }
        .boxes-colored {
    border: 1px solid #F2F2F2;
    background: #fff;
    border-radius: 10px;
}
    </style>
@endsection
@push('js')
    
@endpush
