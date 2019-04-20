@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Welcome to out prodcut Lists</h3>

	<div><a href="{{route('selectList')}}" class="btn btn-primary btn-sm">Create Product</a></div>
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
	  	@foreach($categories as $key => $product)
	    <tr>
	      <th scope="row">{{$key}}</th>
	      <td>{{$product->name}}</td>
	      <td>{{$product->slug}}</td>
	      <td>{{$product->decs}}</td>
	      <td>
	      	<a href="#" class="btn btn-info btn-sm">Edit</a> 
	      	<a href="#" class="btn btn-danger btn-sm">Delete</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection