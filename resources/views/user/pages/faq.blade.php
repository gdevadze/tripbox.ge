@extends('user.layouts.app')

@section('content')
    <main>


        
    @include('user.general.header')

    <style>
.faqs-menu {
    display: flex;
    margin-top: 38px;
    margin-bottom: 20px;
}
.faqs-menu li {
    list-style: none;
    margin-right: 40px;
}
.faqs-menu li a{
    color:var(--bs-gray-800);
}
    </style>


        <div class="page-content">


          @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">

            <div class="row">

            <div class="col-md-2">
            <h4 style="font-size: 30px;margin-top:30px;margin-bottom: 20px;">FAQ</h4>
            </div>

            <div class="col-md-10">

            <div class="d-flex">

            <ul class="faqs-menu">
        <li><a href="/about" target="_blank">@lang('about_us')</a></li>
        <li><a href="/privicy" target="_blank">@lang('confidencialoba')</a></li>
        <li><a href="/rules" target="_blank">@lang('privicy_rules')</a></li>
    </ul>

            </div>
            </div>

            </div>
      

                <div class="row" style="margin-top:10px;">

               


                <div class="col-md-6">


                <video width="100%" height="440" controls>
                <source src="/assets/upload/1.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>

                <h4 style="    margin-top: 20px;">ზოგადი</h4>


                </div>
                  

                      <div class="col-md-6">


                <video width="100%" height="440" controls>
                <source src="/assets/upload/2.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>

                <h4 style="    margin-top: 20px;">მენიუს განმარტება</h4>

                </div>
                  

  
                <div class="col-md-6" style="margin-top:0px;">


                    <video width="100%" height="440" controls>
                    <source src="/assets/upload/3.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>

                    <h4 style="    margin-top: 20px;">ავტომობილის რეგისტრაცია</h4>

                    </div>
                 


                </div>


            </div>


            <!-- faq1 -->




<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-xl-10 mx-auto">
				<div class="vstack gap-4">
				




					<div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">როგორ მუშაობს მიწოდების სისტემა?
</h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">ჩვენი პლატფორმა სთავაზობს ავტომობილების მიწოდებას საქართველოს ნებისმიერ წერტილში. კლიენტებს ასევე შეუძლიათ დააბრუნონ ავტომობილი ნებისმიერ ადგილას. მიწოდების ღირებულება გამოითვლება Google Distance-ის გამოყენებით და შეადგენს $0.4 კილომეტრზე. ეს თანხა გადაეცემა ავტომობილის მფლობელს. თუ ავტომობილი იმყოფება მიწოდების ადგილიდან 10 კმ რადიუსში, მიწოდება უფასოა.
</p>
							</div>

							
						</div>
					</div>


                    <div class="card border bg-transparent p-0">
			
						<div class="card-header bg-transparent border-bottom p-4">
							<h5 class="mb-0">როგორ ხდება კილომეტრების აღრიცხვა?
 </h5>
						</div>

					
						<div class="card-body p-4 pt-0">
							
							<div class="mt-4">
								
								<p class="mb-0">ავტომობილზე დამონტაჟებულია პინი ან ტრეკერი, რომელიც აღრიცხავს გავლილ მანძილს. ეს საშუალებას იძლევა ზუსტად აღვნიშნოთ კილომეტრები და გამოვთვალოთ გადახდა.
 </p>
							</div>

							
						</div>
					</div>

                    <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> შემიძლია თუ არა დავადგინო დეპოზიტი ავტომობილის იჯარაზე?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0"> დიახ, შეგიძლიათ დაადგინოთ დეპოზიტი $100-200-ის ოდენობით. თუმცა, ავტომობილები ნულოვანი დეპოზიტით უკეთ ქირავდება.
</p>
                </div>

                
            </div>
        </div>
        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> როგორ შემიძლია დავადგინო ავტომობილის იჯარის ფასი?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0">შეგიძლიათ დაადგინოთ ფასები იჯარის ხანგრძლივობის მიხედვით:<br />
2-4 დღე<br />
5-9 დღე<br />
10+ დღე
 </p>
                </div>

                
            </div>
        </div>
        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> რა ფუნქციებია ხელმისაწვდომი ჩემი ანგარიშის პანელში?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0"> თქვენს პანელში შეგიძლიათ: <br />
შეწყვიტოთ ავტომობილის გაქირავება ("სტოპ ავტომობილი" ფუნქცია)<br />
დაარედაქტიროთ ავტომობილის ინფორმაცია<br />
ნახოთ ავტომობილის ადგილმდებარეობა<br />
შესთავაზოთ ფასდაკლება<br />
შეცვალოთ იჯარის ღირებულება<br />
წაშალოთ ავტომობილი<br />
იხილოთ შეკვეთების, კლიენტების, შემოსავლების და გაქირავებული ავტომობილების ანალიზი
</p>
                </div>

                
            </div>
        </div>
        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0">  ⁠რა ახალი ფუნქციები მალე იქნება ხელმისაწვდომი?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0">რუკა: ყველა ავტომობილი იქნება ნაჩვენები რუკაზე კლიენტის ინფორმაციის ჩათვლით, ვინც ავტომობილი იქირავა. თქვენ შეძლებთ ნახოთ ავტომობილის მაქსიმალური სიჩქარე და სიჩქარის გადაჭარბება.
კალენდარი: მფლობელს შეეძლება ნახოს კლიენტების შეკვეთები დღეების, კვირების და თვეების მიხედვით. ასევე, შესაძლებელი იქნება თარიღების არჩევა და მათი დაბლოკვა იჯარისთვის.
ჯარიმები: მფლობელს შეეძლება თვალყური ადევნოს ავტომობილის ჯარიმებს, მათი გადახდის ვადებს და სხვა დეტალებს. ეს სერვისი იქნება ფასიანი და ეღირება 1.5-2 ლარი ავტომობილზე.
 </p>
                </div>

                
            </div>
        </div>


        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> რა უნდა გავაკეთო, თუ ვერ შევძლებ შეკვეთილი მოდელის მიწოდებას?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0"> თუ ვერ შეძლებთ შეკვეთილი მოდელის მიწოდებას, უნდა უზრუნველყოთ ანალოგიური ან უკეთესი მოდელი.
</p>
                </div>

                
            </div>
        </div>
        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> რა უნდა მივუთითო პლატფორმაზე რეგისტრაციისას?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0"> რეგისტრაციისას აუცილებელია მიუთითოთ აქტუალური საკონტაქტო მონაცემები. ამ მონაცემებზე გამოგეგზავნებათ შეტყობინებები შეკვეთების შესახებ.
</p>
                </div>

                
            </div>
        </div>
        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> რა უნდა მიუთითო ავტომობილის რეგისტრაციისას?</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0">ავტომობილის რეგისტრაციისას აუცილებელია მიუთითოთ მისი ადგილმდებარეობა, გამოიყენეთ რუკის გვერდით არსებული შეყვანის ველი ან დააყენეთ პინი, რათა სისტემა ხედავდეს ავტომობილს.
თუ ტრეკერი იქნება საჭირო, ჩვენი კომპანია მას უფასოდ მოგაწვდით.
ასევე აუცილებელია შეავსოთ ყველა ველი და ატვირთოთ ავტომობილის ფოტოები. პირველი ფოტო უნდა იყოს თეთრი ფონზე.
 </p>
                </div>

                
            </div>
        </div>

        <div class="card border bg-transparent p-0">
			
            <div class="card-header bg-transparent border-bottom p-4">
                <h5 class="mb-0"> რა უნდა გავითვალისწინო იჯარის ფასის დადგენისას?
</h5>
            </div>

        
            <div class="card-body p-4 pt-0">
                
                <div class="mt-4">
                    
                    <p class="mb-0"> ავტომობილის რეგისტრაციისას და იჯარის ფასის დადგენისას, თქვენ მიიღებთ აღნიშნულ თანხას შეკვეთის დროს. ჩვენ არ ვიღებთ დამატებით გადასახადს ამ თანხიდან. გაითვალისწინეთ, რომ ავტომობილის ფასი უნდა იყოს მისაღები, რადგან ჩვენი პლატფორმა თავის კომისიას უმატებს ზევიდან.</p>
                </div>

                
            </div>
        </div>
        
   


					
					


				
				</div>		
			</div>
		</div>
	</div>
</section>

            <!-- ... faq -->

        </div>


    </main>
@endsection
