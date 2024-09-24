@extends('website.layouts.app')

@section('content')

<style>


</style>
    <main>

    <section class="pt-4 pt-md-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-10">
			
				<h1>@lang('contact_page')</h1>
				<p class="lead mb-0">@lang('we_are_ready')</p>
			</div>
		</div>

		
		<div class="row g-4">

			<div class="col-md-6 col-xl-4">
				<div class="card card-body shadow text-center align-items-center h-100">
					
					<div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i class="bi bi-headset fs-5"></i></div>
				
					<h5>@lang('call_to_us')</h5>
				
					
					<div class="d-grid gap-3 d-sm-block">
                    <a href="https://wa.me/+995591300998" target="_blanl" class="btn btn-sm btn-primary-soft"><i class="bi bi-phone me-2"></i>+995 591 30 09 98</a>
						
					</div>
				</div>
			</div>
			
			<div class="col-md-6 col-xl-4">
				<div class="card card-body shadow text-center align-items-center h-100">
			
					<div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i class="bi bi-inboxes-fill fs-5"></i></div>
			
					<h5>Email</h5>
					
				
					<a href="#" class="btn btn-link text-decoration-underline p-0 mb-0"><i class="bi bi-envelope me-1"></i>info@tripbox.ge</a>
				</div>
			</div>
			
            
			<div class="col-xl-4 position-relative">
			
				<figure class="position-absolute top-0 end-0 z-index-1 mt-n4 ms-n7">
					<svg class="fill-warning" width="77px" height="77px">
						<path d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z"></path>
					</svg>
				</figure>

				<div class="card card-body shadow text-center align-items-center h-100">
					
					<div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-2"><i class="bi bi-globe2 fs-5"></i></div>
					
					<h5>Social media</h5>
				
					<ul class="list-inline mb-0">
						<li class="list-inline-item"> <a class="btn btn-sm bg-facebook px-2 mb-0" href="https://www.facebook.com/profile.php?id=61555128390449"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-sm bg-instagram px-2 mb-0" href="https://www.instagram.com/tripbox.ge/?igsh=cmhleXdvMjRiYjRl"><i class="fab fa-fw fa-instagram"></i></a> </li>
			
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</section>
<section class="pt-0 pt-lg-5">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
		
			<div class="col-lg-6 text-center">
				<img src="{{asset('/assets/images/element/contact.svg')}}" alt="">
			</div>
			

			<div class="col-lg-6">
				<div class="card bg-light p-4">
				
					<figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
						<svg class="fill-orange" width="104.2px" height="95.2px">
							<circle cx="2.6" cy="92.6" r="2.6"/>
							<circle cx="2.6" cy="77.6" r="2.6"/>
							<circle cx="2.6" cy="62.6" r="2.6"/>
							<circle cx="2.6" cy="47.6" r="2.6"/>
							<circle cx="2.6" cy="32.6" r="2.6"/>
							<circle cx="2.6" cy="17.6" r="2.6"/>
							<circle cx="2.6" cy="2.6" r="2.6"/>
							<circle cx="22.4" cy="92.6" r="2.6"/>
							<circle cx="22.4" cy="77.6" r="2.6"/>
							<circle cx="22.4" cy="62.6" r="2.6"/>
							<circle cx="22.4" cy="47.6" r="2.6"/>
							<circle cx="22.4" cy="32.6" r="2.6"/>
							<circle cx="22.4" cy="17.6" r="2.6"/>
							<circle cx="22.4" cy="2.6" r="2.6"/>
							<circle cx="42.2" cy="92.6" r="2.6"/>
							<circle cx="42.2" cy="77.6" r="2.6"/>
							<circle cx="42.2" cy="62.6" r="2.6"/>
							<circle cx="42.2" cy="47.6" r="2.6"/>
							<circle cx="42.2" cy="32.6" r="2.6"/>
							<circle cx="42.2" cy="17.6" r="2.6"/>
							<circle cx="42.2" cy="2.6" r="2.6"/>
							<circle cx="62" cy="92.6" r="2.6"/>
							<circle cx="62" cy="77.6" r="2.6"/>
							<circle cx="62" cy="62.6" r="2.6"/>
							<circle cx="62" cy="47.6" r="2.6"/>
							<circle cx="62" cy="32.6" r="2.6"/>
							<circle cx="62" cy="17.6" r="2.6"/>
							<circle cx="62" cy="2.6" r="2.6"/>
							<circle cx="81.8" cy="92.6" r="2.6"/>
							<circle cx="81.8" cy="77.6" r="2.6"/>
							<circle cx="81.8" cy="62.6" r="2.6"/>
							<circle cx="81.8" cy="47.6" r="2.6"/>
							<circle cx="81.8" cy="32.6" r="2.6"/>
							<circle cx="81.8" cy="17.6" r="2.6"/>
							<circle cx="81.8" cy="2.6" r="2.6"/>
							<circle cx="101.7" cy="92.6" r="2.6"/>
							<circle cx="101.7" cy="77.6" r="2.6"/>
							<circle cx="101.7" cy="62.6" r="2.6"/>
							<circle cx="101.7" cy="47.6" r="2.6"/>
							<circle cx="101.7" cy="32.6" r="2.6"/>
							<circle cx="101.7" cy="17.6" r="2.6"/>
							<circle cx="101.7" cy="2.6" r="2.6"/>
						</svg>
					</figure>

					
					<div class="card-header bg-light p-0 pb-3">
						<h3 class="mb-0">@lang('write_us')</h3>
					</div>

			
					<div class="card-body p-0">
						<form class="row g-4">
						
							<div class="col-md-6">
								<label class="form-label">@lang('name') *</label>
								<input type="text" class="form-control">
							</div>
					
							<div class="col-md-6">
								<label class="form-label">Email  *</label>
								<input type="email" class="form-control">
							</div>
							
							<div class="col-12">
								<label class="form-label">@lang('mobiles') *</label>
								<input type="text" class="form-control">
							</div>
						
							<div class="col-12">
								<label class="form-label">@lang('message') *</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							
							<div class="col-12 form-check ms-2">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									@lang('rules_conditions').
								</label>
							</div>
					
							<div class="col-12">
								<button class="btn btn-dark mb-0" type="button">@lang('sends')</button>
							</div>	
						</form>
					</div>
			
				</div>
			</div>
			
		</div>
	</div>
</section>


    </main>

@endsection
@push('js')
    

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6676af229d7f358570d249e8/1i0vpo7m7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
	var Tawk_API = Tawk_API || {};

	Tawk_API.customStyle = {
		visibility : {
			desktop : {
				position : 'br',
				xOffset : '60px',
				yOffset : 20
			},
			mobile : {
				position : 'br',
				xOffset : 20,
				yOffset : 90
			},
			bubble : {
				rotate : '0deg',
			 	xOffset : -20,
			 	yOffset : 0
			}
		}
	};
</script>
@endpush
