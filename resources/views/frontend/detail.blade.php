@extends('layouts.frontend')
<br>
@section('frontend.content')
	{!!Html::style('css/style-detail.css')!!}

        <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div class="flexslider">
                      <ul class="slides">
                      	@foreach($photos->slice(0, 4) as $photo)
                        <li data-thumb="{{$photo->photo_path}}">
                            <div class="thumb-image"> <img src="{{$photo->photo_path}}" class="img-responsive"> </div>
                        </li>
                        @endforeach
                 </ul>
                 <div class="clearfix"></div>
             </div>
         </div>
         <div class="col-md-4 showcase">
            <div class="showcase-rt-top">
                <div class="pull-left shoe-name">
                    <h3>{{$mainProduct[0]->title}}</h3>
                    <!-- <p>Men's running shoes</p> -->
                    <h4>&#36;{{$mainProduct[0]->price}}</h4>
                </div>
                <div class="pull-left rating-stars">
                    <ul>
                        <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                        <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                        <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr class="featurette-divider">
            <div class="shocase-rt-bot">
                <div class="float-qty-chart">
                    <ul>
                        <li class="qty">
                            <h3>Size Chart</h3>
                            <select class="form-control siz-chrt">
                              <option>6 US</option>
                              <option>7 US</option>
                              <option>8 US</option>
                              <option>9 US</option>
                              <option>10 US</option>
                              <option>11 US</option>
                          </select>
                      </li>
                      <li class="qty">
                        <h4>QTY</h4>
                        <select class="form-control qnty-chrt">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                      </select>
                  </li>
              </ul>
              <div class="clearfix"></div>
          </div>
          <ul>
            <li class="ad-2-crt simpleCart_shelfItem">
                <a class="btn item_add" href="#" role="button">Add To Cart</a>
                <a class="btn" href="#" role="button">Buy Now</a>
            </li>
        </ul>
    </div>
    <div class="showcase-last">
        <h3>product details</h3>
        <ul>
            {{$mainProduct[0]->content}}
        </ul>
    </div>
</div>
<div class="clearfix"></div>


<br>
<h3 class="you-might">Products You May Like</h3>
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
</div>
</div>
@endsection

@section('frontend.script')
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
    	$('.flexslider').flexslider({
    		animation: "slide",
    		controlNav: "thumbnails"
    	});
    });
</script>
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
@endsection