<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $product = new Product();
        $product -> name = $request -> name;
        $product -> price = $request -> price;
        $product -> description = $request -> description;
        $product -> image_link = $request -> image_link;
        $product -> category_id = $request -> category_id;
        $product -> status = 'public';
        $product -> save();

        return response([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product -> price,
            'description'=> $product -> description,
            'image_link'=>$product -> image_link = $request ,
            'category_id'=>$product -> category_id,
            'status'=> $product -> status
        ]);
    }

    public function index()
    {
        $products = Product::all();

        return response(['data'=>$products]);
    }
}
