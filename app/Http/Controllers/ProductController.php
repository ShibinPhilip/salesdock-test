<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Get list of products
     *
     * @author Shibin Philip
     *
     * @param  App\Repositories\ProductRepository $product
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(ProductRepository $product)
    {
        $products = $product->getList();
        return response()->json($products);
    }
}
