@extends('auth.admin.dashboard')
@section('title','Edit Category')
@section('content-admin')
	@include('errors.error')
	@if (Session::has('error'))
      <div class="alert alert-danger">
          {{ Session::has('error') }}
      </div>
    @endif
	<section class="content-header">
		<div class="container-fluid">
		  <div class="row mb-2">
			<div class="col-sm-6">
			  <h1>Edit Category</h1>
			</div>
			<div class="col-sm-6">
			  <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Edit Category</li>
			  </ol>
			</div>
		  </div>
		</div><!-- /.container-fluid -->
	  </section>
    <!-- Main content -->
    <section class="content">
		<div class="container-fluid">
		  <div class="row">
			<!-- left column -->
			<div class="col-md-12">
			  <!-- general form elements -->
			  <div class="card card-primary">
				<!-- /.card-header -->
				<!-- form start -->
				@include('errors.error')
				<form action="{{route('admin.category.update',['id'=>$category->id])}}" method="POST">
					@csrf
					@method('PUT')
				  <div class="card-body">
					<div class="form-group">
					  	<label for="exampleInputEmail1">Category Name</label>
					  	<input type="text" name="category_name" class="form-control" id="exampleInputEmail1" value="{{ $category->category_name }}">
					  	@error('category_name')
					  		<div class="alert alert-danger">{{ $message }}</div>
				  		@enderror
					</div>
				  </div>
				  <div class="card-footer">
					<button type="submit" class="btn btn-primary">Update Category</button>
				  </div>
				</form>
			  </div>
			  <!-- /.card -->
		  </div>
		  <!-- /.row -->
		</div><!-- /.container-fluid -->
	  </section>
	  <!-- /.content -->
@endsection