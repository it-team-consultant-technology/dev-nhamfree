@extends('layouts.app')

@section('content')
<style type="text/css">
	.nav-link{
		color: black;
	}
	input[type]:hover{
		box-shadow: 0 0 0 1px #e9ecef;
	}
</style>

@include('partails.home_navbar');
<div class="container">
	<div class="row" >
	    <div class="col-sm-2" style="box-shadow: 1px 0px #e9ecef;">
		    <div class="img">
		    	<img src="{{asset('image/1.jpg')}}" style="width: 160px;border-radius: 80px;border:4px solid lightblue;">
		    </div>
		    <div class="menu">
		    	<div class="dropdown-menu">
				  <h6 class="dropdown-itm">Dropdown header</h6>
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				</div>
		    </div>
	    </div>

	    <div class="col-sm-10">
	    	<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <h1 class="display-4">Fluid jumbotron</h1>
			    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			  </div>
			</div>
		    <nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">DASHABORD</a>
				    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">OLDERS</a>
				    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">DOWLOADS</a>
				    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ADDRESS</a>
				    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#ACCOUNT" role="tab" aria-controls="nav-contact" aria-selected="false">ACCOUNT DETAILS</a>
				    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">SELLER SUPPORT TIKETS</a>
				    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">LOGOUT</a>
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.</div>
				  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
				  <div class="tab-pane fade" id="ACCOUNT" role="tabpanel" aria-labelledby="nav-contact-tab">
				  	<div class="row" style="padding: 12px;">
				  		<div class="col-md-6">
				  			<label>Firs name*</label>
				  			<input type="tex" class="form-control" name="">
				  		</div>
				  		<div class="col-md-6">
				  			<label>Lars name*</label>
				  			<input type="tex" class="form-control" name="">
				  		</div>
				  		<div class="col-md-12">
				  			<label>Email address*</label>
				  			<input type="Email" class="form-control" name="" >
				  		</div>
				  		<div class="col-md-12">
				  			<label>Password*</label>
				  			<input type="Password" class="form-control" name="" >
				  		</div>
				  	</div>
				  	<div class="row">
				  		
				  	</div>
				  </div>
				</div>		
	    </div>
	    
	</div>
	<br>
	<div class="jumbotron">Form Register</div>
@endsection