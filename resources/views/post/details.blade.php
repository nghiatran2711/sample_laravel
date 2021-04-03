@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','Details Post')
@push('css')
    
@endpush
@section('content')

<h1 id="post-list">POST DETAILS</h1>
@if (!empty($postDetails))
<p>Post ID: {{ $postDetails->id }}</p>
<p>Post Name: {{ $postDetails->post_name }}</p>
<p>Post Content: {{ $postDetails->post_content }}</p>
<p>Category Name: {{ $postDetails->category->category_name }}</p>
@endif
@endsection