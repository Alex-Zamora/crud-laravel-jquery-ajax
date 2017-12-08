<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::orderBy('id', 'DESC')->paginate();
    	// dd($products);
    	return view('products.index', compact('products'));
    }

    public function show($id)
    {
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
    	$product = Product::find($id);
    	$product->delete();

    	//Regresamos a la misma página retornando un mensaje
    	return back()->with('info', 'El producto fue eliminado');
    }

    public function create()
    {
    	return view('products.create');
    }

    public function store(ProductRequest $request)
    {
    	//Crea una instancia, toma los campos de la tabla product
    	//$product = Product::create($request->only('name', 'short', 'body'));
    	$product = new Product;

    	$product->name  = $request->name;
    	$product->short = $request->short;
    	$product->body  = $request->body;

    	$product->save();

    	return redirect()->route('products.show', $product->id)
    					->with('info', 'El producto fue guardado');
    }

    public function edit($id)
    {
    	$product = Product::find($id);
    	return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
    	// dd($request);
    	$product = Product::find($id);

    	$product->name  = $request->name;
    	$product->short = $request->short;
    	$product->body  = $request->body;

    	$product->save();

    	return redirect()->route('products.index')
    					->with('info', 'El producto fue actualizado');
    }

}
