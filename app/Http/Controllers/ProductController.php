<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('index', ['productLists' => DB::table('products')->simplePaginate(8)
                            ,'categoryLists' => json_decode(DB::table('categories')->get())
                            ,'user' => Auth::user()]);
    }

    public function search(Request $request)
    {
        $data = $request->input('search');
        return view('index', ['productLists' => DB::table('products')->where('product_name', 'LIKE', "%{$data}%")->simplePaginate(8)
                            ,'categoryLists' => json_decode(DB::table('categories')->get())
                            , 'user' => Auth::user()]);
    }

    public function viewProduct($productId)
    {
        $info = json_decode(DB::table('products')
        ->join('products_categories', 'products.id', '=', 'products_categories.product_id')
        ->join('categories', 'products_categories.category_id', '=', 'categories.id')
        ->where('products.id', '=', "{$productId}")
        ->select('products.*', 'categories.category_name')
        ->get())[0];
        return view('product', ['productInfo' => $info
                                ,'user' => Auth::user()]);
    }

    public function getProductByCategory($categoryId)
    {
        return view('index', ['productLists' => DB::table('products')->join('products_categories', 'products.id', '=', 'products_categories.product_id')->where('products_categories.category_id', '=', "{$categoryId}")->select('products.*')->simplePaginate(8)
                            ,'categoryLists' => json_decode(DB::table('categories')->get())
                            ,'user' => Auth::user()]);
    }
}
