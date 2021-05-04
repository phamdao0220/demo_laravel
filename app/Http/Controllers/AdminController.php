<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddRequest;
use App\Http\Services\RoleService;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use mysql_xdevapi\Session;

class AdminController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }


    public function loginAdmin()
    {

        return view('login');
    }

    function postLoginAdmin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('homeAdmin');
        } else {
            Session::flash('error', 'email or password not correct');
            return back();
        }

    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function registration()
    {
        $roles = $this->roleService->getAll();
        return view('registration', compact('roles'));
    }

    public function postRegistration(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return view('login');
    }
}
