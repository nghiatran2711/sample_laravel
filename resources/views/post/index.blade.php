@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','List Post')
@push('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/categories/category-list.css') }}"> --}}
@endpush
@section('content')
  <h1 id="category-list">LIST POST</h1>
  {{-- form search --}}
    @include('post.search')
  {{-- create category link --}}
  
  <br><a class="btn btn-primary" href="{{route('post.create')}}">Create</a>
  {{-- display list category --}}
  {{-- <table class="table table-bordered table-inverse table-hover"> --}}
    <p>There are {{ $posts->count() }} posts in database</p>
    <table class="table table-striped">

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

                  <td><a href="{{ route('post.show',['id'=>$value->id]) }}" class=" btn btn-primary"><i class="fas fa-search"></i></a></td>
                  <td><a href="{{ route('post.edit', ['id' => $value->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                  {{-- <a href="{{ route('category.delete', ['id' => $value->id]) }}">Delete</a> --}}
                  <td>
                    <form action="{{ route('post.destroy',['id' => $value->id]) }}" method="POST">
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
<div class="pagination">
  {{ $posts->appends(request()->input())->links() }}
</div>
@endsection