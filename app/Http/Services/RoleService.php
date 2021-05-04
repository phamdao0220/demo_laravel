<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-27
 * Time: 15:26
 */

namespace App\Http\Services;


use App\Http\Repositories\RoleRepository;

class RoleService extends BaseService
{
    protected $roleRepo;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepo = $roleRepository;

    }

    function getAll()
    {
        return $this->roleRepo->getAll();
    }

    function store($request)
    {
        $roles = $this->roleRepo->getInstance();
        $roles->name = $request->name;
        $this->roleRepo->store($roles);
    }
}
