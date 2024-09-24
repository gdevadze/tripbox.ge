@extends('website.layouts.app')

@section('content')
<style>

a {
    color:#20B385
}


@media only screen and (max-width: 600px) {
	.vh-xxl-100 {
	margin-top: 50px;
}
}
</style>

<section class="vh-xxl-100" style="padding-top:0px;">
	<div class="container h-100 d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode shadow rounded-3 overflow-hidden">
					<div class="row g-0">
					
					
		
						
						<div class="col-lg-12 ">
							<div class="p-4 p-sm-7">
								
								<h1 class="mb-2 h3 text-center" style="font-size: 20px;">@lang('login_with_mail')</h1>
								<p class="mb-0">@lang('you_dont_have_a_profile')?<a href="/register"> @lang('registereds')</a></p>
		
                                <form class="mt-4 text-start" method="POST" action="{{ route('login') }}">
                        @csrf

									<div class="mb-3">
										<label class="form-label">@lang('enter_mail')</label>
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
									
									<div class="mb-3 d-sm-flex justify-content-between">
										<div>
											<input type="checkbox" class="form-check-input" id="rememberCheck">
											<label class="form-check-label" for="rememberCheck">@lang('saveds')</label>
										</div>
										<a href="{{ route('password.request') }}">@lang('resset_password')</a>
									</div>
									
									<div><button type="submit" style="border:0;background-color: #20B385;" class="btn btn-primary w-100 mb-0">@lang('logineds_in')</button></div>
		
								
								</form>
						
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





@endsection
