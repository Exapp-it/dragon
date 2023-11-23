<?php

namespace App\Http\Controllers\Admin;

use App\Data\Admin\LoginData;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Admin/Login', [
            'title' => __('Admin Login')
        ]);
    }

    public function store(LoginData $data)
    {
        if (Auth::guard('admin')->attempt($data->toArray())) {
            return redirect()->route('admin');
        }

        return Inertia::render('Admin/Login', [
            'title' => __('Admin Login'),
            'errors' => ['message' => __('Неправильный Логин или пароль')],
        ]);
    }

    public function destroy(Request $request): RedirectResponse
    {
        auth()->guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
