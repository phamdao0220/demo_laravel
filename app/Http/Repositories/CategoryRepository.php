<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-26
 * Time: 08:56
 */

namespace App\Http\Repositories;


use App\Models\Category;

class CategoryRepository extends Repository
{
    function getAll()
    {
        return Category::all();
    }

    function getInstance()
    {
        return new Category();
    }

    function store($category)
    {
        $category->save();
    }

    function findById($id)
    {
        return Category::findOrFail($id);
    }

    function update($category)
    {
        $category->update();
    }
}
