@extends('website.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/css/intlTelInput.css">

<style>

a {
    color:#20B385
}
.iti  {
	width: 100%;
}

</style>


<section class="" style="margin-top:50px;">
	<div class="container  d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode shadow rounded-3 overflow-hidden">
					<div class="row g-0">
					
					
		
						
						<div class="col-lg-12 ">
							<div class="p-4 p-sm-7">
								
								<h1 class="mb-2 h3 text-center" style="font-size: 20px;">@lang('register')</h1>
								<p class="mb-0"> @lang('do_you_have_a_profile')<a href="/login"> @lang('login')</a></p>
		
                                <form class="mt-4 text-start" method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="mb-3" style="display: none;">
                        <label class="form-label">აირჩიეთ ტიპი</label>
                        <select name="user_type" class="form-control">
                        <option value=""  style="font-size: 13px;">არჩევა</option>
                                    <option value="1" selected>მომხმარებელი</option>
                                    <option value="2">მფლობელი</option>
                                </select>
                                @error('user_type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

									</div>


									<div class="mb-3">
										<label class="form-label">@lang('name')</label>
										<input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

									</div>


                                    <div class="mb-3">
										<label class="form-label">@lang('surname')</label>
										<input type="text" name="surname" value="{{ old('surname') }}" class="form-control @error('surname') is-invalid @enderror">
                                        @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

									</div>

								


									
									
									<div class="mb-3">
										<label class="form-label">@lang('mobiles')</label>
										<br />
										<input type="text" type="tel"  id="phone" name="tel" value="{{ old('tel') }}" class="form-control @error('tel') is-invalid @enderror">
                                        <input type="hidden" name="tel_index" id="phone_format" class="form-control @error('tel') is-invalid @enderror">
                                        @error('tel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>



                                    <div class="mb-3">
										<label class="form-label">@lang('email_adress')</label>
										<input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>




								
									<div class="mb-3 position-relative">
										<label class="form-label">@lang('password')</label>
										<input  id="password" type="password" class="form-control fakepassword @error('password') is-invalid @enderror" name="password">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>

                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


									</div>


                                    <div class="mb-3 position-relative">
										<label class="form-label">@lang('repeat_password')</label>
										<input  id="password" type="password" class="form-control fakepassword @error('password') is-invalid @enderror" name="password_confirmation">
										<span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
											<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
										</span>

                                    


									</div>


									
									<div class="mb-3 d-sm-flex justify-content-between">
										<div>
											<input type="checkbox" class="form-check-input" id="rememberCheck">
											<label class="form-check-label" for="rememberCheck">@lang('saveds')</label>
										</div>
										<a href="{{ route('password.request') }}">@lang('resset_password')</a>
									</div>
									
									<div><button type="submit" style="border:0;background-color: #20B385;" class="btn btn-primary w-100 mb-0">@lang('register')</button></div>
		
								
								</form>
						
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/js/intlTelInput.min.js"></script>
<!-- <script>
  const input = document.querySelector("#phone");
  window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.11/build/js/utils.js",
  });
</script> -->

<script>
      const input = document.querySelector("#phone");
    const iti = window.intlTelInput(input, {
      geoIpLookup: function(callback) {
        fetch("https://ipapi.co/json")
          .then(function(res) { return res.json(); })
          .then(function(data) { callback(data.country_code); })
          .catch(function() { callback(); });
      },
      initialCountry: "ge",
      showFlags: true,
      separateDialCode: true,
      utilsScript: "/build/js/utils.js",
    });
    window.iti = iti; // useful for testing

    // Function to get the separated dial code and phone number
    function getSeparatedNumber() {
      const countryData = iti.getSelectedCountryData();
      const dialCode = countryData.dialCode;
      const fullNumber = iti.getNumber();
      const phoneNumber = fullNumber.replace(`+${dialCode}`, '').trim();

      console.log('Dial Code:', dialCode);
      console.log('Phone Number:', phoneNumber);
      $('#phone_format').val(dialCode)
      return {
        dialCode,
        phoneNumber
      };
    }

    // Example usage
    document.querySelector("#phone").addEventListener('blur', getSeparatedNumber);
    </script>
@endsection

