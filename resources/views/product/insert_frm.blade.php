
@extends('layouts.app')

@section('content')
	@include('partails.home_navbar')
	<div class="jumbotron">Form Register</div>

	@include('include.message')
	<div class="container" style="margin: auto; background-color: #6C3483">
		<div class="row">
		    <div class="col-sm-9" style="margin: auto; color: white">
			    <h3>Welcome to out prodcut Lists</h3>
				<a href="#" class="btn btn-link btn-sm">Back to Product List</a>

				<form action="{{route('insertAdd')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
					    <label for="exampleFormControlInput1">Product Name</label>
					    <input type="text" class="form-control" name="category_name" placeholder="Category Name">
					</div>
					
					<!-- <div class="form-group">
					    <label for="exampleFormControlTextarea1">Description</label>
					    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description here...!"></textarea>
					</div> -->

					<div class="form-group">
					  	<input type="submit" value="Save" class="btn btn-primary ">
					</div>
				</form>
		    </div>
		</div>
	</div>
	</br>
	<div class="jumbotron">Form Register</div>
@endsection