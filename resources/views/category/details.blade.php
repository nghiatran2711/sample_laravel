@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','Details Category')
@push('css')
    
@endpush
@section('content')
<h1 id="category-list">CATEGORY DETAILS</h1>
<p>Category ID: {{ $categoryDetails->id }}</p>
<p>Category Name: {{ $categoryDetails->category_name }}</p>
<p>Category Created At: {{ $categoryDetails->created_at }}</p>
<p>Category Updated At{{ $categoryDetails->updated_at}}</p>
@endsection