@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Welcome to out prodcut Lists</h3>
	<a href="{{route('productList')}}" class="btn btn-link btn-sm">Back to Product List</a>

	<form action="{{route('createProduct')}}" method="post">
		{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Category Name</label>
		    <input type="text" class="form-control" name="category_name" placeholder="Category Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Description</label>
		    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description here...!"></textarea>
		  </div>

		  <div class="form-group">
		  	<input type="submit" value="Save" class="btn btn-primary ">
		  </div>
	</form>
</div>
@endsection