<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-23
 * Time: 14:57
 */

namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;
use http\Env\Request;

class CategoryServices extends BaseService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;

    }

    function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    function store($request)
    {
        $category = $this->categoryRepo->getInstance();
        $category->name = $request->name;
        return $this->categoryRepo->store($category);
    }

    function update($request)
    {
        $category = $this->categoryRepo->findById($request);
        $category->name = $request->name;
        return $this->categoryRepo->update($category);
    }

    function getById($id)
    {
        return $this->categoryRepo->findById($id);
    }

    function delete($id)
    {
        $category = $this->categoryRepo->findById($id);
        $category->delete();
    }
}
