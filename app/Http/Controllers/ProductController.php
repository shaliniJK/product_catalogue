<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repository\ProductRepository;

class ProductController extends Controller
{
    /**
     * List all products in the catalogue
     */
    public function index()
    {
        $products = ProductRepository::findAll();

        return view('products.index')->with(compact('products'));
    }

    /**
     * Display the details of the given product
     *
     * @param Product $product
     */
    public function show($product)
    {
        return view('products.show', [
            'product' => ProductRepository::findOne($product),
        ]);
    }
}
