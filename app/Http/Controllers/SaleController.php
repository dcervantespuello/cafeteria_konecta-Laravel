<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('sales.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $stock = $request->stock;
        $sold = $request->sold;
        $stock -= $sold;

        $product_id = $product->id;
        $product = Product::find($product_id);

        $product->where('id', $product_id)->update(['stock' => $stock]);

        Sale::create(['product_id' => $product_id, 'sold' => $sold]);

        return redirect()->route('products.index');
    }
}
