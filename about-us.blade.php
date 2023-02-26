@extends('m2')
@section('main')
			<!-- Begin bread crumbs -->
			<nav class="bread-crumbs">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<ul class="bread-crumbs-list">
								<li>
									<a href="/">Home</a>
									<i class="material-icons md-18">chevron_right</i>
								</li>
								<li>About us</li>
							</ul>
						</div>
					</div>
				</div>
			</nav><!-- End bread crumbs -->

			<div class="section">
				<div class="container">
					<div class="row">
						<header class="col-12">
							<div class="section-heading heading-center">
								<div class="section-subheading">industry leader</div>
								<h1>About us</h1>
								<p class="section-desc">We are an acknowledged corporate industry leader.</p>
							</div>
						</header>
						<div class="col-12">
							<div class="content">
								<div class="item-bordered item-border-radius">
									<img data-src="assets/img/about-img.jpg" class="img-cover img-responsive lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</div>
								<h2>Developing High-quality Apps</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content.</p>
								<h3>Providing Reliable Software</h3>
								<p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content.</p>
								<h3>Supporting Our Clients</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="section">
				<div class="container">
					<div class="row items">
						<div class="col-12">
							<div class="section-heading heading-center">
								<div class="section-subheading">The best</div>
								<h2>Our customers</h2>
								<p class="section-desc">Our customers have disrupted industries, opened new markets, and made countless lives better. We are privileged to work with hundreds of future-thinking businesses, including many of the world’s top hardware, software, and consumer brands.</p>
							</div> 
						</div>
							<!-- Begin brands item -->
															@foreach ($p as $d)
																					<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">


							<div class="brands-item item-style">

                                            <img src="storage\{{$d->filename}}" class="lazy">								
                                        </div>
                                        </div>
                                        @endforeach
                                            				
						
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/codelab.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/earth.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/hexa.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/lightai.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/nirastate.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/treva.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
							<!-- Begin brands item -->
							<div class="brands-item item-style">
								<img data-src="assets/img/brands/zootv.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
							</div><!-- End brands item -->
						</div>
					</div>
				</div>
			</section>

		</div>

	
@endsection