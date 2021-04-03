@extends('layouts.master')
@section('title','Edit Post')
@section('content')
	<h1>EDIT POST</h1>

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
	<form class="row g-3" action="{{ route('post.update',['id'=>$post->id]) }}" method="POST">
		@csrf
        @method('PUT')
	  <div class="col-md-8">
	    <label for="inputEmail4" class="form-label">Post name</label>
	    <input type="text" name="post_name" class="form-control" id="inputEmail4" value="{{ $post->post_name }}">
		@error('post_name')
    		<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
    <div class="col-md-8">
	    <label for="inputEmail4" class="form-label">Post content</label>
	    <input type="text" name="post_content" class="form-control" id="inputEmail4" value="{{ $post->post_content }}">
		@error('post_content')
    		<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="col-md-8">
		<label for="inputEmail4" class="form-label">Category</label>
		<select class="form-select" aria-label="Default select example" name="category_id">	
			@foreach ($category as $key => $value  )
				@if ($value->id==$post->category_id)
					<option value="{{ $value->id }}" selected>{{ $value->category_name }}</option>
					@error('category_id')
    				<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				@else
					<option value="{{ $value->id }}">{{ $value->category_name }}</option>
				@endif
			@endforeach
		</select>
	</div>	
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Update</button>
	    <a href="{{route('post.index')}}" class="btn btn-info">List Post</a>
	  </div>
	</form>
@endsection