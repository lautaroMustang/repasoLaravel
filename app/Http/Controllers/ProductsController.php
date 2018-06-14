<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
      $products=\App\Product::all();
      $variables=[
        "products"=>$products,
      ];
      return view('products.index',$variables);
    }

    public function show($id)
    {
      $product=\App\Product::find($id);
      $variables=["product"=>$product,];
      return view ('products.show', $variables);
    }
}
