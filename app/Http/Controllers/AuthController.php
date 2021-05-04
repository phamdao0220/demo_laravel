<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authRepo;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepo=$authRepository;

    }

















}
