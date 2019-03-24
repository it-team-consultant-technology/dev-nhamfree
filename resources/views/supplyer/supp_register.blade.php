@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row">
	    <div class="col-sm-4">
		    <center><h2>Login</h2></center>
			<form class="form-horizontal" action="#">
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
			          <label><input type="checkbox" name="remember"> Remember me</label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-success">Submit</button>
			      </div>
			    </div>
			</form>
	    </div>

	    <div class="col-sm-8">
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