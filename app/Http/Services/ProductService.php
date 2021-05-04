<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-19
 * Time: 16:33
 */

namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class ProductService extends BaseService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    function getAll()
    {
        return $this->productRepo->getAll();
    }

    function getById($id)
    {
        return $this->productRepo->findById($id);
    }

    function store($request)
    {
        $product = $this->productRepo->getInstance();
        $product->fill($request->all());
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('products', 'public');
            $product->avatar = $path;
        }
        $this->productRepo->store($product);
    }

    function update($request)
    {
        $product = $this->productRepo->findById($request->id);
        $product->fill($request->all());
        if ($request->hasFile('avatar'))
        {
            $path = $request->file('avatar')->store('products', 'public');
            $product->avatar = $path;

        }
        $this->productRepo->update($product);

    }

    function delete($id)
    {
        $product=$this->productRepo->findById($id);
        $product->delete();
//        return back();
    }
}
