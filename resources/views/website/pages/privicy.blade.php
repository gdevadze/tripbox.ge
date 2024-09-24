@extends('website.layouts.app')

@section('content')

<style>

</style>
    <main>

    <section class="pt-4 pt-md-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-12">
			
				<h1 style="    color: #1A906B;font-size:25px;" class="text-center">@lang('confidencialobis_politika')</h1>
				<p>
                @lang('confidencialobis_politika')
</p>

@if(App::getLocale() == 'ka') 
<p>
    ეს კონფიდენციალურობის პოლიტიკა შექმნილია იმისთვის, რომ მომხმარებლებს აცნობოს
    tripbox.ge შეგროვებული მათი პირადი ინფორმაციის შეგროვების, გამოყენებისა და
    გამჟღავნების შესახებ.
</p>
<p>
    ჩვენ ვაგროვებთ პერსონალურ ინფორმაციას, რომელსაც მომხმარებლები ნებაყოფლობით
    გვაწვდიან რეგისტრაციის, მანქანის დაჯავშნის ან პლატფორმასთან სხვა
    ურთიერთობისას. ეს შეიძლება შეიცავდეს სახელს, ელფოსტის მისამართს, საკონტაქტო
    ტელეფონის ნომერს, პასპორტს და მართვის მოწმობის დეტალებს.
</p>
<p>
    პლატფორმამ ასევე შეიძლება ავტომატურად შეაგროვოს ტექნიკური ინფორმაცია,
    როგორიცაა IP მისამართი, ბრაუზერის ტიპი, დათვალიერების ისტორია და სხვა
    მონაცემები, რომლებიც დაკავშირებულია პლატფორმის გამოყენებასთან. შეგროვებული
    ინფორმაცია გამოიყენება პლატფორმის სერვისების უზრუნველსაყოფად და
    გასაუმჯობესებლად, ჯავშნების დასამუშავებლად, მომხმარებლებთან კომუნიკაციისთვის
    და პლატფორმის საერთო უსაფრთხოების უზრუნველსაყოფად. ინფორმაცია შეიძლება
    გამოყენებულ იქნას მხოლოდ მარკეტინგული მიზნებისთვის, თუ მომხმარებელი
    თანხმდება ამაზე მომხმარებელთა პირადი ინფორმაცია შეიძლება გამჟღავნდეს მესამე
    მხარეებთან, თუ ეს აუცილებელია ჯავშნის სერვისების შესასრულებლად, ან
    კანონმდებლობით.
</p>
<p>
    ინფორმაციის გაზიარება შესაძლებელია ავტომობილის მფლობელებთან, ასევე
    პლატფორმის სერვის და ტექნიკურ პარტნიორებთან, ამ პოლიტიკის პირობების
    შესაბამისად.
</p>
<p>
    პლატფორმა იღებს ყველა საჭირო ზომას მომხმარებლის პერსონალური მონაცემების
    უსაფრთხოების უზრუნველსაყოფად, მათ შორის მათი დაცვა არაავტორიზებული
    წვდომისგან, მოდიფიკაციის, გამჟღავნების ან განადგურებისგან.
</p>
<p>
    მომხმარებლებს უფლება აქვთ მიიღონ წვდომა, შეასწორონ და წაშალონ თავიანთი
    პერსონალური მონაცემები, რომლებიც მათ მიაწოდეს პლატფორმაზე. მათ ასევე
    შეუძლიათ გააუქმონ თანხმობა მათი მონაცემების დამუშავებაზე.
</p>
<p>
    პლატფორმა იტოვებს უფლებას ნებისმიერ დროს შეიტანოს ცვლილებები ამ
    კონფიდენციალურობის პოლიტიკაში. ყველა ცვლილება მომხმარებლებს ეცნობება
    პლატფორმის საშუალებით.
</p>
<p>
    თუ გაქვთ კითხვები ან გსურთ მიიღოთ მეტი ინფორმაცია, თუ როგორ ვახდენთ თქვენი
    პერსონალური მონაცემების დამუშავებას გთხოვთ დაგვიკავშირდეთ info@tripbox.ge
</p>
@endif

@if(App::getLocale() == 'ru') 


<div>
    Эта Политика конфиденциальности предназначена для того, чтобы
    проинформировать пользователей о сборе, использовании и раскрытии их личной
    информации, собранной на сайте tripbox.ge.
</div>
<div>
    <br/>
</div>
<div>
    Мы собираем личную информацию, которую пользователи добровольно
    предоставляют нам при регистрации, бронировании автомобиля или при других
    взаимодействиях с платформой. Это может включать имя, адрес электронной
    почты, контактный номер телефона, паспортные данные и данные водительского
    удостоверения.
</div>
<div>
    <br/>
</div>
<div>
    Платформа также может автоматически собирать техническую информацию, такую
    как IP-адрес, тип браузера, история просмотров и другие данные, связанные с
    использованием платформы. Собранная информация используется для
    предоставления и улучшения сервисов платформы, обработки бронирований,
    общения с пользователями и обеспечения общей безопасности платформы.
    Информация может использоваться в маркетинговых целях только с согласия
    пользователя. Личная информация пользователей может быть раскрыта третьим
    сторонам, если это необходимо для выполнения услуг по бронированию или по
    требованию закона.
</div>
<div>
    <br/>
</div>
<div>
    Информация может быть передана владельцам автомобилей, а также сервисным и
    техническим партнерам платформы в соответствии с условиями данной политики.
</div>
<div>
    <br/>
</div>
<div>
    Платформа принимает все необходимые меры для обеспечения безопасности личных
    данных пользователей, включая защиту их от несанкционированного доступа,
    изменения, раскрытия или уничтожения.
</div>
<div>
    <br/>
</div>
<div>
    Пользователи имеют право на доступ, исправление и удаление своих личных
    данных, предоставленных платформе. Они также могут отозвать свое согласие на
    обработку их данных.
</div>
<div>
    <br/>
</div>
<div>
    Платформа оставляет за собой право вносить изменения в эту Политику
    конфиденциальности в любое время. Все изменения будут сообщены пользователям
    через платформу.
</div>
<div>
    <br/>
</div>
<div>
    Если у вас есть вопросы или вы хотите получить дополнительную информацию о
    том, как мы обрабатываем ваши личные данные, пожалуйста, свяжитесь с нами по
    адресу info@tripbox.ge.
</div>

@endif

@if(App::getLocale() == 'en') 
<div>
    This Privacy Policy is designed to inform users about the collection, use,
    and disclosure of their personal information collected on tripbox.ge.
</div>
<div>
    <br/>
</div>
<div>
    We collect personal information that users voluntarily provide to us during
    registration, car booking, or other interactions with the platform. This may
    include name, email address, contact phone number, passport details, and
    driver's license information.
</div>
<div>
    <br/>
</div>
<div>
    The platform may also automatically collect technical information, such as
    IP address, browser type, browsing history, and other data related to the
    use of the platform. The collected information is used to provide and
    improve platform services, process bookings, communicate with users, and
    ensure the overall security of the platform. Information may be used for
    marketing purposes only with the user's consent. Users' personal information
    may be disclosed to third parties if necessary to fulfill booking services
    or as required by law.
</div>
<div>
    <br/>
</div>
<div>
    Information may be shared with car owners, as well as service and technical
    partners of the platform, in accordance with the terms of this policy.
</div>
<div>
    <br/>
</div>
<div>
    The platform takes all necessary measures to ensure the security of users'
    personal data, including protecting them from unauthorized access,
    modification, disclosure, or destruction.
</div>
<div>
    <br/>
</div>
<div>
    Users have the right to access, correct, and delete their personal data
    provided to the platform. They can also withdraw their consent to the
    processing of their data.
</div>
<div>
    <br/>
</div>
<div>
    The platform reserves the right to make changes to this Privacy Policy at
    any time. All changes will be communicated to users through the platform.
</div>
<div>
    <br/>
</div>
<div>
    If you have any questions or would like more information on how we process
    your personal data, please contact us at info@tripbox.ge.
</div>

@endif
</div>


		</div>


     

		
		


	</div>
</section>



    </main>

    
@endsection
@push('js')
    
@endpush
