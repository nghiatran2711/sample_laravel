@extends('auth.admin.dashboard')
@section('title','Create Category')
@section('content-admin')
	<section class="content-header">
		<div class="container-fluid">
		  <div class="row mb-2">
			<div class="col-sm-6">
			  <h1>Create Post</h1>
			</div>
			<div class="col-sm-6">
			  <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Create Post</li>
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
				<form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
				  <div class="card-body">
					<div class="form-group">
					    <label for="exampleInputEmail1">Post Name</label>
					    <input type="text" name="post_name" class="form-control" id="exampleInputEmail1" value="{{ old('post_name') }}">
                        @error('post_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">           
						<label>Category</label>
						<select class="form-control select2" style="width: 100%;" name="category_id">
							<option value=""></option>        
						@foreach ($category as $key => $value )
							<option value="{{ $key }}" {{ old('category_id')==$key ? 'selected' : '' }}>{{ $value}}</option>
							@error('category_id')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							@endforeach
						</select>
                    </div>
                    <div class="form-group">
					    <label for="inputEmail4" class="form-label">Image</label>
                        <input type="file" name="thumbnail" class="form-control" id="inputEmail4"">
                        @error('thumbnail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
				  </div>
				  <div class="card-footer">
					<button type="submit" class="btn btn-primary">Create Post</button>
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