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
								<li>Contacts</li>
							</ul>
						</div>
					</div>
				</div>
			</nav><!-- End bread crumbs -->
			<form method="post" action="">
			<div class="section">
				<div class="container">
					<div class="row content-items">
						<div class="col-12">
							<div class="section-heading">
								<div class="section-subheading">We are always in touch</div>
								<h1>Contacts</h1>
							</div>
						</div>
						<div class="col-xl-4 col-md-5 content-item">
							<div class="contact-info section-bgc">
								<h3>Get in Touch</h3>
								<ul class="contact-list">
									<li>
										<i class="material-icons material-icons-outlined md-22">location_on</i>
										<div class="footer-contact-info">
											<a href="https://goo.gl/maps/2Ygp5S2Ssm1G5o329">
												310,Lok jagrut kendra, sanand,Ahmedabad
											</a>
										</div>
									</li>
									<li>
										<i class="material-icons material-icons-outlined md-22">smartphone</i>
										<div class="footer-contact-info">
											<a href="tel:+13239134688" class="formingHrefTel">+91-786545678</a>
											<a href="tel:+13238884554" class="formingHrefTel">+91-9293939393</a>
										</div>
									</li>
									<li>
										<i class="material-icons material-icons-outlined md-22">email</i>
										<div class="footer-contact-info">
											<a href="mailto:mail@example.com">ljuniversity@gmail.com</a>
											<a href="mailto:info@example.com">ljone@gmail.com</a>
										</div>
									</li>
									<li>
										<i class="material-icons material-icons-outlined md-22">schedule</i>
										<div class="footer-contact-info"><p>Mon - Fri: 9:00 - 18:00
                                      <br>  Ravivaare- raza</p></div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-8 col-md-7 content-item">

							<form action="/contact" method="post" class="form-submission contact-form contact-form-padding" novalidate>
								@csrf
								

								<input type="hidden" name="Subject" value="Contact form">
								<div class="row gutters-default">
									<div class="col-12">
										<h3>Contact Form</h3>
									</div>
									<div class="col-xl-4 col-sm-6 col-12">
										<div class="form-field">
											<label for="contact-name" class="form-field-label">Full Name</label>
											<input type="text" class="form-field-input" name="fname" value="" autocomplete="off" id="contact-name" required data-pristine-required-message="This field is required.">
										</div>
									</div>

										
									<div class="col-xl-4 col-sm-6 col-12">
										<div class="form-field">
											<label for="contact-phone" class="form-field-label">Phone Number</label>
											<input type="tel" class="form-field-input mask-phone" name="phone" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
										</div>
										
									</div>
										<div class="col-xl-4 col-12">
										<div class="form-field">
											<label for="contact-email" class="form-field-label">Email Address</label>
											<input type="email" class="form-field-input" name="femail" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
										</div>
									</div>
									<div class="col-12">
										<div class="form-field">
											<label for="contact-message" class="form-field-label">Your Message</label>
											<textarea name="meg" class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
										</div>
										<div class="form-btn">
											<button type="submit" class="btn btn-w240 ripple"><span>Send Message</span></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		
		</div>

    <!-- Begin map -->
        
	@endsection	