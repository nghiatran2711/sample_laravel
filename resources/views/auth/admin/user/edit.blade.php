@extends('layouts.master')
@section('title','Edit User')
@section('content')
	<h1>EDIT USER</h1>

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
	<form class="row g-3" action="{{route('admin.user.update',['id'=>$user->id])}}" method="POST">
		@csrf
        @method('PUT')
	  	<div class="col-md-8">
			<label for="inputEmail4" class="form-label">Name User</label>
			<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputEmail4" value="{{ $user->name }}">
			@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="col-md-8">
			<label for="inputEmail4" class="form-label">Email</label>
			<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail4" value="{{ $user->email }}">
			@error('email')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Update</button>
	    <a href="{{route('admin.user.index')}}" class="btn btn-info">List User</a>
	  </div>
	</form>
@endsection