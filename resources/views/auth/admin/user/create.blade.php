@extends('layouts.master')
@section('title','Create Category')
@section('content')
	<h1>CREATE USER</h1>
	@include('errors.error')
	<form class="row g-3" action="{{route('admin.user.store')}}" method="POST">
		@csrf
	  <div class="col-md-8">
	    <label for="inputEmail4" class="form-label">Name User</label>
	    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputEmail4" placeholder="Name User">
	  </div>
	  <div class="col-md-8">
	    <label for="inputEmail4" class="form-label">Email</label>
	    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail4" placeholder="Email">
	  </div>
	  <div class="col-md-8">
	    <label for="inputEmail4" class="form-label">Password</label>
	    <input type="password" name="password" class="form-control" id="inputEmail4" placeholder="Password">
	  </div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-primary">Store</button>
	    <a href="{{route('admin.user.index')}}" class="btn btn-info">List User</a>
	  </div>
	</form>
@endsection