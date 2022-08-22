<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsApiController extends Controller
{
    public function index() {
        $products = Product::all();
        return response()->json(['message' => 'success','data' => $products]);
    }

    public function show($id) {
        $product = Product::find($id);
        return response()->json(['message' => 'success','data' => $product]);
    }

    public function store(Request $request) {
        $product = Product::create($request->all());
        return response()->json(['message' => 'insert data has been inserted success','data' => $product]);
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['message' => 'success update','data' => $product]);
    }
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'success delete','data' => null]);
    }
}
