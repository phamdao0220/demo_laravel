<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Repository;
use App\Http\Services\AuthService;
use App\Http\Services\BookService;
use App\Http\Services\CategoryServices;
use App\Http\Services\ProductService;
use App\Http\Services\StatusService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;
    protected $authService;
    protected $statusService;
    protected $categoryService;
    protected $productService;


    public function __construct(BookService $bookService, AuthService $authService, StatusService $statusService, CategoryServices $categoryServices,ProductService $productService)
    {
        $this->bookService = $bookService;
        $this->authService = $authService;
        $this->statusService = $statusService;
        $this->categoryService = $categoryServices;
        $this->productService = $productService;
    }

    public function index()
    {
        $books = $this->bookService->getAll();
        $auths = $this->authService->getAll();
        $status = $this->statusService->getAll();
        $categorys = $this->categoryService->getAll();
        $products = $this->productService->getAll();
        return view('back-end.books.list', compact('books', 'auths', 'status', 'categorys','products'));
    }

    public function add()
    {
        $auths = $this->authService->getAll();
        $status = $this->statusService->getAll();
        $categorys = $this->categoryService->getAll();
        $products = $this->productService->getAll();

        return view('back-end.books.add', compact('auths', 'status', 'categorys','products'));
    }

    public function store(Request $request)
    {
        $this->bookService->store($request);
        return redirect()->route('list.book');
    }

    public function edit($id)
    {
        $book = $this->bookService->getById($id);
        $categorys = $this->categoryService->getAll();
        $status = $this->statusService->getAll();
        $auths = $this->authService->getAll();
        $products = $this->product->getAll();
        return view('back-end.books.edit', compact('book', 'categorys', 'status', 'auths','products'));
    }

    public function update(Request $request)
    {

        $this->bookService->update($request);

        return redirect()->route('list.book');
    }

    function delete($id)
    {
        $this->bookService->delete($id);
        return redirect()->route('list.book');
    }
}
