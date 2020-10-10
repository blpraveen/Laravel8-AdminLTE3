<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title> {{ config('app.name', 'Wosul') }} @yield('title')</title>

	<!-- Meta Informations -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="_token" content="{{ csrf_token() }}">
	<meta property="og:site_name" content="{{ config('app.name', 'Wosul') }}" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:image" content="" />
	<meta property="og:title" content="Wosul Project" />
	<meta property="og:description" content="" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="" type="image/x-icon">
	
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	
	@include('layouts.partials.links')
	
    <!-- CSRF Token -->
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
	
	@yield('links')
</head>
<body class="sidebar-mini layout-fixed">

	<div class="wrapper">

		@include('layouts.partials.header')

		@include('layouts.partials.sidebar')

		<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
		    <div class="content-header">
			  <div class="container-fluid">
				<div class="row mb-2">
				  <div class="col-sm-6">
					<h1 class="m-0 text-dark">@yield('content-header')</h1>
				  </div><!-- /.col -->
				  <div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
				    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-connectdevelop "></i> Home</a></li>
					@yield('breadcrumb')
					</ol>
				  </div><!-- /.col -->
				</div><!-- /.row -->
			  </div><!-- /.container-fluid -->	
		    </div>

			@yield('content')

		</div>

		@include('layouts.partials.footer')

	</div>
	<!-- ./wrapper -->

	@include('layouts.partials.scripts')

	@yield('scripts')
	
</body>
</html>