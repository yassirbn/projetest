@extends('user/welcome')
    @section('main')


        <div id="content-block">
		<div class="container be-detail-container">
			<h2 class="content-title">Our Blog</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<div class="blog-wrapper blog-list">

						<div class="blog-post be-large-post">
							<div class="info-block clearfix">
								<div class="be-large-post-align">
									<span><i class="fa fa-thumbs-o-up"></i> 253</span>
									<span><i class="fa fa-eye"></i> 753</span>
									<span><i class="fa fa-comment-o"></i> 50</span>
									<span class="be-text-tags">
										<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>, 
										<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,  
										<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
									</span>										
								</div>
							</div>
							<div class="be-large-post-align">
								<h3 class="be-post-title">
									Polygonal style
								</h3>

								<span class="be-text-tags clearfix">
									<div class="post-date">
										<i class="fa fa-clock-o"></i> April 23, 2015
									</div>
									<div class="author-post">
										<img src="img/a1.png" alt="" class="ava-author">
										<span>by <a href="blog-detail-2.html">Hoang Nguyen</a></span>
									</div>
								</span>
								<div class="clear"></div>
							</div>
							<div class="post-preview be-large-post-slider">
								<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
					                <div class="swiper-wrapper">
				                    	<div class="swiper-slide active" data-val="0">
				                    		 <img class="img-responsive img-full" src="img/blog_5.jpg" alt="">
				                    	</div>
				                    	<div class="swiper-slide" data-val="1">
				                    		 <img class="img-responsive img-full" src="img/blog_4.jpg" alt="">
				                    	</div>
				                    	<div class="swiper-slide" data-val="2">
				                    		 <img class="img-responsive img-full" src="img/blog_5.jpg" alt="">
				                    	</div>
				                    </div>
					                <div class="pagination hidden"></div>
					                <div class="swiper-arrow-left type-3"></div>
					                <div class="swiper-arrow-right type-3"></div>
					            </div>
							</div>	
							<div class="blog-content be-large-post-align">
								<div class="post-text ">
									<p>Donec consectetur diam tellus, et aliquet nulla scelerisque quis. Duis rhoncus nisi urna, eget commodo risus euismod eu. In volutpat ac nibh sit amet sodales. Cras nisi quam, facilisis in enim pulvinar, finibus ullamcorper lectus. Duis nibh quam, lobortis eget accumsan quis, malesuada id orci.  Pellentesque habitant morbi tristique senectus</p>
									<img class="img-fullblog" src="img/blog_img_1.jpg" alt="">
									<p>Phasellus feugiat pulvinar sagittis. Vivamus sit amet purus quis magna laoreet suscipit in sit amet nisl. Etiam tempus tortor in interdum consectetur. Etiam gravida tellus leo. Mauris pulvinar ut leo in varius. Mauris iaculis bibendum tempus. Proin eget dolor lobortis, facilisis nisi sit amet, varius quam. Nam eu facilisis lorem. In hac habitasse platea dictumst. Aenean enim massa, viverra in diam ac, gravida egestas risus. Morbi quis ante erat. Nulla sodales, diam at accumsan mattis, dolor eros accumsan nisi, non porttitor ipsum nunc sit amet dolor.</p> 

									<p>Duis vehicula odio sed consectetur tincidunt. Vestibulum vitae elementum ipsum. Nam porttitor quam vitae ex sollicitudin, bibendum fermentum nulla aliquet. Proin gravida ac risus eu scelerisque. Cras placerat vehicula arcu sed luctus.</p>

									<blockquote>
									  <p>Pellentesque consectetur, est vel efficitur posuere, neque dolor accumsan neque, ut semper ipsum magna nec dui. Ipsum.</p>
									  <footer><cite title="Kalen mcGregor">Hoang Nguyen</cite></footer>
									</blockquote>

									<p>Nam eu facilisis lorem. In hac habitasse platea dictumst. Aenean enim massa, viverra in diam ac, gravida egestas risus. Morbi quis ante erat. Nulla sodales, diam at accumsan mattis, dolor eros accumsan nisi</p>

									<img class="img-leftblog" src="img/blog_img_2.jpg" align="left" alt="">
									<ul>
										<li>Explore an exhibition</li>
										<li>See the exhibition's details</li>
										<li>Lorem ipsum dolor sit amet</li>
										<li>Duis laoreet, diam sed egestas pellentesque, ipsum</li>
										<li>Praesent ut aliquet enim</li>
										<li>Quisque consectetur vitae dolor ut ullamcorper</li>
										<li>Proin maximus in quam et tempor</li>
									</ul>
									<p>Duis vehicula odio sed consectetur tincidunt. Vestibulum vitae elementum ipsum. Nam porttitor quam vitae ex sollicitudin, bibendum fermentum nulla aliquet. Proin gravida ac risus eu scelerisque. Cras placerat vehicula arcu sed luctus. Vivamus ullamcorper convallis tortor in faucibus. Nulla lobortis quam dolor, non scelerisque lectus interdum vel. Etiam sodales luctus tellus a tempus. Eget pharetra ex interdum.</p>

									<p>Nam eu facilisis lorem. In hac habitasse platea dictumst. Aenean enim massa, viverra in diam ac, gravida egestas risus. Morbi quis ante erat. Nulla sodales, diam at accumsan mattis, dolor eros accumsan nisi risus eu scelerisque. Cras placerat vehicula arcu sed luctus. Vivamus ullamcorper convallis tortor in faucibus. Nulla lobortis quam dolor, non scelerisque lectus interdum vel. Etiam sodales luctus tellus a tempus. Eget pharetra ex interdum.</p>									
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="be-bottom">
											<h4 class="be-bottom-title">Tags</h4>
											<div class="tags_block clearfix">
												<ul>
													<li><a href="blog-detail-2.html">photoshop</a></li>
													<li><a href="blog-detail-2.html">national geographic</a></li>
													<li><a href="blog-detail-2.html">nature</a></li>
													<li><a href="blog-detail-2.html">responsive web design</a></li>
													<li><a href="blog-detail-2.html">animals</a></li>
												</ul>
											</div>									
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="be-bottom right">
											<h4 class="be-bottom-title">Share</h4>
											<ul class="soc_buttons light">
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-twitter"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
												<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
												<li><a href=""><i class="fa fa-instagram"></i></a></li>
												<li><a href=""><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>							
							</div>
						</div>

						<h3 class="letf-menu-article">Related Posts</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="be-post style-2">
									<div class="be-post-date"><i class="fa fa-clock-o"></i> April 23, 2015</div>
									<a href="blog-detail-2.html" class="be-post-title">Poly Bear</a>     	
									<a href="blog-detail-2.html" class="be-img-block">
										<img src="img/be_post_3.jpg" alt="omg">
									</a>
									<span>
										Cras pellentesque blandit arcu eget laoreet. Nulla finibus non.
									</span>
								</div>							
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="be-post style-2">
									<div class="be-post-date"><i class="fa fa-clock-o"></i> April 23, 2015</div>
									<a href="blog-detail-2.html" class="be-post-title">Girl in a Glasses</a>     	
									<a href="blog-detail-2.html" class="be-img-block">
										<img src="img/be_post_4.jpg" alt="omg">
									</a>
									<span>
										Proin id justo euismod, efficitur dui id, posuere libero. Aenean sollicitudin magna felis
									</span>
								</div>							
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="be-post style-2">
									<div class="be-post-date"><i class="fa fa-clock-o"></i> April 23, 2015</div>
									<a href="blog-detail-2.html" class="be-post-title">Art House modern</a>     	
									<a href="blog-detail-2.html" class="be-img-block">
										<img src="img/be_post_5.jpg" alt="omg">
									</a>
									<span>
										Nam finibus sed lectus sit amet consequat. Proin laoreet mi nec lorem molestie tristique.
									</span>
								</div>							
							</div>														
						</div>
						<div class="be-comment-block">
							<h1 class="comments-title">Comments (3)</h1>
							<div class="be-comment">
								<div class="be-img-comment">	
									<a href="blog-detail-2.html">
										<img src="img/c1.png" alt="" class="be-ava-comment">
									</a>
								</div>
								<div class="be-comment-content">
									
										<span class="be-comment-name">
											<a href="blog-detail-2.html">Ravi Sah</a>
											</span>
										<span class="be-comment-time">
											<i class="fa fa-clock-o"></i>
											May 27, 2015 at 3:14am
										</span>

									<p class="be-comment-text">
										Pellentesque gravida tristique ultrices. 
										Sed blandit varius mauris, vel volutpat urna hendrerit id. 
										Curabitur rutrum dolor gravida turpis tristique efficitur.
									</p>
								</div>
							</div>
							<div class="be-comment">
								<div class="be-img-comment">	
									<a href="blog-detail-2.html">
										<img src="img/c4.png" alt="" class="be-ava-comment">
									</a>
								</div>
								<div class="be-comment-content">
									<span class="be-comment-name">
										<a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
									</span>
									<span class="be-comment-time">
										<i class="fa fa-clock-o"></i>
										May 27, 2015 at 3:14am
									</span>
									<p class="be-comment-text">
										Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in turpis tristique blandit.
									</p>
								</div>
							</div>
							<div class="be-comment">
								<div class="be-img-comment">	
									<a href="blog-detail-2.html">
										<img src="img/c5.png" alt="" class="be-ava-comment">
									</a>
								</div>
								<div class="be-comment-content">
									<span class="be-comment-name">
										<a href="blog-detail-2.html">Cüneyt ŞEN</a>
									</span>
									<span class="be-comment-time">
										<i class="fa fa-clock-o"></i>
										May 27, 2015 at 3:14am
									</span>
									<p class="be-comment-text">
										Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant
									</p>
								</div>
							</div>
							<form class="form-block">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group fl_icon">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input class="form-input" type="text" placeholder="Your name">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 fl_icon">
										<div class="form-group fl_icon">
											<div class="icon"><i class="fa fa-envelope-o"></i></div>
											<input class="form-input" type="text" placeholder="Your email">
										</div>
									</div>
									<div class="col-xs-12">									
										<div class="form-group">
											<textarea class="form-input" required="" placeholder="Your text"></textarea>
										</div>
									</div>
									<a class="btn color-1 size-2 hover-1 pull-right">submit</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<form action="./" class="input-search">
						<input type="text" required placeholder="Enter keyword">
							<i class="fa fa-search"></i>
							<input type="submit" value="">
					</form>
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Categories
						</h3>
						<div class="creative_filds_block">
							<div class="ul">
								<a href="blog-detail-2.html">Graphic Design		</a>
								<a href="blog-detail-2.html">Photography			</a>
								<a href="blog-detail-2.html">Interaction Design	</a>
								<a href="blog-detail-2.html">Art Direction		</a>
								<a href="blog-detail-2.html">Illustration		</a>
							</div>
						</div>
					</div>
					
					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Posts
						</h3>					
	                	<div class="be-post style-2">
							<a href="blog-detail-2.html" class="be-post-title">Arctic monkeys. Space adventures in the action</a>     	
							<a href="blog-detail-2.html"class="be-img-block">
								<img src="img/be_post_1.jpg" alt="omg">
							</a>
							<span>
								Pellentesque consectetur, est vel efficitur posuere, neque dolor accumsan
							</span>
						</div>
	                	<div class="be-post style-2">
							<a href="blog-detail-2.html" class="be-post-title">Cubism as art direction</a>     	
							<a href="blog-detail-2.html"class="be-img-block">
								<img src="img/be_post_2.jpg" alt="omg">
							</a>
							<span>
								Cras pellentesque blandit arcu eget laoreet. Nulla finibus non.
							</span>
						</div>
					</div>

					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Popular Tags
						</h3>
						<div class="tags_block clearfix">
							<ul>
								<li><a href="blog-detail-2.html">photoshop</a></li>
								<li><a href="blog-detail-2.html">graphic</a></li>
								<li><a href="blog-detail-2.html">art</a></li>
								<li><a href="blog-detail-2.html">website</a></li>
								<li><a href="blog-detail-2.html">logo</a></li>
								<li><a href="blog-detail-2.html">identity</a></li>
								<li><a href="blog-detail-2.html">logo design</a></li>
								<li><a href="blog-detail-2.html">interactive</a></li>
								<li><a href="blog-detail-2.html">blue</a></li>
								<li><a href="blog-detail-2.html">branding</a></li>
							</ul>
						</div>
					</div>					

					<h3 class="letf-menu-article">
						Slider widget
					</h3>						
					<div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            	<div class="swiper-slide">
	                            	<div class="be-post style-3">
										<a href="blog-detail-2.html"class="be-img-block">
										<img src="img/be_slider_1.jpg" height="202" width="269" alt="omg">
										</a>
										<a href="blog-detail-2.html" class="be-post-title">Defence</a>
										<span>
											<a href="blog-detail-2.html" class="be-post-tag">Art direction</a>, 
											<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>,  
											<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>
										</span>
									</div>
	                            </div>
	                            <div class="swiper-slide">
	                            	<div class="be-post style-3">
										<a href="blog-detail-2.html"class="be-img-block">
										<img src="img/be_slider_1.jpg" height="202" width="269" alt="omg">
										</a>
										<a href="blog-detail-2.html" class="be-post-title">Defence</a>
										<span>
											<a href="blog-detail-2.html" class="be-post-tag">Art direction</a>, 
											<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>,  
											<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>
										</span>
									</div>
	                            </div>
	                            <div class="swiper-slide">
	                            	<div class="be-post style-3">
										<a href="blog-detail-2.html"class="be-img-block">
										<img src="img/be_slider_1.jpg" height="202" width="269" alt="omg">
										</a>
										<a href="blog-detail-2.html" class="be-post-title">Defence</a>
										<span>
											<a href="blog-detail-2.html" class="be-post-tag">Art direction</a>, 
											<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>,  
											<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>
										</span>
									</div>
	                            </div>
	                            <div class="swiper-slide">
	                            	<div class="be-post style-3">
										<a href="blog-detail-2.html"class="be-img-block">
										<img src="img/be_slider_1.jpg" height="202" width="269" alt="omg">
										</a>
										<a href="blog-detail-2.html" class="be-post-title">Defence</a>
										<span>
											<a href="blog-detail-2.html" class="be-post-tag">Art direction</a>, 
											<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>,  
											<a href="blog-detail-2.html" class="be-post-tag">Interactiob design</a>
										</span>
									</div>
	                            </div>
                        </div>
                        <div class="pagination">
                        	
                        </div>
                    </div>

					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Archive
						</h3>
                        <div class="accordion style-1">
                            <div class="acc-panel">
                                <div class="acc-title">2015</div>
                                <div class="acc-body">
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">January <span class="count">13</span></a></p>
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">February <span class="count">225</span></a></p>
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">March <span class="count">31</span></a></p>
                                </div>
                            </div>
                            <div class="acc-panel">
                                <div class="acc-title">2014</div>
                                <div class="acc-body">
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">January <span class="count">13</span></a></p>
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">February <span class="count">225</span></a></p>
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">March <span class="count">31</span></a></p>
                                </div>
                            </div>
                            <div class="acc-panel">
                                <div class="acc-title">2013</div>
                                <div class="acc-body">
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">January <span class="count">13</span></a></p>
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">February <span class="count">225</span></a></p>
                                    <p><a class="archive-link clearfix" href="blog-detail-2.html">March <span class="count">31</span></a></p>
                                </div>
                            </div>                            
                        </div>						
					</div>

					<div class="be-vidget">
						<h3 class="letf-menu-article">
							Gallery
						</h3>
						<div class="gal-vidget">
							<div class="row row20">
								<div class="col-xs-6">
									<a class="gal-vidget-link" href="blog-detail-2.html"><img class="img-responsive img-full" src="img/be_gal_1.jpg" alt=""></a>
								</div>
								<div class="col-xs-6">
									<a class="gal-vidget-link" href="blog-detail-2.html"><img class="img-responsive img-full" src="img/be_gal_2.jpg" alt=""></a>
								</div>
								<div class="col-xs-6">
									<a class="gal-vidget-link" href="blog-detail-2.html"><img class="img-responsive img-full" src="img/be_gal_3.jpg" alt=""></a>
								</div>
								<div class="col-xs-6">
									<a class="gal-vidget-link" href="blog-detail-2.html"><img class="img-responsive img-full" src="img/be_gal_4.jpg" alt=""></a>
								</div>
								<div class="col-xs-6">
									<a class="gal-vidget-link" href="blog-detail-2.html"><img class="img-responsive img-full" src="img/be_gal_5.jpg" alt=""></a>
								</div>
								<div class="col-xs-6">
									<a class="gal-vidget-link" href="blog-detail-2.html"><img class="img-responsive img-full" src="img/be_gal_6.jpg" alt=""></a>
								</div>																																												
							</div>
						</div>
					</div>					


				</div>
			</div>
		</div>
	</div>

    @endsection