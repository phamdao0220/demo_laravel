<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends BookController
{
    function homeAdmin()
    {
        return view('layouts.home');
    }

    function homeUser()
    {
        $books = $this->bookService->getAll();
        return view('front_end.home', compact('books'));
    }
}
