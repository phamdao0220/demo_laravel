<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-23
 * Time: 14:57
 */

namespace App\Http\Services;


use App\Http\Repositories\Repository;
use App\Http\Repositories\StatusRepository;

class StatusService extends BaseService
{
    protected $statusRepo;

    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepo = $statusRepository;
    }

    function getAll()
    {
        return $this->statusRepo->getAll();
    }

    function store($request)
    {
        $status = $this->statusRepo->getInstance();
        $status->name = $request->name;
        return $this->statusRepo->store($status);
    }

    function update($request)
    {
        $status = $this->statusRepo->findById($request);
        $status->name = $request->name;
        return $this->statusRepo->update($status);
    }

    function getById($id)
    {
        return $this->statusRepo->findById($id);
    }

    function delete($id)
    {
        $status = $this->statusRepo->findById($id);
        $status->delete();
    }
}
