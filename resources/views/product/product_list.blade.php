@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Welcome to out prodcut Lists</h3>

	<div><a href="{{route('productForm')}}" class="btn btn-primary btn-sm">Create Product</a></div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Country</th>
	      <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($products as $key => $product)
	    <tr>
	      <th scope="row">{{$key}}</th>
	      <td>{{$product->product_name}}</td>
	      <td>{{{ $product->category->name or ''}}}</td>
	      <td>{{{ $product->country->country_name or ''}}}</td>
	      <td>
	      	<a href="{{route('productForm')}}?eid={{$product->id}}" class="btn btn-info btn-sm">Edit</a> 
	      	<a href="#" class="btn btn-danger btn-sm">Delete</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection