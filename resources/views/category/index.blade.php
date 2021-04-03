@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','List Category')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/categories/category-list.css') }}">
@endpush
@section('content')
  <h1 id="category-list">LIST CATEGORY</h1>
  {{-- form search --}}
  @include('category.search')
  {{-- create category link --}}
  <a class="btn btn-primary" href="{{route('category.create')}}">Create</a>
  {{-- display list category --}}
  <table class="table table-bordered table-inverse table-hover">
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
                  <td><a href="{{ route('category.show',['id'=>$value->id]) }}" class="btn btn-info">details</a></td>
                  <td><a href="{{ route('category.edit', ['id' => $value->id]) }}" class="btn btn-warning">Edit</a></td>
                  {{-- <a href="{{ route('category.delete', ['id' => $value->id]) }}">Delete</a> --}}
                  <td>
                    <form action="{{ route('category.destroy',['id' => $value->id]) }}" method="POST">
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
@endsection