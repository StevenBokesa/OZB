<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function fetchProducts()
    {
        $data = ProductResource::collection(Product::all());
        return response()->json($data);
    }
}
