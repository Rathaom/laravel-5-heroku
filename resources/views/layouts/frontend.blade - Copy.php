@extends('layouts.master')

@section('content')


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Phone Shop</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				@foreach($allCategory as $CategoryName => $category)
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="ClickCategory('/category/{{$CategoryName}}')" role="button" aria-haspopup="true" aria-expanded="false">{{$CategoryName}} 
						@if(count($category) > 0)
						<span class="caret"></span>
						@endif
					</a>
					@if(count($category) > 0)
					<ul class="dropdown-menu">
						@foreach($category as $subCategory)
						<li><a href="/sub-category/{{$subCategory->sc_id}}">{{$subCategory->sc_name}}</a></li>
						@endforeach
					</ul>
					@endif
				</li>
				@endforeach
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<br>
<br>
<br>
<div class="container">
	@yield('frontend.content')
</div>

@endsection

@section('script')
	
	<script type="text/javascript">

		$('.dropdown').hover(
			function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            }
		);

		function ClickCategory($url){
			location.href = $url;
		}
	</script>

	@yield('frontend.script')

@endsection
