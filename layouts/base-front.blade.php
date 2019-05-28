<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BookSeats.com</title>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="/css/app.css" type="text/css" />
</head>
<body>
	<section id="page" data-page="{{isset($page) ? $page : ''}}" class="site-wrapper">
			@include('modules.header-front')
			@yield('content')
			@include('modules.footer-front')
	</section>

	<script src="/js/app.js" type="text/javascript"></script>

	@include('modals.auth')
</body>
</html>