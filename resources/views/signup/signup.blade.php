<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','List Post')
@push('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/categories/category-list.css') }}"> --}}
@endpush
@section('content')
<div class="container">
    <img src="{{ asset('storage/thumbnail_1617280646.jpg') }}" />
    <form action="/signup?utm=12345&age=22" method="POST" enctype="multipart/form-data">
        @csrf
        <legend>Sign up</legend>
        <div class="input-group">
            <input class="form-control" type="text" name="first_name" placeholder="First Name" aria-label="Recipient's " aria-describedby="my-addon">
        </div>
        <div class="input-group">
            <input class="form-control" type="file" name="thumbnail" placeholder="First Name" aria-label="Recipient's " aria-describedby="my-addon">
        </div>
        <div class="input-group">
            <input type="submit" value="Sign up" class="btn btn-primary">
        </div>
        
    </form>
</div>
@endsection