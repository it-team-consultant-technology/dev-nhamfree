
@extends('layouts.app')

@section('content')
	@include('partails.home_navbar')
	<div class="jumbotron">Form Register</div>

	@include('include.message')
	<div class="container" style="margin: auto; background-color: #6C3483">
		<div class="row">
		    <div class="col-sm-9" style="margin: auto; color: white">
			    <center><h2>Register Form</h2></center>
			    <form class="form-row" action="{{route('createSupplier')}}" method="POST">
			    	{{csrf_field()}}
			    	<div class="col-md-6 mb-3">
				      <label for="validationServer01">First name*</label>
				      <input type="text" class="form-control is-valid" name="fist_name" placeholder="First Name!" required>
				      <div class="valid-feedback">
				        Nham!
				      </div>
				    </div>
				    <div class="col-md-6 mb-3">
				      <label for="validationServer01">Last name*</label>
				      <input type="text" name="last_name" class="form-control is-valid" placeholder="Last Name!" required>
				      <div class="valid-feedback">
				        Free!
				      </div>
				    </div>

				    <div class="col-md-12 mb-3">
				      <label for="validationServer01">Your Email*</label>
				      <input type="email" class="form-control is-valid" name="email" placeholder="Enter Your Email!" required>
				      <div class="valid-feedback">
				        Example: nhamfree2019@gmail.com!
				      </div>
				    </div>
				    <div class="col-md-12 mb-3">
				      <label for="validationServer01">Password*</label>
				      <input type="password" class="form-control is-valid" name="password" placeholder="Enter Password!" required>
				      <div class="valid-feedback">
				        Long Than 6 Characters!
				      </div>
				    </div>
				    <div class="col-md-12 mb-3">
				      <label for="validationServer01">Phone Number*</label>
				      <input type="text" class="form-control is-valid" name="phone" placeholder="Enter Phone Number!" required>
				      <div class="valid-feedback">
				        +855(0)88 2222 999!
				      </div>
				    </div>

				    <div class="col-md-12 mb-3" style="text-align: center;">
				      <label for="validationServer01">Gender*</label>	      
				        <label class="col-sm-3">
				        	<input type="radio" name="gender"> Male
				        </label>
				        <label>
				        	<input type="radio" name="gender"> Felmale
				        </label>				      
				    </div>

				    <div class="col-md-12 mb-3" style="text-align: center;">
				      <button type="submit" class="btn btn-primary btn-md">Register</button>
				      <button type="submit" class="btn btn-secondary btn-md">Cancel</button>
				    </div>
			    </form>
		    </div>
		</div>
	</div>
	</br>
	<div class="jumbotron">Form Register</div>
@endsection