<?php
$namespace = 'App\Modules\Product\Controllers';

Route::group(
    ['module' => 'Product', 'prefix' => 'api' , 'namespace' => $namespace],
    function () {
        Route::get('category', 'CategoryController@index');
    }
);
