<?php

namespace App\Http\Repositories;


use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class ProductRepository extends Repository
{
    function getAll()
    {
        return Product::all();

    }

    function getInstance()
    {
        return new Product();
    }


    function findById($id)
    {
        return Product::findOrFail($id);
    }
    function store($product)
    {
        $product->save();
    }

    function update($product)
    {
        $product->update();
    }
}
