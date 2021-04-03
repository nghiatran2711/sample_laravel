@extends('layouts.master')
@section('title','Create Post')
@section('content')
	<h1>CREATE POST</h1>
	@include('errors.error')
	<form class="row g-3" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Post name</label>
            <input type="text" name="post_name" class="form-control" id="inputEmail4" value="{{ old('post_name') }}">
            @error('post_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- {{ dd($category) }} --}}
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">	   
                <option value=""></option>        
                @foreach ($category as $key => $value )
                        <option value="{{ $key }}" {{ old('category_id')==$key ? 'selected' : '' }}>{{ $value}}</option>
                        @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                @endforeach
            </select>
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Image</label>
            <input type="file" name="thumbnail" class="form-control" id="inputEmail4"">
            @error('thumbnail')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="inputEmail4" value="{{ old('status') }}">
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> --}}
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Store</button>
	    <a href="{{route('post.index')}}" class="btn btn-info">List Category</a>
	  </div>
	</form>
@endsection