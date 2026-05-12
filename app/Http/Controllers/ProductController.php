<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\storeProductRequest;
use App\Http\Requests\UpdateProductRequest;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }
    public function store(storeProductRequest $request)
    {
        $product = Product::create($request->validated());
        return response()->json($product);
    }
    public function show(int $id)
    {
        $product=Product::findOrFail($id);
        return response()->json($product);
    }
    public function update(UpdateProductRequest $request, int $id)
    {
        $product=Product::findOrFail($id);
        $product->update($request->validated());
        return response()->json($product);
    }
    public function destroy(int$id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return response()->json($product);
    }
}
