<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-27
 * Time: 15:00
 */

namespace App\Http\Repositories;


use App\Models\Role;

class RoleRepository extends Repository
{
    function getAll()
    {
        return Role::all();
    }

    function getInstance()
    {
        return new Role();
    }

    function findById($id)
    {
        return Role::findOrFail($id);
    }

    function store($roles)
    {
        $roles->save();
    }


}
