@extends('layouts.app')

@section('content')
	@include('partails.home_navbar')
	<div class="container">
		@include('partails.home_slideshow')
		<h3 class="clearfix">Most Popular Product</h3>
		<div class="row">
			@foreach($products as $key => $product)
				@include('product.item')
			@endforeach
		</div>
	</div>

@endsection