@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','List Category')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/categories/category-list.css') }}">

@endpush
@push('js')
  <script>
      // $(document).ready(function () {
      //       $('#frm-search-category').on('submit', function (event) {
      //           event.preventDefault();
      //           let categoryNameSearch = $('#category-name-search').val();
      //           // add param search vào URL
      //           let _url = $(this).attr('action') + '?category_name=' + categoryNameSearch;
      //           $.ajax({
      //               url: _url,
      //               type: 'GET',
      //               success: function (response) {
      //                   console.log('response', response);
      //                   let _tableBodyHtml = '';
      //                   let categories = response.categories;
      //                   if (categories.length > 0) {
      //                       $(categories).each(function (key, value) {
      //                           console.log(key, value);
      //                           _tableBodyHtml += '<tr>';
      //                           _tableBodyHtml +=     '<td>'+ (key+1) +'</td>';
      //                           _tableBodyHtml +=     '<td>'+ value.id +'</td>';
      //                           _tableBodyHtml +=     '<td>'+ value.category_name +'</td>';
      //                           _tableBodyHtml +=     '<td><a href="" class="btn btn-info">Detail</a></td>';
      //                           _tableBodyHtml +=     '<td><a href="" class="btn btn-warning">Edit</a></td>';
      //                           _tableBodyHtml +=     '<td>Delete</td>';
      //                           _tableBodyHtml += '</tr>';
      //                       });
      //                   }
      //                   // update data for table category 
      //                   $('#category-list tbody').html(_tableBodyHtml);
      //               },
      //               error: function (err) {
      //                   console.log(err)
      //               },
      //               dataType: 'json'
      //           });
      //       });
      //   });
      $(document).ready(function(){
        $('#category-name-search').keyup(function(event){
          event.preventDefault();
          let value = $(this).val();
          console.log(value);
          let _url = 'search-ajax' + '?category_name=' + value;
          $.ajax({
            url:_url,
            type:"GET",
            success: function (response) {
                console.log('response', response);
                let _tableBodyHtml = '';
                let categories = response.categories;
                if (categories.length > 0) {
                    $(categories).each(function (key, value) {
                        console.log(key, value);
                        _tableBodyHtml += '<tr>';
                        _tableBodyHtml +=     '<td>'+ (key+1) +'</td>';
                        _tableBodyHtml +=     '<td>'+ value.id +'</td>';
                        _tableBodyHtml +=     '<td>'+ value.category_name +'</td>';
                        _tableBodyHtml +=     '<td><a href="" class="btn btn-info">Detail</a></td>';
                        _tableBodyHtml +=     '<td><a href="" class="btn btn-warning">Edit</a></td>';
                        _tableBodyHtml +=     '<td>Delete</td>';
                        _tableBodyHtml += '</tr>';
                    });
                }
                // update data for table category 
                $('#category-list tbody').html(_tableBodyHtml);
            },
            error: function (err) {
                console.log(err)
            },
            dataType: 'json'
          });
        });
      });
    </script>
@endpush
@section('content')
  <h1>LIST CATEGORY</h1>
  {{-- form search --}}
  @include('auth.admin.category.search')
  {{-- create category link --}}
  <a class="btn btn-primary" href="{{route('admin.category.create')}}">Create</a>
  {{-- display list category --}}
  <table id="category-list" class="table table-bordered table-inverse table-hover">
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
@endsection