@extends('frontView.master')
@section('title_area')
	Online ecommerce shopping category
@endsection

@section('css_js')
	<!-- favicon.ico css -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontEnd') }}/{{ asset('frontEnd') }}/images/1531649874.ico">
	
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/bootstrap.min.css" media="all" />
	<!-- icofont css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/icofont.css" media="all" />
	<!-- carousel css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/owl.theme.default.min.css" media="all" />
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/animate.min.css" media="all" />
	<!-- counterup css -->
	<link href="{{ asset('frontEnd') }}/css/jquery.classycountdown.css" rel="stylesheet" type="text/css">
	
	<!-- query.wm-zoom-1 css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/jquery.wm-zoom-1.0.min.css" media="all" />
	<!-- flexslider css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/flexslider.css" media="all" />
	<!-- fonts/stylesheet css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/fonts/stylesheet.css" media="all" />
	
	<!-- slicknav css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/slicknav.min.css" media="all" />
	
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/main.css" media="all" />
	
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/responsive.css" media="all" />
@endsection


@section('feature')
	<div class="homepage_slider_area"><!-- start of homepage_slider_area -->
		<div class="homepage_slides owl-carousel">
			<div class="single_slide_item slide_bg_1" style="background-image: url({{ asset('frontEnd') }}/images/softbuy.jpg);"><!-- start of single_slide_item -->
				<div class="single_item_table">
					<div class="slide_item_tablecell">
						<div class="container">
							<div class="row tex">
								<div class="slider_text_bg">
									<h2>big<span>save</span></h2>
								</div>
								<h4>Get flat 10% Cashback</h4><br/>
								<a href="#" class="soft_buy_btn slide_btn">Shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End of single_slide_item -->
			
			<div class="single_slide_item slide_bg_1" style="background-image: url({{ asset('frontEnd') }}/images/slider2.jpg);"><!-- start of single_slide_item -->
				<div class="single_item_table">
					<div class="slide_item_tablecell">
						<div class="container">
							<div class="row tex">
								<div class="slider_text_bg">
									<h2>big<span>save</span></h2>
								</div>
								<h4>Get flat 10% Cashback</h4><br/>
								<a href="#" class="soft_buy_btn slide_btn">Shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End of single_slide_item -->
			
			<div class="single_slide_item slide_bg_1" style="background-image: url({{ asset('frontEnd') }}/images/slider3.jpg);"><!-- start of single_slide_item -->
				<div class="single_item_table">
					<div class="slide_item_tablecell">
						<div class="container">
							<div class="row tex">
								<div class="slider_text_bg">
									<h2>big<span>save</span></h2>
								</div>
								<h4>Get flat 10% Cashback</h4><br/>
								<a href="#" class="soft_buy_btn slide_btn">Shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End of single_slide_item -->
		</div>
	</div><!-- End of homepage_slider_area -->

@endsection

@section('maincontent')
	<div class="product_area"><!-- start of product_area -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="product_list_left"><!-- start of product_list_left -->
						<div class="product_img">
							<img src="{{ asset('frontEnd') }}/images/product3.jpg" alt="product_img" class="img-responsive"/>
								<div class="product_top_nam"><!-- start of product_top_nam -->
									<h2><span>s</span>ale</h2>
								</div><!-- End of product_top_nam -->
								
							<div class="product_details"><!-- start of product_details -->
								<div class="details">
									<h4>Upto 55%</h4>
									<a href="#" class="product_deatails_btn_left details_btn_left">Add to cart</a>
								</div>
							</div><!-- End of product_details -->
						</div>
					</div><!-- End of product_list_left -->
				</div>
				
				<div class="col-md-6">
					<div class="product_list__right"><!-- start of product_list__right -->
						<div class="product_img"><!-- start of product_img -->
							<img src="{{ asset('frontEnd') }}/images/product1.jpg" alt="product_img" class="img-responsive"/>
								<div class="product_top_nam_right"><!-- start of product_top_nam_right -->
									<h2><span>s</span>ale</h2>
								</div><!-- End of product_top_nam_right -->
								
							<div class="product_details"><!-- start of product_details -->
								<div class="details">
									<h4>Upto 55%</h4>
									<a href="#" class="product_deatails_btn_right details_btn_right">Add to cart</a>
								</div>
							</div><!-- End of product_details -->
						</div><!-- End of product_img -->
					</div><!-- End of product_list__right -->
					
					<div class="product_list__right"><!-- start of product_list__right -->
						<div class="product_img"><!-- start of product_img -->
							<img src="{{ asset('frontEnd') }}/images/product2.jpg" alt="product_img" class="img-responsive"/>
								<div class="product_top_nam_right"><!-- start of product_top_nam_right -->
									<h2><span>s</span>ale</h2>
								</div><!-- End of product_top_nam_right -->
								
							<div class="product_details"><!-- start of product_details -->
								<div class="details">
									<h4>Upto 55%</h4>
									<a href="#" class="product_deatails_btn_right details_btn_right">Add to cart</a>
								</div>
							</div><!-- End of product_details -->
						</div><!-- End of product_img -->
					</div><!-- End of product_list__right -->
				</div>
				
			</div>
		</div>
	</div><!-- End of product_area -->
	
	
	
	<div class="feature_products_area"><!-- start of feature_products_area -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="feature_title"><!-- start of feature_title -->
						<h2>Feature Products</h2>
						<div class="big_hor"></div>
						<div class="small_hor"></div>
					</div><!-- End of feature_title -->
				</div><!-- End of col-md-12 -->
			</div><!-- End of row -->
	
			<div class="row">
				<div class="col-md-12">
					<div class="freture_tab_area"><!-- start of freture_tab_area -->
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						  <li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#Electronics" role="tab"  aria-selected="true">
								<i class="icofont icofont-lamp"></i>
								<h4>Electronics</h4>
							</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link"  data-toggle="pill" href="#fashion" role="tab"  aria-selected="true">
								<i class="icofont icofont-karate"></i>
								<h4>fashion</h4>
							</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link"  data-toggle="pill" href="#gifts" role="tab"  aria-selected="true">
								<i class="icofont icofont-bag"></i>
								<h4>gifts</h4>
							</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link"  data-toggle="pill" href="#home-decor" role="tab"  aria-selected="true">
								<i class="icofont icofont-home"></i>
								<h4>home decor</h4>
							</a>
						  </li>
						</ul>
						<div class="clearfix"> </div>
						
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="Electronics" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="tabcontent_grids">
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>15% Off</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product1.jpg" alt="a" class="img-responsive"/>
											</a>
											
												<div class="feature_hover">
													<a href="#">
														<h2>View product</h2>
													</a>
												</div>
											
										</div>
											<div class="view_product_caption">
												<h4><a href="">Nikon lens camera</a></h4>
												<p><del>$45.99</del>$38.99</p>
												<a href="#">
													<h3>Add to cart</h3>
												</a>
											</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product2.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										
										</div>
										<div class="view_product_caption">
											<h4><a href="">windows phone</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product3.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">Nikon lens camera</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>15% Off</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product4.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">digital caera</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product5.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">dell mouse</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product6.jpg" alt="a" class="img-responsive"/>
												</a>
											
												<div class="feature_hover">
													<a href="#">
														<h2>View product</h2>
													</a>
												</div>
											</div>
											<div class="view_product_caption">
												<h4><a href="">Karma Drone</a></h4>
												<p><del>$45.99</del>$38.99</p>
												<a href="#">
													<h3>Add to cart</h3>
												</a>
											</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product3.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">Microsoft Desktop Pc</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product1.jpg" alt="a" class="img-responsive"/>
												</a>
											
												<div class="feature_hover">
													<a href="#">
														<h2>View product</h2>
													</a>
												</div>
											</div>
											<div class="view_product_caption">
												<h4><a href="">Karma Drone</a></h4>
												<p><del>$45.99</del>$38.99</p>
												<a href="#">
													<h3>Add to cart</h3>
												</a>
											</div>
									</div>
								</div>
				
							</div>
						</div><!-- End of Electronics Tab -->
@endsection

@section('fasion')
			 
						<div class="tab-pane fade" id="fashion" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="tabcontent_grids">
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product9.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">black short tops</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product10.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">White party dress</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product11.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">Red pills pips</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product12.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">black pills</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product13.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">Night party</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product14.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">red party</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product15.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">wedding dress</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
												<div class="gerlly_item gerlly">
													<div class="product_new_tag">
														<h5>10% Off</h5>
													</div>
													<a href="#">
														<img src="{{ asset('frontEnd') }}/images/f_product16.jpg" alt="a" class="img-responsive"/>
													</a>
													
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
												</div>
												<div class="view_product_caption">
													<h4><a href="">hand ring</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
								</div>
						</div><!-- End of fashion Tab -->
@endsection

@section('momo')
	   <div class="tab-pane fade" id="gifts" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="tabcontent_grids">
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product17.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">bag-for-gifts</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product18.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">art-artistic</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product19.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">annie-spratt</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product20.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">freestocks-org</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product21.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">hand ring</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product22.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">birthday-bow-box</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product23.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">lilac</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product24.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">hope-house</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
								</div>
						  </div><!-- End of gifts Tab -->
						  
						<div class="tab-pane fade" id="home-decor" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="tabcontent_grids">
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product25.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">annie-sprattsh</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product26.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">apartment-bookcase</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product27.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">art-cabinet</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product28.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">bookcase-chairs</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product29.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">jessica-castro</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product30.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">living-room</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product31.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">nursery</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product32.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">nathan-dumlao</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
							
								</div>
						  </div><!-- End of home-decor Tab -->
						  
						</div>
					</div><!-- start of freture_tab_area -->
				</div>
			</div>
			
		</div>
	</div><!-- End of feature_products_area -->
	
	<div class="countdown_area"><!-- start of countdown_area -->
		<div class="container">
			<div class="row">
				<div class="countdown_title"><!-- start of countdown_title -->
					<h2>Mega Offer of this week</h2>
					<p>Coming soon Don’t Missout</p>
				</div><!-- End of countdown_title -->
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="countdown"><!-- start of countdown -->
								<div id="countdown_sec" class="ClassyCountdownDemo"></div>
					</div><!-- End of countdown -->
				</div>
			</div>
			
				
		</div><!-- End of container -->
		<div class="countdown_overlay"></div>
	</div><!-- End of countdown_area -->
	
	
	<div class="product_slider_area"><!-- start of product_slider_area -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="feature_title"><!-- start of feature_title -->
						<h2>new arrivals</h2>
						<div class="big_hor"></div>
						<div class="small_hor"></div>
					</div><!-- End of feature_title -->
				</div><!-- End of col-md-12 -->
			</div><!-- End of row -->
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="product_slider text-center owl-carousel"><!-- start of product_slider -->
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product30.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product31.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product33.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product34.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product35.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product31.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product32.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product35.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
					</div><!-- End of product_slider -->
					
					<div class="sliderControls">
							<div class="owl-nav">
								<div class="thin-left"><i class="icofont icofont-thin-left"></i></div>
								<div class="thin-right"><i class="icofont icofont-thin-right"></i></div>
							</div>
						</div>
					
				</div>
			</div>
		</div>
	</div><!-- End of product_slider_area -->

@endsection

@section('js_link')
	<!-- =========================
                  SCRIPTS 
    ============================== --> 
	<!-- jquery.js -->
	<script  src="{{ asset('frontEnd') }}/js/jquery-2.1.4.min.js"></script>
	
	<!-- Boostrap.js --> 
	<script  src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
	<!-- carousel.js --> 
	<script  src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
	<!-- wow.js --> 
	<script  src="{{ asset('frontEnd') }}/js/wow.min.js"></script>
	
	<!-- counterup.js --> 
	<script src="{{ asset('frontEnd') }}/js/jquery.knob.js"></script>
	<script src="{{ asset('frontEnd') }}/js/jquery.throttle.js"></script>
	<script src="{{ asset('frontEnd') }}/js/jquery.classycountdown.js"></script>
	<!-- flexslider.js --> 
	<script src="{{ asset('frontEnd') }}/js/jquery.flexslider.js"></script>
	<!-- imagezoom.js --> 
	<script src="{{ asset('frontEnd') }}/js/imagezoom.js"></script>
	<!-- slicknav.js --> 
	<script src="{{ asset('frontEnd') }}/js/jquery.slicknav.min.js"></script>
	
	<!-- start-smoth-scrolling -->

	<!-- main.js --> 
	<script src="{{ asset('frontEnd') }}/js/main.js"></script>
@endsection