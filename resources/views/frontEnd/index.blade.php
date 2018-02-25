@extends('frontEnd.layouts.master')
@section('title','Home')
@section('mainContent')
<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="#" class="g"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
<!-- banner -->
		<div class="banner">
<!-- Slider-starts-Here -->
				<script src="{{asset('public/frontEnd/js/responsiveslides.min.js')}}"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-inf">
								<h3>soluta nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>euismod nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>tortor nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>
<!-- //banner -->
<!-- banner-bottom -->
			<div class="banner-bottom">
			
			</div>
<!-- //banner-bottom -->
<!-- blog -->
			<div class="blog">
				<div class="blog-left">
					<div class="blog-left-grid">
						<div class="blog-left-grid-left">
							<h3><a href="single.html">voluptates repudiandae sint non recusandae</a></h3>
							<p>by <span>Charlie</span> | June 29,2015 | <span>Sint</span></p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">20 Comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="single.html"><img src="{{asset('public/frontEnd/images/4.jpg')}}" alt=" " class="img-responsive" /></a>
						<p class="para"> Itaque earum rerum hic tenetur a sapiente delectus, 
							ut aut reiciendis voluptatibus maiores alias consequatur aut 
							perferendis doloribus asperiores repellat.Et harum quidem rerum 
							facilis est et expedita distinctio. Nam libero tempore, cum 
							soluta nobis est eligendi optio cumque nihil impedit quo minus 
							id quod maxime placeat facere possimus, omnis voluptas assumenda 
							est, omnis dolor repellendus. Temporibus autem quibusdam et 
							aut officiis debitis.</p>
						<div class="rd-mre">
							<a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>
					</div>
					<div class="blog-left-grid">
						<div class="blog-left-grid-left">
							<h3><a href="single.html">voluptates repudiandae sint non recusandae</a></h3>
							<p>by <span>Charlie</span> | June 29,2015 | <span>Sint</span></p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">40 Comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="single.html"><img src="{{asset('public/frontEnd/images/5.jpg')}}" alt=" " class="img-responsive" /></a>
						<p class="para"> Itaque earum rerum hic tenetur a sapiente delectus, 
							ut aut reiciendis voluptatibus maiores alias consequatur aut 
							perferendis doloribus asperiores repellat.Et harum quidem rerum 
							facilis est et expedita distinctio. Nam libero tempore, cum 
							soluta nobis est eligendi optio cumque nihil impedit quo minus 
							id quod maxime placeat facere possimus, omnis voluptas assumenda 
							est, omnis dolor repellendus. Temporibus autem quibusdam et 
							aut officiis debitis.</p>
						<div class="rd-mre">
							<a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>
					</div>
				</div>
				<div class="blog-right">
					<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
							  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
							  <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>Comments</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/7-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/7.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015 <span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/8-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/8.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/9-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/9.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/10-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/10.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/8-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/8.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/9-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/9.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/10-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/10.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/7-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/7.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
									  <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/9-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/9.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/10-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/10.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/7-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/7.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
									<div class="facts">
									   <div class="tab_list">
										<a href="{{asset('public/frontEnd/images/8-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
											<img src="{{asset('public/frontEnd/images/8.jpg')}}" alt=" " class="img-responsive" />
										</a>
									  </div>
									  <div class="tab_list1">
										<a href="#">excepturi sint occaecati</a>
										<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
									  </div>
									  <div class="clearfix"> </div>
									</div>
								</div>
							</div>
						 <script src="{{asset('public/frontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							   </script>
						<link rel="stylesheet" href="{{asset('public/frontEnd/css/swipebox.css')}}">
						<script src="{{asset('public/frontEnd/s/jquery.swipebox.min.js')}}j"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
					</div>
					</div>
					<div class="newsletter">
						<h3>Subscribe To Our Newsletter</h3>
						<form>
							<input type="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
							<input type="submit" value="Send">
						</form>
					</div>
					<div class="four-fig">
						<div class="four-fig1">
							<a href="{{asset('public/frontEnd/images/11-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="{{asset('public/frontEnd/images/11.jpg')}}" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="{{asset('public/frontEnd/images/14-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="{{asset('public/frontEnd/images/14.jpg')}}" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="{{asset('public/frontEnd/images/10-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="{{asset('public/frontEnd/images/21.jpg')}}" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="{{asset('public/frontEnd/images/8-.jpg')}}" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="{{asset('public/frontEnd/images/22.jpg')}}" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pgs">
						<h3>Catagories</h3>
                                                <?php 
                                                $all_catagory=DB::table('catagory')
                                                                ->where('publication_status',1)
                                                                   ->get();
                                                ?>
						<ul>
                                                    <?php
                                                     foreach ($all_catagory as $catagory){
                                                    ?>
							<li><a href="#"><?php echo $catagory->catagory_name; ?></a></li>
                                                     <?php } ?>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
<!-- //blog -->
	</div>
@endsection()