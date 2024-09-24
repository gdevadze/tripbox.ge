@foreach($locations as $location)
					
					<div class="card-body  p-0 pt-3">
						<div class="vstack gap-5 ">
							
							<div class="card shadow rounded-2">
								<div class="row g-3 g-md-4">
									
									<div class="col-md-4">
										
										<div class="position-relative">
											<img src="{{asset('/assets/images/places-picture.jpg')}}" class="card-img" alt="">
									
											<div class="card-img-overlay">
												<a href="{{asset('/assets/images/places-picture.jpg')}}" class="badge bg-dark stretched-link" data-glightbox="" data-gallery="gallery">
													5 @lang('photo') <i class="bi bi-arrow-right"></i>
												</a>
											</div>
										
											<a data-glightbox="" data-gallery="gallery" href="{{asset('/assets/images/places-picture.jpg')}}" class="stretched-link z-index-9"></a>
											<a data-glightbox="" data-gallery="gallery" href="{{asset('/assets/images/places-picture.jpg')}}"></a>
											<a data-glightbox="" data-gallery="gallery" href="{{asset('/assets/images/places-picture.jpg')}}"></a>
										</div>	
									</div>

							
									<div class="col-md-8">
										<div class="card-body d-flex flex-column p-0 h-100"  style="    padding: 20px !important;">
											
											<h5 class="card-title">{{ $location['name'] }} </h5>
											
										
											<ul class="nav small nav-divider mb-0">
												<li class="nav-item mb-0">
													<i class="fa-regular fa-square me-1"></i>315 sq.ft
												</li>
												<li class="nav-item mb-0">
													<i class="fa-solid fa-table-cells-large me-1"></i>City view
												</li>
												<li class="nav-item mb-0">
													<i class="fa-solid fa-bed me-1"></i>King Bed
												</li>
											</ul>

											
											<div class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
												<div class="d-flex text-success">
													<h6 class="h5 mb-0 text-success">$385</h6>
													<span class="fw-light">/per night</span>
												</div>
												<a href="javascript:0;" class="btn btn-sm btn-dark mb-0 add-to-cart"  data-id="{{ $location['location_id'] }}"
                                         data-model-type="location">დამატება</a>
											</div>
										</div>
									</div>
								
								</div>
							</div>
						

						
						</div>
					</div>

                    @endforeach