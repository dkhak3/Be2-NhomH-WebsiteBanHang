<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $product = DB::table('products')->paginate(3);
          
        return view('product.index', compact('product'));//->with('index',$product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Product::create($request->all());
        // return redirect()->view('product.index');
        $validatedData = $request->validate([
            // 'product_photo' => 'required|image', 
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'required',
        ]);
        // Handle the uploaded photo
        if ($request->hasFile('product_photo')) {
            $photo = $request->file('product_photo');
            $photoPath = $photo->store('public');
            $validatedData['product_photo'] = $photoPath;
        }
        $get_img = $request->file('product_photo');
        $validatedData['product_photo'] = $get_img->getClientOriginalName();
        $get_img->move("img/products", $get_img->getClientOriginalName());
        
    
        // Create a new product with the validated data
        Product::create($validatedData);
    
        // Redirect the user or display a success message
        // For example, redirecting back to the product listing page:
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $validatedData = $request->validate([
            'product_photo' => 'required|image|max:2048', // Add image validation rules
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'required',
        ]);
        // Handle the uploaded photo
        if ($request->hasFile('product_photo')) {
            $photo = $request->file('product_photo');
            $photoPath = $photo->store('public');
            $validatedData['product_photo'] = $photoPath;
        }
        $get_img = $request->file('product_photo');
        $validatedData['product_photo'] = $get_img->getClientOriginalName();
        $get_img->move("img/products", $get_img->getClientOriginalName());
        DB::table('products')->where("id", $id)->update(['product_name' => $validatedData['product_name']]);
        DB::table('products')->where("id", $id)->update(['product_price' => $validatedData['product_price']]);
        DB::table('products')->where("id", $id)->update(['product_description' => $validatedData['product_description']]);
        //DB::table('products')->where("id", $id)->update(['type' => $validatedData['type']]);
        DB::table('products')->where("id", $id)->update(['product_photo' => $validatedData['product_photo']]);
        
        return redirect()->route('index');
    }

    function editScreenProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->get();
        return view("product.edit")->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product  $product)
    {
        $product->update($request->all());
        return redirect()-view('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
     function destroy($id)
    {
        DB::table("products")->where("id",$id)->delete();
        return redirect()->route('index');
    }

    public function search(Request $request){
        $product = Product::WHERE('product_name','like','%'. $request->search.'%')
        ->orWHERE('product_price',$request->search)->get();
        return view('product.search', compact('product'));
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
