
@extends('layouts.app')

@section('content')
	@include('partails.home_navbar')
	<div class="jumbotron">Form Register</div>
	<div class="container" style="margin: auto;">
		<div class="row">
		    <div class="col-sm-9" style="margin: auto; color: white;background-color: #6C3483">
			    <center><h2>Register Form</h2></center>
			    <form class="form">
			    	
				    <div class="col-md-6 mb-3" style="margin: auto;">
				      <label for="validationServer01">Your Email*</label>
				      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Enter Your Email!" required>
				      <div class="valid-feedback">
				        Example: nhamfree2019@gmail.com!
				      </div>
				    </div>
				    <div class="col-md-6 mb-3" style="margin: auto;">
				      <label for="validationServer01">Password*</label>
				      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Enter Password!" required>
				      <div class="valid-feedback">
				        Long Than 6 Characters!
				      </div>
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