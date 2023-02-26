@extends('admin.adminmaster')
@section('main')
        <div class="container-fluid pt-4 px-4">           
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
				<form action="selldata" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<h4 class="mb-2">Sell properties application Form</h4>
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" name="sname">
							</div>
							<div class="col-6 mb-3">
								<input type="email" class="form-control" placeholder="Your Email" name="semail">
							</div>
							<div class="col-12 mb-3">
								<input type="text" class="form-control" placeholder="Location" value="" name="loc">
							</div>
							<div class="form-floating mb-3">
							<select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="tid">
                                    <!-- <option selected>Select Category</option> -->
										@foreach ($data as $c)
									<option value="{{$c->id}}">{{$c->cname}}</option>
										@endforeach
									<!-- <option value="1">Flat</option>
                                    <option value="2">Bounglow</option>
                                    <option value="3">Apartment</option>
                                    <option value="3">Small House</option> -->
                                </select>
                            </div>
							<div class="input-group mb-3">
                                <input type="text" name="size" class="form-control" placeholder="Enter the Size" aria-label="Amount (to the nearest Ruppe)">
                                <span class="input-group-text">Sq.Feet</span>
                            </div>
							<div class="input-group mb-3">
                                <span class="input-group-text">₹</span>
                                <input type="text" class="form-control" name="price" placeholder="Enter the Price" aria-label="Amount (to the nearest Ruppe)">
                                <span class="input-group-text">.00</span>
                            </div>
							<div class="col-12 mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Your Properties Images</label>
                                <input class="form-control" type="file" name="img" id="formFileMultiple" multiple>
                            </div>
							<div class="col-12 mb-3">
								<textarea name="disc" id="" cols="30" rows="4" class="form-control" placeholder="Discription"></textarea>
							</div>

							<div class="col-12">
								<input type="submit" value="submit" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>                        
       </div>

@endsection