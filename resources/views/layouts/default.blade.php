<!DOCTYPE HTML>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body class="skin-black">
	<div class="wrapper">
		@include('includes.header')
		@include('includes.sidebar')
		@yield('content')
		@yield('contentHeader')
		@include('includes.footer')
	</div>
</body>
@include('includes.jsOptimize')
</html>