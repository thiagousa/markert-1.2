<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    protected $products;

    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        $pageTitle = 'Products';

        $products = $this->products->limit(20)->orderBy('ProductID', 'DESC')->get();

        return view('products.index')->with(compact('pageTitle', 'products'));
    }

    public function add(Request $request)
    {
        try{
            $product = new $this->products;
            $product->ProductID = $request->productID;
            $product->ProductName = $request->productName;
            $product->save();
        }
        catch(\Exception $e){
            return $e->getMessage();
        }

        return redirect(route('productList'));
    }

    public function edit(Request $request)
    {
        try{
            $product = $this->products->find($request->RegID);
            $product->ProductID = $request->productID;
            $product->ProductName = $request->productName;
            $product->save();
        }
        catch(\Exception $e){
            return $e->getMessage();
        }

        return redirect(route('productList'));
    }

    public function delete($regID)
    {
        try{
            $product = $this->products->find($regID)->delete();
        }
        catch(\Exception $e){
            return $e->getMessage();
        }

        return redirect(route('productList'));
    }
}
