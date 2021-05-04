<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-19
 * Time: 16:39
 */

namespace App\Http\Services;


class BaseService
{
    function updateLoadFile($request, $key, $nameFolder)
    {
        return $request->file($key)->store($nameFolder, 'public');
    }
}
