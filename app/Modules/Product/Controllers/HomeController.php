<?php

namespace App\Modules\Product\Controllers;

use App\Modules\Product\Models\Category;
use App\Modules\Product\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
        return $model;
        return response()->json($model, 200);
//        return view('Product::category.index');
    }

    public function productsByCate(Request $request)
    {
        $model = Product::orderBy('created_at', 'desc')->paginate(2);
        return $model;
//        return view('Product::category.index');
    }
}
