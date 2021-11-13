<?php

namespace App\Http\Controllers;

use App\Modules\Product\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use MetaTag;
use Illuminate\Support\Facades\Cache;

class FrontEndController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //        $this->middleware('auth');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->_storage = Cache::store('file');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front-end.index');
    }


    public function category(Request $request)
    {
        $params = \Route::current()->parameters();
        // print_r($params);
        $categoryAlias = Arr::get($params, 'category', null);

        return $this->_storage->remember('category-' . $categoryAlias, config('properties.cache_times', 24 * 60 * 60), function () use ($categoryAlias) {
            // Get Cache Eloquent
            $model = $this->_storage->get('sql.category.' . $categoryAlias);
            if (!$model) {
                $model = Category::query()
                    ->selectRaw("id, title, slug, description, image, meta_title, meta_description, meta_keyword")
                    ->where('status', '1')
                    ->where('slug', '=', $categoryAlias)->first();

                // set Cache Eloquent
                $this->_storage->put('sql.category.' . $categoryAlias, $model, 86400);
            }

            if ($model) {
                MetaTag::set('title', $model->meta_title);
                MetaTag::set('keywords', $model->meta_keyword);
                MetaTag::set('description', $model->meta_description);
                MetaTag::set('og:title', $model->meta_title);
                MetaTag::set(
                    'og:image',
                    ($model->image) ? url($model->image) : url("/storage/app/uploads/no-image.png")
                );
                return view('front-end.category', [
                    'model' => $model,
                ])->render();
            }
            return abort(404);
        });
    }

    public function product(Request $request)
    {
        $params = \Route::current()->parameters();
        // print_r($params);
        $productAlias = Arr::get($params, 'slug', null);

        return $this->_storage->remember('product-' . $productAlias, config('properties.cache_times', 24 * 60 * 60), function () use ($productAlias) {
            // Get Cache Eloquent
            $model = $this->_storage->get('sql.product.' . $productAlias);
            if (!$model) {
                $query = Product::query()
                    ->selectRaw("id, name, image, meta_title, meta_description, meta_keyword")
                    ->where('status', '1')
                    ->where('slug', '=', $productAlias);

                $model = $query->first();

                // set Cache Eloquent
                $this->_storage->put('sql.product.' . $productAlias, $model, 86400);
            }
            if ($model) {
                MetaTag::set('title', $model->meta_title);
                MetaTag::set('keywords', $model->meta_keyword);
                MetaTag::set('description', $model->meta_description);
                MetaTag::set('og:title', $model->meta_title);
                MetaTag::set(
                    'og:image',
                    ($model->image) ? url($model->image) : url("/storage/app/uploads/no-image.png")
                );
                return view('front-end.product', [
                    'model' => $model,
                ])->render();
            }
            return abort(404);
        });
    }
}
