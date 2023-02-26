@extends('admin.adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
					<form action="feedback" method="post">
						@csrf
						<div class="row">
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" name="fname">
							</div>
							<div class="col-6 mb-3">
								<input type="email" class="form-control" placeholder="Your Email"  name="femail">
							</div>
							<div class="col-12 mb-3">
								<input type="text" class="form-control" placeholder="Subject"  name="sub">
							</div>
							<div class="col-12 mb-3">
								<textarea name="meg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div>

							<div class="col-12">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>                           
            </div>

@endsection