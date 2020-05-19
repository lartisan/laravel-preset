<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Admin @ lartisan.dev</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{ asset('img/favicon.png') }}" rel="icon">
	<link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!-- Template Main CSS File -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<livewire:styles />
	@stack('styles')
</head>

<body class="bg-gray-100 text-gray-500 font-sans font-thin flex flex-col min-h-screen md:flex-row md:flex-row">
	
	@include('sweetalert::alert')
	@auth @include('admin.layouts.partials.sidebar') @endauth

    <!-- Main Container -->
	<main class="relative w-full">

		@auth @include('admin.layouts.partials.header', compact('pageName')) @endauth
		
		@yield('content')
	
		@auth @include('admin.layouts.partials.footer') @endauth

	</main> <!-- ./ Main Container -->
	<script src="{{ asset('js/app.js') }}"></script>
	<livewire:scripts />
	@stack('scripts')
</body>
</html>