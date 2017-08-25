@extends('layouts.frontend')

@section('frontend.content')
<style type="text/css">
	.pagination li.active a, .pagination li.active span{
		border: solid 1px #3e4347;
	    background: #3e4347!important;
	    box-shadow: inset 0px 1px 1px rgba(255,255,255, .1), 0px 1px 3px rgba(0,0,0, .1);
	    color: #feffff;
	    text-shadow: 0px 1px 0px rgba(0,0,0, .5);
	    margin: 5px!important;
	}

	.pagination li.disabled a, .pagination li.disabled span{
		border: solid 1px gray;
	    background: gray!important;
	    color: black;
	    box-shadow: inset 0px 1px 1px rgba(255,255,255, .1), 0px 1px 3px rgba(0,0,0, .1);
	    text-shadow: 0px 1px 0px rgba(0,0,0, .5);
	    margin: 5px!important;
	}

	.pagination li a, .pagination li span{
		border: solid 1px #e9e9e9;
	    background: #e9e9e9;
	    color: black;
	    box-shadow: inset 0px 1px 1px rgba(255,255,255, .1), 0px 1px 3px rgba(0,0,0, .1);
	    text-shadow: 0px 1px 0px rgba(0,0,0, .5);
	    margin: 5px!important;
	}

</style>
	<div class="main">
		<div class="wrap">
			<div class="content-bottom">
				<!-- <div class="box1"> -->
				@foreach ($Products as $product)
					<div class="col_1_of_3 span_1_of_3">
						<a href="/product-detail/{{$product->p_id}}">
							<div class="view view-fifth">
								<div class="top_box">
									<h3 class="m_1">{{$product->title}}</h3>
									<p class="m_2">{{$product->content}}</p>
									<div class="grid_img">
										<div class="css3"><img src="{{$product->photo}}" alt=""/></div>
										<div class="mask">
											<div class="info">Quick View</div>
										</div>
									</div>
									<div class="price">${{$product->price}}</div>
								</div>
							</div>
							<ul class="list">
								<li style="margin-left: 17%">
									<img src="images/plus.png" alt=""/>
									<ul class="icon1 sub-icon1 profile_img">
										<li><a class="active-icon c1" href="#">Add To Bag </a>
											<ul class="sub-icon1 list">
												<li><h3>sed diam nonummy</h3><a href=""></a></li>
												<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
							<div class="clear"></div>
						</a>
					</div>
				@endforeach
					<div class="clear"></div>
				<!-- </div> -->
				<div class="text-center">
					{{$Products->links()}}
				</div>
			</div>
		</div>
	</div>
@endsection

@section('frontend.script')

@endsection