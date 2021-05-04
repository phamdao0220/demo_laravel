<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-23
 * Time: 13:50
 */

namespace App\Http\Repositories;


use App\Models\Book;
use http\Env\Request;

class BookRepository extends Repository
{
    public function getAll()
    {
        return Book::all();
    }

    public function getInstance()
    {
        return new Book();
    }

    public function store($book)
    {
        $book->save();
    }

    public function findById($id)
    {
        return Book::findOrFail($id);
    }

    public function update($book)
    {
        $book->update();
    }
}
