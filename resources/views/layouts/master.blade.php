<!DOCTYPE html>
<html>
<head>
	<title></title>
	{!!Html::style('libraries/css/bootstrap.min.css')!!}
	{!!Html::style('libraries/css/font-awesome.min.css')!!}
	{!!Html::style('libraries/css/select2.min.css')!!}
</head>
<body>


	@yield('content')

	{!!Html::script('libraries/js/jquery-3.2.0.min.js')!!}
	{!!Html::script('libraries/js/bootstrap.min.js')!!}
	{!!Html::script('libraries/js/select2.min.js')!!}
	{!!Html::script('libraries/js/underscore.js')!!}

	@yield('script')
</body>
</html>