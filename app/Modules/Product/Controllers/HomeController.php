<?php

namespace App\Modules\Product\Controllers;

use App\Modules\Product\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;



class HomeController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        # parent::__construct();
    }

    public function categories(Request $request)
    {
        $model = Category::all();
        return response()->json($model, 200);
        //        return view('Product::category.index');
    }

    public function popularProducts(Request $request)
    {
        $model = Product::orderBy('created_at', 'desc')->get();
        //        return $model;
        return response()->json($model, 200);
        //        return view('Product::category.index');
    }

    public function productsByCate(Request $request)
    {
        $query = Product::query();
        if ($request->has('filter_brand') && $request->filter_brand != "") {
            $arr = explode(",", $request->filter_brand);
            if (count($arr) > 0) {
                $query->whereIn('brand_id', $arr);
            }
        }
        $model = $query->orderBy('created_at', 'desc')->paginate(2);
        return $model;
        //        return view('Product::category.index');
    }

    public function filterBrand(Request $request)
    {
        $model = [
            '1' => 'Dell',
            '2' => 'HP',
            '3' => 'Acer'
        ];
        return response()->json($model, 200);
    }

    public function productBySlug(Request $request)
    {
        if ($request->has('slug') && $request->slug != "") {
            $productAlias = $request->slug;
            $query = Product::query()
                    ->selectRaw("id, name, sku, image, teaser, description, price, discount")
                    ->where('status', '1')
                    ->where('slug', '=', $productAlias);

                $model = $query->first();
                return $model;
        }        
        return [];
        //        return view('Product::category.index');
    }
}
