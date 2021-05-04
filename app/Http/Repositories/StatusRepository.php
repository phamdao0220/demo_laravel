<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-26
 * Time: 08:57
 */

namespace App\Http\Repositories;


use App\Models\Status;

class StatusRepository extends Repository
{
    function getAll()
    {
        return Status::all();
    }

    function getInstance()
    {
        return new Status();
    }

    function store($status)
    {
        $status->save();
    }

    function findById($id)
    {
        return Status::findOrFail($id);
    }

    function update($status)
    {
        $status->update();
    }
}
