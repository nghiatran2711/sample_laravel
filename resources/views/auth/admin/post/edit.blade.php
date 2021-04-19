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
			  <h1>Edit Post</h1>
			</div>
			<div class="col-sm-6">
			  <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">Edit Post</li>
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
				<form action="{{ route('admin.post.update',['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Post Name</label>
							<input type="text" name="post_name" class="form-control" id="exampleInputEmail1" value="{{ $post->post_name }}">
							@error('post_name')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">           
							<label>Category</label>
							<select class="form-control select2" style="width: 100%;" name="category_id">
								<option value=""></option>        
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
						<div class="form-group">
							<label for="inputEmail4" class="form-label">Image</label>
							<img src="{{ asset($post->thumbnail) }}" alt="" width="300px">
							<input type="file" name="thumbnail" class="form-control" id="inputEmail4">
							@error('thumbnail')
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
