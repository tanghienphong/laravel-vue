<?php
$namespace = 'App\Modules\Product\Controllers';

Route::group(
    ['module' => 'Product', 'prefix' => 'api' , 'namespace' => $namespace],
    function () {
        Route::get('categories', 'HomeController@categories');
        Route::get('popular-products', 'HomeController@popularProducts');
        Route::get('products-by-cate', 'HomeController@productsByCate');
    }
);
