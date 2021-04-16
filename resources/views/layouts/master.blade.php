<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title','Home Page')</title>

		<!-- Bootstrap CSS -->
		{{-- css --}}
		@include('layouts.css')
		@stack('custom-scripts')
	</head>
	<body>
		{{-- hearder --}}
		@include('layouts.header')

		{{-- menu --}}
		@include('layouts.menu')
		{{-- content --}}
		<div class="container">
			@yield('content')
		</div>
		{{-- footer --}}
		@include('layouts.footer')
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		{{-- js --}}
		@include('layouts.js')
	</body>
</html>