<section class="pt-0">

	<div class="container-fluid mob-search-text-paddings" style="background-image:url({{asset('/assets/hero_image.jpg')}}); background-position: center left; background-size: cover;">
		<div class="row">
		
			<div class="col-md-8 mx-auto text-center pt-7 pb-3 pd-mb-paddings" >
				<h1 class="text-white">

                @if (currentLocale() == 'ru')
                {{---Экскурсии, аренда авто по Батуми <br /> ваш идеальный гид---}}
                Аренда авто в Батуми, экскурсии по Батуми - ваш идеальный гид.
                @endif

                @if (currentLocale() == 'en')
                Car Rental in Batumi, Tours in Batumi - Your Ultimate Guide

                @endif

                @if (currentLocale() == 'ka')
                Excursions, car rental in Batumi <br /> your perfect guide

                @endif

                </h1>
				<p class="lead text-white mb-0">@lang('search_text_upper')</p>
			</div>

            <div class="col-md-8 mx-auto text-center pt-7 pb-8 pd-mb-paddings"  style="padding-bottom: 80px !important;
    padding-top: 0px !important;">

            <div class="d-flex justify-content-between home_slider_buttons">

            <a href="https://wa.me/995591300998" target="_blank">
                @lang('contact_usebi')
            
                <svg width="42" height="43" style="margin-left: 10px;" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="21" cy="21.8613" r="20.5" fill="#FDFDFD" stroke="black"></circle>
<g filter="url(#filter0_d_0_1)">
<path d="M16.2701 26.1414C15.9901 25.7814 15.6401 25.0514 15.0301 24.1414C14.6801 23.6414 13.8201 22.6914 13.5601 22.2014C13.3727 21.9036 13.3183 21.541 13.4101 21.2014C13.5671 20.5556 14.1797 20.1272 14.8401 20.2014C15.3509 20.304 15.8203 20.5543 16.1901 20.9214C16.4483 21.1646 16.6858 21.4288 16.9001 21.7114C17.0601 21.9114 17.1001 21.9914 17.2801 22.2214C17.4601 22.4514 17.5801 22.6814 17.4901 22.3414C17.4201 21.8414 17.3001 21.0014 17.1301 20.2514C17.0001 19.6814 16.9701 19.5914 16.8501 19.1614C16.7301 18.7314 16.6601 18.3714 16.5301 17.8814C16.4113 17.3999 16.3178 16.9126 16.2501 16.4214C16.1241 15.7931 16.2158 15.1406 16.5101 14.5714C16.8595 14.2427 17.372 14.156 17.8101 14.3514C18.2507 14.6767 18.5792 15.131 18.7501 15.6514C19.0122 16.2918 19.1871 16.9644 19.2701 17.6514C19.4301 18.6514 19.7401 20.1114 19.7501 20.4114C19.7501 20.0414 19.6801 19.2614 19.7501 18.9114C19.8195 18.5465 20.0731 18.2437 20.4201 18.1114C20.7179 18.02 21.033 17.9995 21.3401 18.0514C21.6502 18.1162 21.9248 18.2945 22.1101 18.5514C22.3418 19.1348 22.4704 19.754 22.4901 20.3814C22.5169 19.832 22.6109 19.2879 22.7701 18.7614C22.9372 18.5259 23.1812 18.3562 23.4601 18.2814C23.7907 18.2209 24.1295 18.2209 24.4601 18.2814C24.7312 18.372 24.9684 18.5429 25.1401 18.7714C25.3519 19.3017 25.4801 19.8617 25.5201 20.4314C25.5201 20.5714 25.5901 20.0414 25.8101 19.6914C25.9244 19.352 26.2112 19.0993 26.5622 19.0287C26.9133 18.958 27.2755 19.0799 27.5122 19.3487C27.749 19.6174 27.8244 19.992 27.7101 20.3314C27.7101 20.9814 27.7101 20.9514 27.7101 21.3914C27.7101 21.8314 27.7101 22.2214 27.7101 22.5914C27.6737 23.1766 27.5935 23.7582 27.4701 24.3314C27.2961 24.8385 27.0539 25.3196 26.7501 25.7614C26.2646 26.3013 25.8634 26.9116 25.5601 27.5714C25.4849 27.8992 25.4513 28.2352 25.4601 28.5714C25.4591 28.882 25.4995 29.1914 25.5801 29.4914C25.1713 29.5346 24.759 29.5346 24.3501 29.4914C23.9601 29.4314 23.4801 28.6514 23.3501 28.4114C23.2858 28.2825 23.1541 28.2011 23.0101 28.2011C22.8661 28.2011 22.7344 28.2825 22.6701 28.4114C22.4501 28.7914 21.9601 29.4814 21.6201 29.5214C20.9501 29.6014 19.5701 29.5214 18.4801 29.5214C18.4801 29.5214 18.6601 28.5214 18.2501 28.1614C17.8401 27.8014 17.4201 27.3814 17.1101 27.1014L16.2701 26.1414Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2701 26.1414C15.9901 25.7814 15.6401 25.0514 15.0301 24.1414C14.6801 23.6414 13.8201 22.6914 13.5601 22.2014C13.3727 21.9036 13.3183 21.541 13.4101 21.2014C13.5671 20.5556 14.1797 20.1272 14.8401 20.2014C15.3509 20.304 15.8203 20.5543 16.1901 20.9214C16.4483 21.1646 16.6858 21.4288 16.9001 21.7114C17.0601 21.9114 17.1001 21.9914 17.2801 22.2214C17.4601 22.4514 17.5801 22.6814 17.4901 22.3414C17.4201 21.8414 17.3001 21.0014 17.1301 20.2514C17.0001 19.6814 16.9701 19.5914 16.8501 19.1614C16.7301 18.7314 16.6601 18.3714 16.5301 17.8814C16.4113 17.3999 16.3178 16.9126 16.2501 16.4214C16.1241 15.7931 16.2158 15.1406 16.5101 14.5714C16.8595 14.2427 17.372 14.156 17.8101 14.3514C18.2507 14.6767 18.5792 15.131 18.7501 15.6514C19.0122 16.2918 19.1871 16.9644 19.2701 17.6514C19.4301 18.6514 19.7401 20.1114 19.7501 20.4114C19.7501 20.0414 19.6801 19.2614 19.7501 18.9114C19.8195 18.5465 20.0731 18.2437 20.4201 18.1114C20.7179 18.02 21.033 17.9995 21.3401 18.0514C21.6502 18.1162 21.9248 18.2945 22.1101 18.5514C22.3418 19.1348 22.4704 19.754 22.4901 20.3814C22.5169 19.832 22.6109 19.2879 22.7701 18.7614C22.9372 18.5259 23.1812 18.3562 23.4601 18.2814C23.7907 18.2209 24.1295 18.2209 24.4601 18.2814C24.7312 18.372 24.9684 18.5429 25.1401 18.7714C25.3519 19.3017 25.4801 19.8617 25.5201 20.4314C25.5201 20.5714 25.5901 20.0414 25.8101 19.6914C25.9244 19.352 26.2112 19.0993 26.5622 19.0287C26.9133 18.958 27.2755 19.0799 27.5122 19.3487C27.749 19.6174 27.8244 19.992 27.7101 20.3314C27.7101 20.9814 27.7101 20.9514 27.7101 21.3914C27.7101 21.8314 27.7101 22.2214 27.7101 22.5914C27.6737 23.1766 27.5935 23.7582 27.4701 24.3314C27.2961 24.8385 27.0539 25.3196 26.7501 25.7614C26.2646 26.3013 25.8634 26.9116 25.5601 27.5714C25.4849 27.8992 25.4513 28.2352 25.4601 28.5714C25.4591 28.882 25.4995 29.1914 25.5801 29.4914C25.1713 29.5346 24.759 29.5346 24.3501 29.4914C23.9601 29.4314 23.4801 28.6514 23.3501 28.4114C23.2858 28.2825 23.1541 28.2011 23.0101 28.2011C22.8661 28.2011 22.7344 28.2825 22.6701 28.4114C22.4501 28.7914 21.9601 29.4814 21.6201 29.5214C20.9501 29.6014 19.5701 29.5214 18.4801 29.5214C18.4801 29.5214 18.6601 28.5214 18.2501 28.1614C17.8401 27.8014 17.4201 27.3814 17.1101 27.1014L16.2701 26.1414Z" stroke="black" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M24.75 26.6872V23.2354C24.75 23.0288 24.5821 22.8613 24.375 22.8613C24.1679 22.8613 24 23.0288 24 23.2354V26.6872C24 26.8938 24.1679 27.0613 24.375 27.0613C24.5821 27.0613 24.75 26.8938 24.75 26.6872Z" fill="black"></path>
<path d="M22.77 26.686L22.75 23.2324C22.7488 23.0263 22.5799 22.8601 22.3728 22.8613C22.1657 22.8625 21.9988 23.0306 22 23.2367L22.02 26.6903C22.0212 26.8964 22.1901 27.0625 22.3972 27.0613C22.6043 27.0601 22.7712 26.8921 22.77 26.686Z" fill="black"></path>
<path d="M20 23.2403L20.02 26.6867C20.0212 26.8948 20.1901 27.0625 20.3972 27.0613C20.6043 27.0601 20.7712 26.8904 20.77 26.6823L20.75 23.2359C20.7488 23.0278 20.5799 22.8601 20.3728 22.8613C20.1657 22.8625 19.9988 23.0322 20 23.2403Z" fill="black"></path>
</g>
<defs>
<filter id="filter0_d_0_1" x="12.1915" y="13.8732" width="16.7462" height="17.8588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
<feOffset dy="1"></feOffset>
<feGaussianBlur stdDeviation="0.4"></feGaussianBlur>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"></feColorMatrix>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1"></feBlend>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape"></feBlend>
</filter>
</defs>
</svg>
            </a>


            <a href="/register">-30% Off


            <svg width="42" height="43" style="margin-left: 10px;" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="21" cy="21.8613" r="20.5" fill="#FDFDFD" stroke="black"></circle>
<g filter="url(#filter0_d_0_1)">
<path d="M16.2701 26.1414C15.9901 25.7814 15.6401 25.0514 15.0301 24.1414C14.6801 23.6414 13.8201 22.6914 13.5601 22.2014C13.3727 21.9036 13.3183 21.541 13.4101 21.2014C13.5671 20.5556 14.1797 20.1272 14.8401 20.2014C15.3509 20.304 15.8203 20.5543 16.1901 20.9214C16.4483 21.1646 16.6858 21.4288 16.9001 21.7114C17.0601 21.9114 17.1001 21.9914 17.2801 22.2214C17.4601 22.4514 17.5801 22.6814 17.4901 22.3414C17.4201 21.8414 17.3001 21.0014 17.1301 20.2514C17.0001 19.6814 16.9701 19.5914 16.8501 19.1614C16.7301 18.7314 16.6601 18.3714 16.5301 17.8814C16.4113 17.3999 16.3178 16.9126 16.2501 16.4214C16.1241 15.7931 16.2158 15.1406 16.5101 14.5714C16.8595 14.2427 17.372 14.156 17.8101 14.3514C18.2507 14.6767 18.5792 15.131 18.7501 15.6514C19.0122 16.2918 19.1871 16.9644 19.2701 17.6514C19.4301 18.6514 19.7401 20.1114 19.7501 20.4114C19.7501 20.0414 19.6801 19.2614 19.7501 18.9114C19.8195 18.5465 20.0731 18.2437 20.4201 18.1114C20.7179 18.02 21.033 17.9995 21.3401 18.0514C21.6502 18.1162 21.9248 18.2945 22.1101 18.5514C22.3418 19.1348 22.4704 19.754 22.4901 20.3814C22.5169 19.832 22.6109 19.2879 22.7701 18.7614C22.9372 18.5259 23.1812 18.3562 23.4601 18.2814C23.7907 18.2209 24.1295 18.2209 24.4601 18.2814C24.7312 18.372 24.9684 18.5429 25.1401 18.7714C25.3519 19.3017 25.4801 19.8617 25.5201 20.4314C25.5201 20.5714 25.5901 20.0414 25.8101 19.6914C25.9244 19.352 26.2112 19.0993 26.5622 19.0287C26.9133 18.958 27.2755 19.0799 27.5122 19.3487C27.749 19.6174 27.8244 19.992 27.7101 20.3314C27.7101 20.9814 27.7101 20.9514 27.7101 21.3914C27.7101 21.8314 27.7101 22.2214 27.7101 22.5914C27.6737 23.1766 27.5935 23.7582 27.4701 24.3314C27.2961 24.8385 27.0539 25.3196 26.7501 25.7614C26.2646 26.3013 25.8634 26.9116 25.5601 27.5714C25.4849 27.8992 25.4513 28.2352 25.4601 28.5714C25.4591 28.882 25.4995 29.1914 25.5801 29.4914C25.1713 29.5346 24.759 29.5346 24.3501 29.4914C23.9601 29.4314 23.4801 28.6514 23.3501 28.4114C23.2858 28.2825 23.1541 28.2011 23.0101 28.2011C22.8661 28.2011 22.7344 28.2825 22.6701 28.4114C22.4501 28.7914 21.9601 29.4814 21.6201 29.5214C20.9501 29.6014 19.5701 29.5214 18.4801 29.5214C18.4801 29.5214 18.6601 28.5214 18.2501 28.1614C17.8401 27.8014 17.4201 27.3814 17.1101 27.1014L16.2701 26.1414Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2701 26.1414C15.9901 25.7814 15.6401 25.0514 15.0301 24.1414C14.6801 23.6414 13.8201 22.6914 13.5601 22.2014C13.3727 21.9036 13.3183 21.541 13.4101 21.2014C13.5671 20.5556 14.1797 20.1272 14.8401 20.2014C15.3509 20.304 15.8203 20.5543 16.1901 20.9214C16.4483 21.1646 16.6858 21.4288 16.9001 21.7114C17.0601 21.9114 17.1001 21.9914 17.2801 22.2214C17.4601 22.4514 17.5801 22.6814 17.4901 22.3414C17.4201 21.8414 17.3001 21.0014 17.1301 20.2514C17.0001 19.6814 16.9701 19.5914 16.8501 19.1614C16.7301 18.7314 16.6601 18.3714 16.5301 17.8814C16.4113 17.3999 16.3178 16.9126 16.2501 16.4214C16.1241 15.7931 16.2158 15.1406 16.5101 14.5714C16.8595 14.2427 17.372 14.156 17.8101 14.3514C18.2507 14.6767 18.5792 15.131 18.7501 15.6514C19.0122 16.2918 19.1871 16.9644 19.2701 17.6514C19.4301 18.6514 19.7401 20.1114 19.7501 20.4114C19.7501 20.0414 19.6801 19.2614 19.7501 18.9114C19.8195 18.5465 20.0731 18.2437 20.4201 18.1114C20.7179 18.02 21.033 17.9995 21.3401 18.0514C21.6502 18.1162 21.9248 18.2945 22.1101 18.5514C22.3418 19.1348 22.4704 19.754 22.4901 20.3814C22.5169 19.832 22.6109 19.2879 22.7701 18.7614C22.9372 18.5259 23.1812 18.3562 23.4601 18.2814C23.7907 18.2209 24.1295 18.2209 24.4601 18.2814C24.7312 18.372 24.9684 18.5429 25.1401 18.7714C25.3519 19.3017 25.4801 19.8617 25.5201 20.4314C25.5201 20.5714 25.5901 20.0414 25.8101 19.6914C25.9244 19.352 26.2112 19.0993 26.5622 19.0287C26.9133 18.958 27.2755 19.0799 27.5122 19.3487C27.749 19.6174 27.8244 19.992 27.7101 20.3314C27.7101 20.9814 27.7101 20.9514 27.7101 21.3914C27.7101 21.8314 27.7101 22.2214 27.7101 22.5914C27.6737 23.1766 27.5935 23.7582 27.4701 24.3314C27.2961 24.8385 27.0539 25.3196 26.7501 25.7614C26.2646 26.3013 25.8634 26.9116 25.5601 27.5714C25.4849 27.8992 25.4513 28.2352 25.4601 28.5714C25.4591 28.882 25.4995 29.1914 25.5801 29.4914C25.1713 29.5346 24.759 29.5346 24.3501 29.4914C23.9601 29.4314 23.4801 28.6514 23.3501 28.4114C23.2858 28.2825 23.1541 28.2011 23.0101 28.2011C22.8661 28.2011 22.7344 28.2825 22.6701 28.4114C22.4501 28.7914 21.9601 29.4814 21.6201 29.5214C20.9501 29.6014 19.5701 29.5214 18.4801 29.5214C18.4801 29.5214 18.6601 28.5214 18.2501 28.1614C17.8401 27.8014 17.4201 27.3814 17.1101 27.1014L16.2701 26.1414Z" stroke="black" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M24.75 26.6872V23.2354C24.75 23.0288 24.5821 22.8613 24.375 22.8613C24.1679 22.8613 24 23.0288 24 23.2354V26.6872C24 26.8938 24.1679 27.0613 24.375 27.0613C24.5821 27.0613 24.75 26.8938 24.75 26.6872Z" fill="black"></path>
<path d="M22.77 26.686L22.75 23.2324C22.7488 23.0263 22.5799 22.8601 22.3728 22.8613C22.1657 22.8625 21.9988 23.0306 22 23.2367L22.02 26.6903C22.0212 26.8964 22.1901 27.0625 22.3972 27.0613C22.6043 27.0601 22.7712 26.8921 22.77 26.686Z" fill="black"></path>
<path d="M20 23.2403L20.02 26.6867C20.0212 26.8948 20.1901 27.0625 20.3972 27.0613C20.6043 27.0601 20.7712 26.8904 20.77 26.6823L20.75 23.2359C20.7488 23.0278 20.5799 22.8601 20.3728 22.8613C20.1657 22.8625 19.9988 23.0322 20 23.2403Z" fill="black"></path>
</g>
<defs>
<filter id="filter0_d_0_1" x="12.1915" y="13.8732" width="16.7462" height="17.8588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
<feOffset dy="1"></feOffset>
<feGaussianBlur stdDeviation="0.4"></feGaussianBlur>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"></feColorMatrix>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1"></feBlend>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1" result="shape"></feBlend>
</filter>
</defs>
</svg>
            </a>

            </div>
        

            </div>
		</div> 
	</div>


	<div class="container mt-n8">
		<div class="row" style="padding-top: 75px;">
			
			<div class="col-12">
					
				
			
				
						<form class="card shadow p-0" action="{{ route('search') }}">
							
						
							<div class="card-body p-4 pt-0">
						
									
									
										<div class="row g-4">

                                   
											
											<div class="col-md-3 position-relative" style="padding-top:20px;" >
												<div class="form-icon-input form-size-lg form-fs-lg">
													<select class="form-select js-choice mob_selects" name="location_from" id="location_from" data-search-enabled="true" required>

														<option value="">@lang('saidan')</option>
                                                        @if (currentLocale() == 'ru')
                                                        <optgroup label="Главные города">
                                                            <option style="font-weight: bold;" value="tbilisi" {{ \request()->location_from == 'tbilisi' ? 'selected' : '' }}><strong>Тбилиси</strong></option>
                                                            <option style="font-weight: bold;" value="tbilisi_airport" {{ \request()->location_from == 'tbilisi_airport' ? 'selected' : '' }}>Аэропорт Тбилиси</option>
                                                            <option style="font-weight: bold;" value="batumi" {{ \request()->location_from == 'batumi' ? 'selected' : '' }}>Батуми</option>
                                                            <option style="font-weight: bold;" value="batumi_airport" {{ \request()->location_from == 'batumi_airport' ? 'selected' : '' }}>Аэропорт Батуми</option>
                                                            <option style="font-weight: bold;" value="kutaisi" {{ \request()->location_from == 'kutaisi' ? 'selected' : '' }}>Кутаиси</option>
                                                            <option style="font-weight: bold;" value="kutaisi_airport" {{ \request()->location_from == 'kutaisi_airport' ? 'selected' : '' }}>Аэропорт Кутаиси</option>
                                                        </optgroup>

                                                        <optgroup label="Остальные города и места">
                                                            <option value="mahindjauri" {{ \request()->location_from == 'mahindjauri' ? 'selected' : '' }}>Махинджаури</option>
                                                            <option value="sarpi" {{ \request()->location_from == 'sarpi' ? 'selected' : '' }}>Сарпи</option>
                                                            <option value="gonio" {{ \request()->location_from == 'gonio' ? 'selected' : '' }}>Гонио</option>
                                                            <option value="gudauri" {{ \request()->location_from == 'gudauri' ? 'selected' : '' }}>Гудаури</option>
                                                            <option value="mestia" {{ \request()->location_from == 'mestia' ? 'selected' : '' }}>Местия</option>
                                                            <option value="signakhi" {{ \request()->location_from == 'signakhi' ? 'selected' : '' }}>Сигнахи</option>
                                                            <option value="telavi" {{ \request()->location_from == 'telavi' ? 'selected' : '' }}>Телави</option>
                                                            <option value="stepantsminda" {{ \request()->location_from == 'stepantsminda' ? 'selected' : '' }}>Степанцминда</option>
                                                            <option value="zugdidi" {{ \request()->location_from == 'zugdidi' ? 'selected' : '' }}>Зугдиди</option>
                                                            <option value="chiatura" {{ \request()->location_from == 'chiatura' ? 'selected' : '' }}>Чиатура</option>
                                                            <option value="borjomi" {{ \request()->location_from == 'borjomi' ? 'selected' : '' }}>Боржоми</option>
                                                            <option value="kakheti" {{ \request()->location_from == 'kakheti' ? 'selected' : '' }}>Кахети</option>
                                                            <option value="katshi" {{ \request()->location_from == 'katshi' ? 'selected' : '' }}>Кацхи</option>
                                                            <option value="david_gareji" {{ \request()->location_from == 'david_gareji' ? 'selected' : '' }}>Давид Гареджи</option>
                                                            <option value="ananuri" {{ \request()->location_from == 'ananuri' ? 'selected' : '' }}>Ананури</option>
                                                            <option value="ambrolauri" {{ \request()->location_from == 'ambrolauri' ? 'selected' : '' }}>Амбролаури</option>
                                                            <option value="ozurgeti" {{ \request()->location_from == 'ozurgeti' ? 'selected' : '' }}>Озургети</option>
                                                            <option value="lagodekhi" {{ \request()->location_from == 'lagodekhi' ? 'selected' : '' }}>Лагодехи</option>
                                                            <option value="tsalka" {{ \request()->location_from == 'tsalka' ? 'selected' : '' }}>Тсалка</option>
                                                            <option value="poti" {{ \request()->location_from == 'poti' ? 'selected' : '' }}>Поти</option>
                                                            <option value="okatse_canyon" {{ \request()->location_from == 'okatse_canyon' ? 'selected' : '' }}>Окатсе Каньон</option>
                                                            <option value="abudelauri_lakes" {{ \request()->location_from == 'abudelauri_lakes' ? 'selected' : '' }}>Абуделаури Озера</option>
                                                            <option value="martvili_canyon" {{ \request()->location_from == 'martvili_canyon' ? 'selected' : '' }}>Мартвили Каньон</option>
                                                            <option value="promete_cave" {{ \request()->location_from == 'promete_cave' ? 'selected' : '' }}>Промете Пещера</option>
                                                            <option value="sataplia_cave" {{ \request()->location_from == 'sataplia_cave' ? 'selected' : '' }}>Сатаплиа Пещера</option>
                                                            <option value="kintreshi" {{ \request()->location_from == 'kintreshi' ? 'selected' : '' }}>Кинтреши</option>
                                                            <option value="borjomi_kharagauli_national_park" {{ \request()->location_from == 'borjomi_kharagauli_national_park' ? 'selected' : '' }}>Боржоми-Харагаули Национальный Парк</option>
                                                            <option value="vashlovani_national_park" {{ \request()->location_from == 'vashlovani_national_park' ? 'selected' : '' }}>Вашловани Национальный Парк</option>
                                                            <option value="alazani_valley" {{ \request()->location_from == 'alazani_valley' ? 'selected' : '' }}>Алазанская Долина</option>
                                                            <option value="tusheti" {{ \request()->location_from == 'tusheti' ? 'selected' : '' }}>Тушети</option>
                                                        </optgroup>
                                                        @endif

                                                        @if (currentLocale() == 'en')
                                                        <optgroup label="Main Cities">
                                                            <option value="tbilisi" {{ request()->location_from == 'tbilisi' ? 'selected' : '' }}>Tbilisi</option>
                                                            <option value="tbilisi_airport" {{ request()->location_from == 'tbilisi_airport' ? 'selected' : '' }}>Tbilisi Airport</option>
                                                            <option value="batumi" {{ request()->location_from == 'batumi' ? 'selected' : '' }}>Batumi</option>
                                                            <option value="batumi_airport" {{ request()->location_from == 'batumi_airport' ? 'selected' : '' }}>Batumi Airport</option>
                                                            <option value="kutaisi" {{ request()->location_from == 'kutaisi' ? 'selected' : '' }}>Kutaisi</option>
                                                            <option value="kutaisi_airport" {{ request()->location_from == 'kutaisi_airport' ? 'selected' : '' }}>Kutaisi Airport</option>
                                                        </optgroup>
                                                        <optgroup label="Other cities and places">
                                                            <option value="mahindjauri" {{ request()->location_from == 'mahindjauri' ? 'selected' : '' }}>Makhinjauri</option>
                                                            <option value="sarpi" {{ request()->location_from == 'sarpi' ? 'selected' : '' }}>Sarpi</option>
                                                            <option value="gonio" {{ request()->location_from == 'gonio' ? 'selected' : '' }}>Gonio</option>
                                                            <option value="gudauri" {{ request()->location_from == 'gudauri' ? 'selected' : '' }}>Gudauri</option>
                                                            <option value="mestia" {{ request()->location_from == 'mestia' ? 'selected' : '' }}>Mestia</option>
                                                            <option value="signakhi" {{ request()->location_from == 'signakhi' ? 'selected' : '' }}>Signakhi</option>
                                                            <option value="telavi" {{ request()->location_from == 'telavi' ? 'selected' : '' }}>Telavi</option>
                                                            <option value="stepantsminda" {{ request()->location_from == 'stepantsminda' ? 'selected' : '' }}>Stepantsminda</option>
                                                            <option value="zugdidi" {{ request()->location_from == 'zugdidi' ? 'selected' : '' }}>Zugdidi</option>
                                                            <option value="chiatura" {{ request()->location_from == 'chiatura' ? 'selected' : '' }}>Chiatura</option>
                                                            <option value="borjomi" {{ request()->location_from == 'borjomi' ? 'selected' : '' }}>Borjomi</option>
                                                            <option value="kakheti" {{ request()->location_from == 'kakheti' ? 'selected' : '' }}>Kakheti</option>
                                                            <option value="katshi" {{ request()->location_from == 'katshi' ? 'selected' : '' }}>Katshi</option>
                                                            <option value="david_gareji" {{ request()->location_from == 'david_gareji' ? 'selected' : '' }}>David Gareji</option>
                                                            <option value="ananuri" {{ request()->location_from == 'ananuri' ? 'selected' : '' }}>Ananuri</option>
                                                            <option value="ambrolauri" {{ request()->location_from == 'ambrolauri' ? 'selected' : '' }}>Ambrolauri</option>
                                                            <option value="ozurgeti" {{ request()->location_from == 'ozurgeti' ? 'selected' : '' }}>Ozurgeti</option>
                                                            <option value="lagodekhi" {{ request()->location_from == 'lagodekhi' ? 'selected' : '' }}>Lagodekhi</option>
                                                            <option value="tsalka" {{ request()->location_from == 'tsalka' ? 'selected' : '' }}>Tsalka</option>
                                                            <option value="poti" {{ request()->location_from == 'poti' ? 'selected' : '' }}>Poti</option>
                                                            <option value="okatse_canyon" {{ request()->location_from == 'okatse_canyon' ? 'selected' : '' }}>Okatse Canyon</option>
                                                            <option value="abudelauri_lakes" {{ request()->location_from == 'abudelauri_lakes' ? 'selected' : '' }}>Abudelauri Lakes</option>
                                                            <option value="martvili_canyon" {{ request()->location_from == 'martvili_canyon' ? 'selected' : '' }}>Martvili Canyon</option>
                                                            <option value="promete_cave" {{ request()->location_from == 'promete_cave' ? 'selected' : '' }}>Promete Cave</option>
                                                            <option value="sataplia_cave" {{ request()->location_from == 'sataplia_cave' ? 'selected' : '' }}>Sataplia Cave</option>
                                                            <option value="kintreshi" {{ request()->location_from == 'kintreshi' ? 'selected' : '' }}>Kintreshi</option>
                                                            <option value="borjomi_kharagauli_national_park" {{ request()->location_from == 'borjomi_kharagauli_national_park' ? 'selected' : '' }}>Borjomi-Kharagauli National Park</option>
                                                            <option value="vashlovani_national_park" {{ request()->location_from == 'vashlovani_national_park' ? 'selected' : '' }}>Vashlovani National Park</option>
                                                            <option value="alazani_valley" {{ request()->location_from == 'alazani_valley' ? 'selected' : '' }}>Alazani Valley</option>
                                                            <option value="tusheti" {{ request()->location_from == 'tusheti' ? 'selected' : '' }}>Tusheti</option>
                                                        </optgroup>
                                                        @endif

                                                        @if (currentLocale() == 'ka')
                                                        <optgroup label="ძირითადი ქალაქები">
                                                            <option value="tbilisi" {{ request()->location_from == 'tbilisi' ? 'selected' : '' }}>თბილისი</option>
                                                            <option value="tbilisi_airport" {{ request()->location_from == 'tbilisi_airport' ? 'selected' : '' }}>თბილისის აეროპორტი</option>
                                                            <option value="batumi" {{ request()->location_from == 'batumi' ? 'selected' : '' }}>ბათუმი</option>
                                                            <option value="batumi_airport" {{ request()->location_from == 'batumi_airport' ? 'selected' : '' }}>ბათუმის აეროპორტი</option>
                                                            <option value="kutaisi" {{ request()->location_from == 'kutaisi' ? 'selected' : '' }}>ქუთაისი</option>
                                                            <option value="kutaisi_airport" {{ request()->location_from == 'kutaisi_airport' ? 'selected' : '' }}>ქუთაისის აეროპორტი</option>
                                                        </optgroup>
                                                        <optgroup label="სხვა ქალაქები და ადგილები">
                                                            <option value="mahindjauri" {{ request()->location_from == 'mahindjauri' ? 'selected' : '' }}>მახინჯაური</option>
                                                            <option value="sarpi" {{ request()->location_from == 'sarpi' ? 'selected' : '' }}>სარფი</option>
                                                            <option value="gonio" {{ request()->location_from == 'gonio' ? 'selected' : '' }}>გონიო</option>
                                                            <option value="gudauri" {{ request()->location_from == 'gudauri' ? 'selected' : '' }}>გუდაური</option>
                                                            <option value="mestia" {{ request()->location_from == 'mestia' ? 'selected' : '' }}>მესტია</option>
                                                            <option value="signakhi" {{ request()->location_from == 'signakhi' ? 'selected' : '' }}>სიღნაღი</option>
                                                            <option value="telavi" {{ request()->location_from == 'telavi' ? 'selected' : '' }}>თელავი</option>
                                                            <option value="stepantsminda" {{ request()->location_from == 'stepantsminda' ? 'selected' : '' }}>სტეფანწმინდა</option>
                                                            <option value="zugdidi" {{ request()->location_from == 'zugdidi' ? 'selected' : '' }}>ზუგდიდი</option>
                                                            <option value="chiatura" {{ request()->location_from == 'chiatura' ? 'selected' : '' }}>ჭიათურა</option>
                                                            <option value="borjomi" {{ request()->location_from == 'borjomi' ? 'selected' : '' }}>ბორჯომი</option>
                                                            <option value="kakheti" {{ request()->location_from == 'kakheti' ? 'selected' : '' }}>კახეთი</option>
                                                            <option value="katshi" {{ request()->location_from == 'katshi' ? 'selected' : '' }}>კაცხი</option>
                                                            <option value="david_gareji" {{ request()->location_from == 'david_gareji' ? 'selected' : '' }}>დავით გარეჯი</option>
                                                            <option value="ananuri" {{ request()->location_from == 'ananuri' ? 'selected' : '' }}>ანანური</option>
                                                            <option value="ambrolauri" {{ request()->location_from == 'ambrolauri' ? 'selected' : '' }}>ამბროლაური</option>
                                                            <option value="ozurgeti" {{ request()->location_from == 'ozurgeti' ? 'selected' : '' }}>ოზურგეთი</option>
                                                            <option value="lagodekhi" {{ request()->location_from == 'lagodekhi' ? 'selected' : '' }}>ლაგოდეხი</option>
                                                            <option value="tsalka" {{ request()->location_from == 'tsalka' ? 'selected' : '' }}>წალკა</option>
                                                            <option value="poti" {{ request()->location_from == 'poti' ? 'selected' : '' }}>ფოთი</option>
                                                            <option value="okatse_canyon" {{ request()->location_from == 'okatse_canyon' ? 'selected' : '' }}>ოკაცეს კანიონი</option>
                                                            <option value="abudelauri_lakes" {{ request()->location_from == 'abudelauri_lakes' ? 'selected' : '' }}>აბუდელაურის ტბები</option>
                                                            <option value="martvili_canyon" {{ request()->location_from == 'martvili_canyon' ? 'selected' : '' }}>მარტვილის კანიონი</option>
                                                            <option value="promete_cave" {{ request()->location_from == 'promete_cave' ? 'selected' : '' }}>პრომეთეს მღვიმე</option>
                                                            <option value="sataplia_cave" {{ request()->location_from == 'sataplia_cave' ? 'selected' : '' }}>სათაფლია მღვიმე</option>
                                                            <option value="kintreshi" {{ request()->location_from == 'kintreshi' ? 'selected' : '' }}>კინტრეში</option>
                                                            <option value="borjomi_kharagauli_national_park" {{ request()->location_from == 'borjomi_kharagauli_national_park' ? 'selected' : '' }}>ბორჯომ-ხარაგაულის ეროვნული პარკი</option>
                                                            <option value="vashlovani_national_park" {{ request()->location_from == 'vashlovani_national_park' ? 'selected' : '' }}>ვაშლოვანის ეროვნული პარკი</option>
                                                            <option value="alazani_valley" {{ request()->location_from == 'alazani_valley' ? 'selected' : '' }}>ალაზნის ველი</option>
                                                            <option value="tusheti" {{ request()->location_from == 'tusheti' ? 'selected' : '' }}>თუშეთი</option>
                                                        </optgroup>

                                                        @endif
													</select>
													<span class="form-icon"><i class="bi bi-geo-alt fs-5"></i></span>
												</div>

												
											</div>


                                            <div class="col-md-3 position-relative padding-bottom-search">
												<div class="form-icon-input form-size-lg form-fs-lg">
													<select class="form-select js-choice mob_selects" name="location_to" data-search-enabled="true" required>
                                                    <option value="">@lang('sad')</option>
                                                    @if (currentLocale() == 'ru')
                                                        <optgroup label="Главные города">
                                                            <option style="font-weight: bold;" value="tbilisi" {{ \request()->location_to == 'tbilisi' ? 'selected' : '' }}><strong>Тбилиси</strong></option>
                                                            <option style="font-weight: bold;" value="tbilisi_airport" {{ \request()->location_to == 'tbilisi_airport' ? 'selected' : '' }}>Аэропорт Тбилиси</option>
                                                            <option style="font-weight: bold;" value="batumi" {{ \request()->location_to == 'batumi' ? 'selected' : '' }}>Батуми</option>
                                                            <option style="font-weight: bold;" value="batumi_airport" {{ \request()->location_to == 'batumi_airport' ? 'selected' : '' }}>Аэропорт Батуми</option>
                                                            <option style="font-weight: bold;" value="kutaisi" {{ \request()->location_to == 'kutaisi' ? 'selected' : '' }}>Кутаиси</option>
                                                            <option style="font-weight: bold;" value="kutaisi_airport" {{ \request()->location_to == 'kutaisi_airport' ? 'selected' : '' }}>Аэропорт Кутаиси</option>
                                                        </optgroup>

                                                        <optgroup label="Остальные города и места">
                                                            <option value="mahindjauri" {{ \request()->location_to == 'mahindjauri' ? 'selected' : '' }}>Махинджаури</option>
                                                            <option value="sarpi" {{ \request()->location_to == 'sarpi' ? 'selected' : '' }}>Сарпи</option>
                                                            <option value="gonio" {{ \request()->location_to == 'gonio' ? 'selected' : '' }}>Гонио</option>
                                                            <option value="gudauri" {{ \request()->location_to == 'gudauri' ? 'selected' : '' }}>Гудаури</option>
                                                            <option value="mestia" {{ \request()->location_to == 'mestia' ? 'selected' : '' }}>Местия</option>
                                                            <option value="signakhi" {{ \request()->location_to == 'signakhi' ? 'selected' : '' }}>Сигнахи</option>
                                                            <option value="telavi" {{ \request()->location_to == 'telavi' ? 'selected' : '' }}>Телави</option>
                                                            <option value="stepantsminda" {{ \request()->location_to == 'stepantsminda' ? 'selected' : '' }}>Степанцминда</option>
                                                            <option value="zugdidi" {{ \request()->location_to == 'zugdidi' ? 'selected' : '' }}>Зугдиди</option>
                                                            <option value="chiatura" {{ \request()->location_to == 'chiatura' ? 'selected' : '' }}>Чиатура</option>
                                                            <option value="borjomi" {{ \request()->location_to == 'borjomi' ? 'selected' : '' }}>Боржоми</option>
                                                            <option value="kakheti" {{ \request()->location_to == 'kakheti' ? 'selected' : '' }}>Кахети</option>
                                                            <option value="katshi" {{ \request()->location_to == 'katshi' ? 'selected' : '' }}>Кацхи</option>
                                                            <option value="david_gareji" {{ \request()->location_to == 'david_gareji' ? 'selected' : '' }}>Давид Гареджи</option>
                                                            <option value="ananuri" {{ \request()->location_to == 'ananuri' ? 'selected' : '' }}>Ананури</option>
                                                            <option value="ambrolauri" {{ \request()->location_to == 'ambrolauri' ? 'selected' : '' }}>Амбролаури</option>
                                                            <option value="ozurgeti" {{ \request()->location_to == 'ozurgeti' ? 'selected' : '' }}>Озургети</option>
                                                            <option value="lagodekhi" {{ \request()->location_to == 'lagodekhi' ? 'selected' : '' }}>Лагодехи</option>
                                                            <option value="tsalka" {{ \request()->location_to == 'tsalka' ? 'selected' : '' }}>Тсалка</option>
                                                            <option value="poti" {{ \request()->location_to == 'poti' ? 'selected' : '' }}>Поти</option>
                                                            <option value="okatse_canyon" {{ \request()->location_to == 'okatse_canyon' ? 'selected' : '' }}>Окатсе Каньон</option>
                                                            <option value="abudelauri_lakes" {{ \request()->location_to == 'abudelauri_lakes' ? 'selected' : '' }}>Абуделаури Озера</option>
                                                            <option value="martvili_canyon" {{ \request()->location_to == 'martvili_canyon' ? 'selected' : '' }}>Мартвили Каньон</option>
                                                            <option value="promete_cave" {{ \request()->location_to == 'promete_cave' ? 'selected' : '' }}>Промете Пещера</option>
                                                            <option value="sataplia_cave" {{ \request()->location_to == 'sataplia_cave' ? 'selected' : '' }}>Сатаплиа Пещера</option>
                                                            <option value="kintreshi" {{ \request()->location_to == 'kintreshi' ? 'selected' : '' }}>Кинтреши</option>
                                                            <option value="borjomi_kharagauli_national_park" {{ \request()->location_to == 'borjomi_kharagauli_national_park' ? 'selected' : '' }}>Боржоми-Харагаули Национальный Парк</option>
                                                            <option value="vashlovani_national_park" {{ \request()->location_to == 'vashlovani_national_park' ? 'selected' : '' }}>Вашловани Национальный Парк</option>
                                                            <option value="alazani_valley" {{ \request()->location_to == 'alazani_valley' ? 'selected' : '' }}>Алазанская Долина</option>
                                                            <option value="tusheti" {{ \request()->location_to == 'tusheti' ? 'selected' : '' }}>Тушети</option>
                                                        </optgroup>
                                                        @endif

                                                        @if (currentLocale() == 'en')
                                                        <optgroup label="Main Cities">
                                                            <option value="tbilisi" {{ request()->location_to == 'tbilisi' ? 'selected' : '' }}>Tbilisi</option>
                                                            <option value="tbilisi_airport" {{ request()->location_to == 'tbilisi_airport' ? 'selected' : '' }}>Tbilisi Airport</option>
                                                            <option value="batumi" {{ request()->location_to == 'batumi' ? 'selected' : '' }}>Batumi</option>
                                                            <option value="batumi_airport" {{ request()->location_to == 'batumi_airport' ? 'selected' : '' }}>Batumi Airport</option>
                                                            <option value="kutaisi" {{ request()->location_to == 'kutaisi' ? 'selected' : '' }}>Kutaisi</option>
                                                            <option value="kutaisi_airport" {{ request()->location_to == 'kutaisi_airport' ? 'selected' : '' }}>Kutaisi Airport</option>
                                                        </optgroup>
                                                        <optgroup label="Other cities and places">
                                                            <option value="mahindjauri" {{ request()->location_to == 'mahindjauri' ? 'selected' : '' }}>Makhinjauri</option>
                                                            <option value="sarpi" {{ request()->location_to == 'sarpi' ? 'selected' : '' }}>Sarpi</option>
                                                            <option value="gonio" {{ request()->location_to == 'gonio' ? 'selected' : '' }}>Gonio</option>
                                                            <option value="gudauri" {{ request()->location_to == 'gudauri' ? 'selected' : '' }}>Gudauri</option>
                                                            <option value="mestia" {{ request()->location_to == 'mestia' ? 'selected' : '' }}>Mestia</option>
                                                            <option value="signakhi" {{ request()->location_to == 'signakhi' ? 'selected' : '' }}>Signakhi</option>
                                                            <option value="telavi" {{ request()->location_to == 'telavi' ? 'selected' : '' }}>Telavi</option>
                                                            <option value="stepantsminda" {{ request()->location_to == 'stepantsminda' ? 'selected' : '' }}>Stepantsminda</option>
                                                            <option value="zugdidi" {{ request()->location_to == 'zugdidi' ? 'selected' : '' }}>Zugdidi</option>
                                                            <option value="chiatura" {{ request()->location_to == 'chiatura' ? 'selected' : '' }}>Chiatura</option>
                                                            <option value="borjomi" {{ request()->location_to == 'borjomi' ? 'selected' : '' }}>Borjomi</option>
                                                            <option value="kakheti" {{ request()->location_to == 'kakheti' ? 'selected' : '' }}>Kakheti</option>
                                                            <option value="katshi" {{ request()->location_to == 'katshi' ? 'selected' : '' }}>Katshi</option>
                                                            <option value="david_gareji" {{ request()->location_to == 'david_gareji' ? 'selected' : '' }}>David Gareji</option>
                                                            <option value="ananuri" {{ request()->location_to == 'ananuri' ? 'selected' : '' }}>Ananuri</option>
                                                            <option value="ambrolauri" {{ request()->location_to == 'ambrolauri' ? 'selected' : '' }}>Ambrolauri</option>
                                                            <option value="ozurgeti" {{ request()->location_to == 'ozurgeti' ? 'selected' : '' }}>Ozurgeti</option>
                                                            <option value="lagodekhi" {{ request()->location_to == 'lagodekhi' ? 'selected' : '' }}>Lagodekhi</option>
                                                            <option value="tsalka" {{ request()->location_to == 'tsalka' ? 'selected' : '' }}>Tsalka</option>
                                                            <option value="poti" {{ request()->location_to == 'poti' ? 'selected' : '' }}>Poti</option>
                                                            <option value="okatse_canyon" {{ request()->location_to == 'okatse_canyon' ? 'selected' : '' }}>Okatse Canyon</option>
                                                            <option value="abudelauri_lakes" {{ request()->location_to == 'abudelauri_lakes' ? 'selected' : '' }}>Abudelauri Lakes</option>
                                                            <option value="martvili_canyon" {{ request()->location_to == 'martvili_canyon' ? 'selected' : '' }}>Martvili Canyon</option>
                                                            <option value="promete_cave" {{ request()->location_to == 'promete_cave' ? 'selected' : '' }}>Promete Cave</option>
                                                            <option value="sataplia_cave" {{ request()->location_to == 'sataplia_cave' ? 'selected' : '' }}>Sataplia Cave</option>
                                                            <option value="kintreshi" {{ request()->location_to == 'kintreshi' ? 'selected' : '' }}>Kintreshi</option>
                                                            <option value="borjomi_kharagauli_national_park" {{ request()->location_to == 'borjomi_kharagauli_national_park' ? 'selected' : '' }}>Borjomi-Kharagauli National Park</option>
                                                            <option value="vashlovani_national_park" {{ request()->location_to == 'vashlovani_national_park' ? 'selected' : '' }}>Vashlovani National Park</option>
                                                            <option value="alazani_valley" {{ request()->location_to == 'alazani_valley' ? 'selected' : '' }}>Alazani Valley</option>
                                                            <option value="tusheti" {{ request()->location_to == 'tusheti' ? 'selected' : '' }}>Tusheti</option>
                                                        </optgroup>


                                                        @endif

                                                        @if (currentLocale() == 'ka')
                                                        <optgroup label="ძირითადი ქალაქები">
                                                            <option value="tbilisi" {{ request()->location_to == 'tbilisi' ? 'selected' : '' }}>თბილისი</option>
                                                            <option value="tbilisi_airport" {{ request()->location_to == 'tbilisi_airport' ? 'selected' : '' }}>თბილისის აეროპორტი</option>
                                                            <option value="batumi" {{ request()->location_to == 'batumi' ? 'selected' : '' }}>ბათუმი</option>
                                                            <option value="batumi_airport" {{ request()->location_to == 'batumi_airport' ? 'selected' : '' }}>ბათუმის აეროპორტი</option>
                                                            <option value="kutaisi" {{ request()->location_to == 'kutaisi' ? 'selected' : '' }}>ქუთაისი</option>
                                                            <option value="kutaisi_airport" {{ request()->location_to == 'kutaisi_airport' ? 'selected' : '' }}>ქუთაისის აეროპორტი</option>
                                                        </optgroup>
                                                        <optgroup label="სხვა ქალაქები და ადგილები">
                                                            <option value="mahindjauri" {{ request()->location_to == 'mahindjauri' ? 'selected' : '' }}>მახინჯაური</option>
                                                            <option value="sarpi" {{ request()->location_to == 'sarpi' ? 'selected' : '' }}>სარფი</option>
                                                            <option value="gonio" {{ request()->location_to == 'gonio' ? 'selected' : '' }}>გონიო</option>
                                                            <option value="gudauri" {{ request()->location_to == 'gudauri' ? 'selected' : '' }}>გუდაური</option>
                                                            <option value="mestia" {{ request()->location_to == 'mestia' ? 'selected' : '' }}>მესტია</option>
                                                            <option value="signakhi" {{ request()->location_to == 'signakhi' ? 'selected' : '' }}>სიღნაღი</option>
                                                            <option value="telavi" {{ request()->location_to == 'telavi' ? 'selected' : '' }}>თელავი</option>
                                                            <option value="stepantsminda" {{ request()->location_to == 'stepantsminda' ? 'selected' : '' }}>სტეფანწმინდა</option>
                                                            <option value="zugdidi" {{ request()->location_to == 'zugdidi' ? 'selected' : '' }}>ზუგდიდი</option>
                                                            <option value="chiatura" {{ request()->location_to == 'chiatura' ? 'selected' : '' }}>ჭიათურა</option>
                                                            <option value="borjomi" {{ request()->location_to == 'borjomi' ? 'selected' : '' }}>ბორჯომი</option>
                                                            <option value="kakheti" {{ request()->location_to == 'kakheti' ? 'selected' : '' }}>კახეთი</option>
                                                            <option value="katshi" {{ request()->location_to == 'katshi' ? 'selected' : '' }}>კაცხი</option>
                                                            <option value="david_gareji" {{ request()->location_to == 'david_gareji' ? 'selected' : '' }}>დავით გარეჯი</option>
                                                            <option value="ananuri" {{ request()->location_to == 'ananuri' ? 'selected' : '' }}>ანანური</option>
                                                            <option value="ambrolauri" {{ request()->location_to == 'ambrolauri' ? 'selected' : '' }}>ამბროლაური</option>
                                                            <option value="ozurgeti" {{ request()->location_to == 'ozurgeti' ? 'selected' : '' }}>ოზურგეთი</option>
                                                            <option value="lagodekhi" {{ request()->location_to == 'lagodekhi' ? 'selected' : '' }}>ლაგოდეხი</option>
                                                            <option value="tsalka" {{ request()->location_to == 'tsalka' ? 'selected' : '' }}>წალკა</option>
                                                            <option value="poti" {{ request()->location_to == 'poti' ? 'selected' : '' }}>ფოთი</option>
                                                            <option value="okatse_canyon" {{ request()->location_to == 'okatse_canyon' ? 'selected' : '' }}>ოკაცეს კანიონი</option>
                                                            <option value="abudelauri_lakes" {{ request()->location_to == 'abudelauri_lakes' ? 'selected' : '' }}>აბუდელაურის ტბები</option>
                                                            <option value="martvili_canyon" {{ request()->location_to == 'martvili_canyon' ? 'selected' : '' }}>მარტვილის კანიონი</option>
                                                            <option value="promete_cave" {{ request()->location_to == 'promete_cave' ? 'selected' : '' }}>პრომეთეს მღვიმე</option>
                                                            <option value="sataplia_cave" {{ request()->location_to == 'sataplia_cave' ? 'selected' : '' }}>სათაფლია მღვიმე</option>
                                                            <option value="kintreshi" {{ request()->location_to == 'kintreshi' ? 'selected' : '' }}>კინტრეში</option>
                                                            <option value="borjomi_kharagauli_national_park" {{ request()->location_to == 'borjomi_kharagauli_national_park' ? 'selected' : '' }}>ბორჯომ-ხარაგაულის ეროვნული პარკი</option>
                                                            <option value="vashlovani_national_park" {{ request()->location_to == 'vashlovani_national_park' ? 'selected' : '' }}>ვაშლოვანის ეროვნული პარკი</option>
                                                            <option value="alazani_valley" {{ request()->location_to == 'alazani_valley' ? 'selected' : '' }}>ალაზნის ველი</option>
                                                            <option value="tusheti" {{ request()->location_to == 'tusheti' ? 'selected' : '' }}>თუშეთი</option>
                                                        </optgroup>


                                                        @endif
													</select>
													<span class="form-icon"><i class="bi bi-geo-alt fs-5"></i></span>
												</div>

												
											</div>


                                            <div class="col-md-4 position-relative">
												<div class="form-icon-input form-size-lg form-fs-lg">

                                                <svg class="input-svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 8.1H6V9.9H4V8.1ZM18 3.6V16.2C18 17.19 17.1 18 16 18H2C1.46957 18 0.960859 17.8104 0.585786 17.4728C0.210714 17.1352 0 16.6774 0 16.2L0.00999999 3.6C0.00999999 2.61 0.89 1.8 2 1.8H3V0H5V1.8H13V0H15V1.8H16C17.1 1.8 18 2.61 18 3.6ZM2 5.4H16V3.6H2V5.4ZM16 16.2V7.2H2V16.2H16ZM12 9.9H14V8.1H12V9.9ZM8 9.9H10V8.1H8V9.9Z" fill="#898B9E"></path>
                                                </svg>
                                                <input data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="@lang('choose_datess')" class="search-dt-inputs"  type="text" id="date_booking" required name="date_from" placeholder="@lang('choose_dates')" value="{{ \request()->date_from }}" readonly/>
                                                <input type="hidden" id="date_from" value="{{ request()->date_from }}">
                                                </div>

                                            </div>
                                            

                                            <div class="col-md-2 position-relative">
												<div class="form-icon-input form-size-lg form-fs-lg srch-button">

                                                <div class="text-center pt-0">
											      <button type="submit" class="btn btn-lg btn-primary mb-n7" >@lang('searchs_button') <i class="bi bi-arrow-right ps-3"></i></button>
										       </div>
                                               
                                                </div>
                                            </div>

											

											
											
										</div> 


									
									
									

								
							</div>
						</form>
					


				
			</div>
			
		</div>
	</div>

</section>