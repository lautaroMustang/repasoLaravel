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
      $variables=[
        "product"=>$product,
        "category"=>$product->category,
        "properties"=>$product->properties
    ];
      return view ('products.show', $variables);
    }

    public function create()
    {
      $categories=\App\Category::all();
      $variables=[
        "categories"=>$categories,
      ];
      return view('products.create',$variables);
    }

    public function store(Request $request)
    {
      $rules=[
        "name"=>"required|unique:products",
        "cost"=>"required|numeric",
        "profit_margin"=>"required|numeric",
        "category_id"=>"required|numeric|between:1,3"
      ];

      $messages=[
        "required"=>"El :attribute es requerido!",
        "unique"=>"El :attribute tiene que ser único",
        "numeric"=>"el :attribute tiene que se numérico",
        "between"=>"el :attribute tiene que estar entre :min y :max"
      ];

      $request->validate($rules,$messages);
      $producto = \App\Product::create([
        'name'=>$request->input('name'),
        'cost'=>$request->input('cost'),
        'profit_margin'=>$request->input('profit_margin'),
        // 'category_id'=>$request->input('category_id')
      ]);
      $category=\App\Category::find($request->input('category_id'));
      $product->category()->associate($category);
      $product->save();

      return redirect('/productos');
    }
}
