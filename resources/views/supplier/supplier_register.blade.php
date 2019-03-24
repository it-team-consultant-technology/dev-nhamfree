
@extends('layouts.app')

@section('content')
	@include('partails.home_navbar')
	<div class="jumbotron">Form Register</div>
	<div class="container" style="margin: auto; background-color: #6C3483">
		<div class="row">
		    <div class="col-sm-9" style="margin: auto; color: white">
			    <center><h2>Register Form</h2></center>
				<form class="form-horizontal" action="#">
					<div class="form-group">
				      <label class="control-label col-sm-2" for="email">Username:</label>
				      <div class="col-sm-10">
				        <input type="email" class="form-control" id="unser" placeholder="Enter Username" name="user">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="email">Email:</label>
				      <div class="col-sm-10">
				        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="pwd">Password:</label>
				      <div class="col-sm-10">          
				        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				      </div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <div class="checkbox">
				          <label><input type="radio" name="remember"> I am a customer</label>
				        </div>
				      </div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <div class="checkbox">
				          <label><input type="radio" name="remember"> I am a vendor</label>
				        </div>
				      </div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <button type="submit" class="btn btn-success">Register</button>
				      </div>
				    </div>
				</form>
		    </div>
		    
		</div>
	</div>
@endsection