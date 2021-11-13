<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    //    Artisan::call('cache:clear');
    Cache::flush();
    $views = storage_path('framework/views');
    $fileList = glob($views . '/*');
    foreach ($fileList as $filename) {
        //Simply print them out onto the screen.
        if (is_file($filename)) {
            unlink($filename);
        }
    }
    return redirect('/');
});

Route::get('/', [\App\Http\Controllers\FrontEndController::class, 'index'])->name('front-end');
Route::get('/{slug}.html', '\App\Http\Controllers\FrontEndController@product')->name('front-end.product');
Route::get('/{category}', '\App\Http\Controllers\FrontEndController@category')->name('front-end.category');

// Route::get('/laptop', function () {
//     return view('laptop');
// });

// Route::get('/user-dashboard', function () {
//     return view('learning.demo-user');
// });

// Route::get('/learning', function () {
//     return view('learning.learning');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
