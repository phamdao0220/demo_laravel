<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepository;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {

        $products = $this->productService->getAll();

        return view('back-end.products.list', compact('products'));
    }

    public function add()
    {
        return view('back-end.products.add');
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('list.product');
    }

    public function edit($id)
    {

        $product = $this->productService->getById($id);
        return view('back-end.products.edit', compact('product'));
    }

    public function update( Request $request)
    {
        $this->productService->update($request);

        return redirect()->route('list.product');
    }

    public function delete($id)
    {
        $this->productService->delete($id);
        return redirect()->route('list.product');
    }
}
