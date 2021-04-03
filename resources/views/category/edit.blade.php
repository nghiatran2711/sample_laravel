@extends('layouts.master')
@section('title','Edit Category')
@section('content')
	<h1>EDIT CATEGORY</h1>

	{{-- Cách 1 --}}
	@include('errors.error')
	{{-- Cách 2 --}}
	{{-- @if($errors->any())
    	 implode('', $errors->all('<div>:message</div>')) }}
	@endif --}}
	@if (Session::has('error'))
      <div class="alert alert-danger">
          {{ Session::has('error') }}
      </div>
    @endif
	<form class="row g-3" action="{{route('category.update',['id'=>$category->id])}}" method="POST">
		@csrf
        @method('PUT')
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Category name</label>
	    <input type="text" name="category_name" class="form-control" id="inputEmail4" value="{{ $category->category_name }}">
		@error('category_name')
    		<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Update</button>
	    <a href="{{route('category.index')}}" class="btn btn-info">List Category</a>
	  </div>
	</form>
@endsection