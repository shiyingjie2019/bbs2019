<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('styles/reset.css')}}" />
	<link rel="stylesheet" href="{{asset('styles/layout.css')}}" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.css" />
</head>
<body>
	<div id='container'>
		@section('content')
		@show
	</div>
</body>
</html>