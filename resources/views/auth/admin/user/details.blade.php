@extends('layouts.master')
{{-- import file css (private) --}}
@section('title','Details User')
@push('css')
    
@endpush
@section('content')
<h1>USER DETAILS</h1>
<p>User ID: {{ $userDetails->id }}</p>
<p>User Name: {{ $userDetails->name }}</p>
<p>Email : {{ $userDetails->email }}</p>
<p>Password: {{ $userDetails->password}}</p>
@endsection