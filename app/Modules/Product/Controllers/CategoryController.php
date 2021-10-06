<?php

namespace App\Modules\Product\Controllers;

use App\Modules\Product\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
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

    public function index(Request $request)
    {
        $model = Category::all();
        return response()->json($model, 200);
//        return view('Product::category.index');
    }
}
