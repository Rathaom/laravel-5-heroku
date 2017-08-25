<?php 

	Route::get('product-detail/{productId}', ['uses' => 'ProductController@detail', 'as' => 'product.detail']);