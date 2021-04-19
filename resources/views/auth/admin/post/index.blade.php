@extends('auth.admin.dashboard')
@section('content-admin')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List Post</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">List Post</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              {{-- @include('auth.admin.post.search') --}}
              <div class="card-body">
                <p>There are {{ $posts->count() }} posts in database</p>
                <table class="table table-bordered">
                  @if (Session::has('error'))
                    <div class="alert alert-danger">	
                        {{ session('error') }}
                    </div>
                  @endif
                  @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                  @endif
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Post ID</th>
                      <th>Post Name</th>
                      <th>Image</th>
                      <th>Category ID</th>
                      <th colspan="3">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($posts))
                      @foreach($posts as $key =>$value)
                      <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$value->id}}</td>
                          <td>{{$value->post_name}}</td>
                          <td><img src="{{ asset($value->thumbnail) }}" alt="" width="100px"></td>
                          <td>{{$value->category->category_name}}</td>

                          <td><a href="{{ route('admin.post.show',['id'=>$value->id]) }}" class=" btn btn-primary"><i class="fas fa-search"></i></a></td>
                          <td><a href="{{ route('admin.post.edit', ['id' => $value->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                          {{-- <a href="{{ route('category.delete', ['id' => $value->id]) }}">Delete</a> --}}
                          <td>
                            <form action="{{ route('admin.post.destroy',['id' => $value->id]) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>
                          </td>
                      </tr>
                      @endforeach
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <div class="pagination">
                  {{ $posts->appends(request()->input())->links() }}
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection