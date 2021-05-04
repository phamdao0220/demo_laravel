<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-23
 * Time: 14:54
 */

namespace App\Http\Services;


use App\Http\Repositories\AuthRepository;
use http\Env\Request;

class AuthService extends BaseService
{
    protected $authRepo;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepo = $authRepository;
    }

    function getAll()
    {
        return $this->authRepo->getAll();
    }

    function store($request)
    {
        $auth = $this->authRepo->getInstance();
        $auth->name = $request->name;
        return $this->authRepo->store($auth);
    }

    function update($request)
    {
        $auth = $this->authRepo->findById($request);
        $auth->name = $request->name;
        return $this->authRepo->update($auth);
    }

    function getById($id)
    {
        return $this->authRepo->findById($id);
    }

    function delete($id)
    {
        $auth = $this->authRepo->findById($id);
        $auth->delete();
    }
}
