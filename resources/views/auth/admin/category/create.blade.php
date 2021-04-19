@extends('auth.admin.dashboard')
@section('title','Create Category')
@section('content-admin')
	<section class="content-header">
		<div class="container-fluid">
		  <div class="row mb-2">
			<div class="col-sm-6">
			  <h1>Create Category</h1>
			</div>
			<div class="col-sm-6">
			  <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Create Category</li>
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
				<form action="{{route('admin.category.store')}}" method="POST">
					@csrf
				  <div class="card-body">
					<div class="form-group">
					  <label for="exampleInputEmail1">Category Name</label>
					  <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Category Name">
					</div>
				  </div>
				  <div class="card-footer">
					<button type="submit" class="btn btn-primary">Create Category</button>
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