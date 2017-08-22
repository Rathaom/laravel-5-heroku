<!DOCTYPE html>
<html>
<head>
	<title></title>
	{!!Html::style('libraries/css/font-awesome.min.css')!!}
	<!-- {!!Html::style('libraries/css/select2.min.css')!!} -->

	{!!Html::style('libraries/css/etalage.css')!!}
	{!!Html::style('libraries/css/form.css')!!}
	{!!Html::style('libraries/css/megamenu.css')!!}
	{!!Html::style('libraries/css/style.css')!!}
	{!!Html::style('libraries/css/bootstrap.min.css')!!}

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


	@yield('content')

	{!!Html::script('libraries/js/jquery.min.js')!!}
	<!-- {!!Html::script('libraries/js/bootstrap.min.js')!!} -->
	<!-- {!!Html::script('libraries/js/select2.min.js')!!} -->
	<!-- {!!Html::script('libraries/js/underscore.js')!!} -->

	{!!Html::script('libraries/js/megamenu.js')!!}
	{!!Html::script('libraries/js/move-top.js')!!}
	{!!Html::script('libraries/js/easing.js')!!}
	{!!Html::script('libraries/js/jquery.wmuSlider.js')!!}
	{!!Html::script('libraries/js/jquery.etalage.min.js')!!}
	{!!Html::script('libraries/js/jquery.flexisel.js')!!}
	{!!Html::script('libraries/js/jquery.jscrollpane.min.js')!!}

	@yield('script')
</body>
</html>