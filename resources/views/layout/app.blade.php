<!DOCTYPE html>
<html lang="en">
<head>
	<title>FindAGif - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
<script type="text/javascript" src="{{URL::to('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>

</body>
</html>