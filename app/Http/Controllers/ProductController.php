<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::with('licenses')->get(); //preventing n+1 problem
        return ProductResource::collection($products);
    }
}
