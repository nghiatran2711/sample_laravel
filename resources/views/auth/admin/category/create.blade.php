@extends('layouts.master')
@section('title','Create Category')
@section('content')
	<h1>CREATE CATEGORY</h1>
	@include('errors.error')
	<form class="row g-3" action="{{route('admin.category.store')}}" method="POST">
		@csrf
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Category name</label>
	    <input type="text" name="category_name" class="form-control" id="inputEmail4">
	  </div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Store</button>
	    <a href="{{route('admin.category.index')}}" class="btn btn-info">List Category</a>
	  </div>
	</form>
@endsection