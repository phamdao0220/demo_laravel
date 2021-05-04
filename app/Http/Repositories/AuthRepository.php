<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-26
 * Time: 08:57
 */

namespace App\Http\Repositories;


use App\Models\Auth;
use App\Models\Book;

class AuthRepository extends Repository
{
    function getAll()
    {
        return Auth::all();
    }

    function getInstance()
    {
        return new Auth();
    }

    function store($auth)
    {
        $auth->save();
    }

    function findById($id)
    {
        return Book::findOrFail($id);
    }

    function update($auth)
    {
        $auth->update();
    }
}
