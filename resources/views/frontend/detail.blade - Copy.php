@extends('layouts.frontend')

@section('frontend.content')
<style type="text/css">
	.span_1_of_a1{
		width: 39.2%!important;
	}
	.span_2_of_a1 {
	    width: 57.1%;
	}
</style>
<div class="single">
	<div class="wrap">
		<div class="cont span_2_of_3" style="width: 100%!important">
			<div class="labout span_1_of_a1">
				<!-- start product_slider -->
				<ul id="etalage">
					@foreach($photos as $photo)
					<li>
						<!-- <img class="etalage_thumb_image" src="{{$photo->photo_path}}" /> -->
						<img class="etalage_source_image" src="{{$photo->photo_path}}" />
					</li>
					@endforeach
				</ul>


				<!-- end product_slider -->
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3">{{$mainProduct[0]->title}}</h3>

				<div class="price_single">
					<!-- <span class="reducedfrom">$66.00</span> -->
					<span class="actual">${{$mainProduct[0]->price}}</span><a href="#">click for offer</a>
				</div>
				<ul class="options">
					<h4 class="m_9">Select a Size</h4>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<div class="clear"></div>
				</ul>
				<div class="btn_form">
					<form>
						<input type="submit" value="buy now" title="">
					</form>
				</div>
				<ul class="add-to-links">
					<li><img src="/images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
				</ul>
				<p class="m_desc">{{$mainProduct[0]->content}}</p>

				<div class="social_single">	
					<ul>	
						<li class="fb"><a href="#"><span> </span></a></li>
						<li class="tw"><a href="#"><span> </span></a></li>
						<li class="g_plus"><a href="#"><span> </span></a></li>
						<li class="rss"><a href="#"><span> </span></a></li>		
					</ul>
				</div>
			</div>
			<div class="clear"></div>


			<ul id="flexiselDemo3">
				@foreach($products as $product)
				<li>
					<img src="{{$product->photo}}" onclick="window.location.href = '/product-detail/{{$product->p_id}}'"/>
					<div class="grid-flex">
						<a href="/product-detail/{{$product->p_id}}">{{$product->title}}</a>
						<p>${{$product->price}}</p>
					</div>
				</li>
				@endforeach
			</ul>
			<div class="toogle">
				<h3 class="m_3">Product Details</h3>
				<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
			</div>					
			<div class="toogle">
				<h3 class="m_3">Product Reviews</h3>
				<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

@endsection

@section('frontend.script')

<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel();
		$("#flexiselDemo2").flexisel({
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});

		$("#flexiselDemo3").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});

	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".dropdown img.flag").addClass("flagvisibility");

		$(".dropdown dt a").click(function() {
			$(".dropdown dd ul").toggle();
		});

		$(".dropdown dd ul li a").click(function() {
			var text = $(this).html();
			$(".dropdown dt a span").html(text);
			$(".dropdown dd ul").hide();
			$("#result").html("Selected value is: " + getSelectedValue("sample"));
		});

		function getSelectedValue(id) {
			return $("#" + id).find("dt a span.value").html();
		}

		$(document).bind('click', function(e) {
			var $clicked = $(e.target);
			if (! $clicked.parents().hasClass("dropdown"))
				$(".dropdown dd ul").hide();
		});


		$("#flagSwitcher").click(function() {
			$(".dropdown img.flag").toggleClass("flagvisibility");
		});
	});
</script>

<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<script>
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 480, //300480
			thumb_image_height: 360, //400360

			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});
		// This is for the dropdown list example:
		$('.dropdownlist').change(function(){
			etalage_show( $(this).find('option:selected').attr('class') );
		});

	});
</script>
<script type="text/javascript">
	$(document).ready(function() {

		var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});

	$(".etalage_thumb_image").hover(function(){
		console.log('Hello World');
	});
</script>
@endsection