<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{
    /**
     * @return Response
     */
    public function login(): Response
    {
        return Inertia::render('Admin/Login', [
            'title' => __('Admin Login')
        ]);
    }

    public function store(AdminLoginRequest $request)
    {
        dd($request);
    }
}
