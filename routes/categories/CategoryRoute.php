<?php 

	Route::get('/category/{categoryName}', ['uses' => 'CategoryController@byCategory', 'as' => 'get.by.category']);
	Route::get('/sub-category/{subCategoryId}', ['uses' => 'CategoryController@bySubCategory', 'as' => 'get.by.subcategory']);