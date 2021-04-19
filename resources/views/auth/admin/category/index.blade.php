@extends('auth.admin.dashboard')
@section('content-admin')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List Category</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">List Category</li>
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
              <div class="card-body">
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
                      <th>Category ID</th>
                      <th>Category Name</th>
                      <th colspan="3">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($categories))
                      @foreach($categories as $key =>$value)
                      <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$value->id}}</td>
                          <td>{{$value->category_name}}</td>
                          <td><a href="{{ route('admin.category.show',['id'=>$value->id]) }}" class="btn btn-info">details</a></td>
                          <td><a href="{{ route('admin.category.edit', ['id' => $value->id]) }}" class="btn btn-warning">Edit</a></td>
                          {{-- <a href="{{ route('category.delete', ['id' => $value->id]) }}">Delete</a> --}}
                          <td>
                            <form action="{{ route('admin.category.destroy',['id' => $value->id]) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger">Delete</button>
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
                {{ $categories->links() }}
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