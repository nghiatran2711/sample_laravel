@extends('auth.admin.dashboard')
@section('title','Update Post')
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
			  <h1>Edit Product</h1>
			</div>
			<div class="col-sm-6">
			  <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Edit Product</li>
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
				<form action="{{ route('admin.product.update',['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Product Name</label>
							<input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{ $product->name }}">
							@error('product_name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">           
							<label>Description</label>
							<textarea name="description" id="" cols="143" rows="5">{{ $product->description }}</textarea>
							@error('description')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="inputEmail4" class="form-label">Image</label>
							<img src="{{ asset($product->image) }}" alt="" width="150px">
							<input type="file" name="image" class="form-control" id="inputEmail4">
							@error('image')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">           
							<label>Category</label>
							<select class="form-control select2" style="width: 100%;" name="category_id">
								<option value=""></option>        
								@foreach ($category as $key => $value  )
									@if ($value->id==$product->category_id)
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
					  </div>
				  <div class="card-footer">
					<button type="submit" class="btn btn-primary">Update Product</button>
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
