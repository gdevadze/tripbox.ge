@extends('website.layouts.app')

@section('content')

<style>


</style>
    <main>

    <section class="pt-4 pt-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-dots justify-content-center">
						<li class="breadcrumb-item"><a href="/"><i class="bi bi-house me-1"></i> @lang('home')</a></li>
						<li class="breadcrumb-item active">Faqs</li>
					</ol>
				</nav>
				
				<h6 class="text-primary"></h6>
				<h1>@lang('faqs_desc')</h1>
				
				<p>@lang('other_questions')</p>
				
				
			</div>
		</div>
	</div>
</section>



<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-xl-10 mx-auto">
			@if(App::getLocale() == 'ka') 
				<div class="vstack gap-4">
				
					<div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">როგორ უზრუნველყოფს Tripbox ხარისხისა და სანდოობის გარანტიას?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">ჩვენ ვთანამშრომლობთ მხოლოდ გადამოწმებულ გაქირავების პროვაიდერებთან, ვუზრუნველყოფთ თითოეული მანქანის ხარისხსა და მდგომარეობას. ყველა განცხადება გადის შემოწმებას საიტზე განთავსებამდე.</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">როგორ მუშაობს მანქანის გაქირავება Tripbox-ის საშუალებით?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">ჩვენი საიტი წარმოადგენს შუამავალს მანქანის მფლობელსა და დამქირავებელს შორის, რაც საშუალებას აძლევს მანქანის დროებით გაქირავებას, ნაქირავების ხელშეკრულების პირობების შესაბამისად.</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">შემიძლია თუ არა შევცვალო ჯავშნის თარიღი?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">
დიახ, თქვენ შეგიძლიათ შეცვალოთ ჯავშნის თარიღი გაქირავების დაწყებამდე ნებისმიერ დროს, დაუკავშირდით ჩვენს მხარდაჭერის სამსახურს.
</p>
							</div>

							
						</div>
					</div>


                      <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">შემიძლია თუ არა გადავცე ჩემი ჯავშნა სხვა პირს?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">არა, ჯავშნა არ შეიძლება მესამე პირებზე გადაცემად. ყველა ცვლილება უნდა შეთანხმდეს ჩვენს მხარდაჭერის სამსახურთან.
</p>
							</div>

							
						</div>
					</div>


                      <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">როგორ შემიძლია გავაუქმო ჯავშნა?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">როგორ შემიძლია გავაუქმო ჯავშნა?
თქვენ შეგიძლიათ გააუქმოთ ჯავშნა გაქირავების დაწყებამდე ნებისმიერ დროს. თანხის დაბრუნება დამოკიდებულია გაუქმების შეტყობინების დროზე:

24 საათით ადრე გაქირავების დაწყებამდე – სრული თანხის დაბრუნება.
24 საათზე ნაკლები – თანხის დაბრუნება არ ხდება.

</p>
							</div>

							
						</div>
					</div>

                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">რა უნდა გავაკეთო, თუ მანქანა არ არის ხელმისაწვდომი?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">თუ მანქანა არ არის ხელმისაწვდომი დაზიანების ან სხვა გარემოებების გამო, ჩვენ მოგაწვდით ანალოგიურ ან უფრო მაღალ კლასის მანქანას დამატებითი საფასურის გარეშე. ჩანაცვლების შეუძლებლობის შემთხვევაში, თქვენ მიიღებთ სრული თანხის დაბრუნებას.



</p>
							</div>

							
						</div>
					</div>

                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">რა გადახდის მეთოდები მიიღება?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">ჩვენ ვიღებთ საკრედიტო და სადებეტო ბარათებს. 
როგორ ხდება თანხის დაბრუნება?
თანხის დაბრუნება ხდება იგივე მეთოდით, რომელიც გამოყენებული იქნა გადახდისთვის, [მიუთითეთ დღეების რაოდენობა] დღეში გაუქმების დადასტურების შემდეგ.




</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">რა არის მინიმალური ქირავების ვადები?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">მინიმალური ქირავების ვადა არის 48 საათი. თუ თქვენ ქირაობთ მანქანას 48 და რამოდენიმე საათით მეტს, თქვენ გადაიხდით სრული 3 დღის საფასურს.



</p>
							</div>

							
						</div>
					</div>


                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">რა მოთხოვნებია მძღოლების მიმართ?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">მინიმალური ასაკი და მართვის გამოცდილება მითითებულია თითოეული მანქანისთვის საიტზე. მძღოლს უნდა ჰქონდეს მოქმედი ეროვნული მართვის მოწმობა ლათინური ტრანსლიტერაციით.



</p>
							</div>

							
						</div>
					</div>


                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">შემიძლია თუ არა გამოვიყენო მანქანა საქართველოს ფარგლებს გარეთ?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">არა, გაქირავებული მანქანების გამოყენება საქართველოს ფარგლებს გარეთ აკრძალულია.
თუ გაქვთ დამატებითი კითხვები, გთხოვთ, დაუკავშირდეთ ჩვენს მხარდაჭერის სამსახურს მისამართზე info.tripbox.ge


</p>
							</div>

							
						</div>
					</div>
					
					


				
				</div>		
				@endif



				@if(App::getLocale() == 'en') 
				<div class="vstack gap-4">
				
					<div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">How does Tripbox ensure quality and reliability?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">We cooperate only with verified rental providers, ensuring the quality and condition of each vehicle. All listings are reviewed before being posted on the site.</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">How does car rental work through Tripbox?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Our site acts as an intermediary between the car owner and the renter, allowing temporary car rentals according to the terms of the rental agreement.
</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Can I change the booking date?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">
								Yes, you can change the booking date at any time before the rental period begins by contacting our support service.
</p>
							</div>

							
						</div>
					</div>


                      <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Can I transfer my booking to another person?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">No, bookings cannot be transferred to third parties. All changes must be agreed upon with our support service.
</p>
							</div>

							
						</div>
					</div>


                      <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">How can I cancel my booking?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">You can cancel your booking at any time before the rental period begins. Refunds depend on the time of cancellation notice: 24 hours before the rental period – full refund. Less than 24 hours – no refund.


</p>
							</div>

							
						</div>
					</div>

                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">What should I do if the car is not available?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">If the car is unavailable due to damage or other circumstances, we will provide you with a similar or higher class car at no additional cost. If replacement is not possible, you will receive a full refund.



</p>
							</div>

							
						</div>
					</div>

                     


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">What payment methods are accepted?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">We accept credit and debit cards.



</p>
							</div>

							
						</div>
					</div>


                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">How are refunds processed?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Refunds are made using the same method that was used for payment, within [specify number of days] days after cancellation confirmation.




</p>
							</div>

							
						</div>
					</div>


                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">What is the minimum rental period?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">The minimum rental period is 48 hours. If you rent a car for 48 hours and a few additional hours, you will be charged for a full 3 days.



</p>
							</div>

							
						</div>
					</div>

					<div class="card border bg-transparent p-0">
			
			<div class="card-header bg-transparent border-bottom p-4">
				<h5 class="mb-0">What are the driver requirements?</h5>
			</div>

		
			<div class="card-body p-4 pt-0">
				
				<div class="mt-4">
					
					<p class="mb-0">The minimum age and driving experience are specified for each car on the site. The driver must have a valid national driving license with Latin transliteration.




</p>
				</div>

				
			</div>
		</div>


		<div class="card border bg-transparent p-0">
			
			<div class="card-header bg-transparent border-bottom p-4">
				<h5 class="mb-0">Can I use the rental car outside Georgia?</h5>
			</div>

		
			<div class="card-body p-4 pt-0">
				
				<div class="mt-4">
					
					<p class="mb-0">No, the use of rental cars outside of Georgia is prohibited. If you have additional questions, please contact our support service at info@tripbox.ge.





</p>
				</div>

				
			</div>
		</div>
					
					


				
				</div>		
				@endif


				@if(App::getLocale() == 'ru') 
				<div class="vstack gap-4">
				
					<div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Как Tripbox гарантирует качество и надежность?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Мы сотрудничаем только с проверенными прокатными провайдерами, обеспечивая качество и состояние каждого автомобиля. Все объявления проходят проверку перед размещением на сайте.
</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Как работает аренда автомобилей через Tripbox?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Наш сайт является посредником между владельцем автомобиля и арендатором, что позволяет временно арендовать автомобиль в соответствии с условиями аренды.

</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Могу ли я изменить дату бронирования?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">
								Да, вы можете изменить дату бронирования в любое время до начала аренды, связавшись с нашей службой поддержки.

</p>
							</div>

							
						</div>
					</div>


                      <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Могу ли я передать свое бронирование другому лицу?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Нет, бронирование не может быть передано третьим лицам. Все изменения должны быть согласованы с нашей службой поддержки.

</p>
							</div>

							
						</div>
					</div>


                      <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Как я могу отменить бронирование?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Вы можете отменить бронирование в любое время до начала аренды. Возврат средств зависит от времени уведомления об отмене: за 24 часа до начала аренды – полный возврат средств. Менее чем за 24 часа – возврат средств не производится.



</p>
							</div>

							
						</div>
					</div>

                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Что делать, если автомобиль недоступен?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Если автомобиль недоступен из-за повреждений или других обстоятельств, мы предоставим вам аналогичный или более высокого класса автомобиль без дополнительной оплаты. В случае невозможности замены вы получите полный возврат средств.




</p>
							</div>

							
						</div>
					</div>

                     


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Какие методы оплаты принимаются?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Мы принимаем кредитные и дебетовые карты.




</p>
							</div>

							
						</div>
					</div>


                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Как происходит возврат средств?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Возврат средств осуществляется тем же методом, который использовался для оплаты, в течение [укажите количество дней] дней после подтверждения отмены.





</p>
							</div>

							
						</div>
					</div>


                     <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">Каков минимальный срок аренды?</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">Минимальный срок аренды составляет 48 часов. Если вы арендуете автомобиль на 48 часов и несколько дополнительных часов, вам будет начислена стоимость за полные 3 дня.




</p>
							</div>

							
						</div>
					</div>

					<div class="card border bg-transparent p-0">
			
			<div class="card-header bg-transparent border-bottom p-4">
				<h5 class="mb-0">Какие требования предъявляются к водителям?</h5>
			</div>

		
			<div class="card-body p-4 pt-0">
				
				<div class="mt-4">
					
					<p class="mb-0">Минимальный возраст и опыт вождения указаны для каждого автомобиля на сайте. У водителя должно быть действующее национальное водительское удостоверение с латинской транслитерацией.





</p>
				</div>

				
			</div>
		</div>


		<div class="card border bg-transparent p-0">
			
			<div class="card-header bg-transparent border-bottom p-4">
				<h5 class="mb-0">Могу ли я использовать арендованный автомобиль за пределами Грузии?</h5>
			</div>

		
			<div class="card-body p-4 pt-0">
				
				<div class="mt-4">
					
					<p class="mb-0">Нет, использование арендованных автомобилей за пределами Грузии запрещено. Если у вас есть дополнительные вопросы, пожалуйста, свяжитесь с нашей службой поддержки по адресу info@tripbox.ge.






</p>
				</div>

				
			</div>
		</div>
					
					


				
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
