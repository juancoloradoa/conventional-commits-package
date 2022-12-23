<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return \view('users.index', compact('users'));
    }

    public function store(): RedirectResponse
    {
        return redirect()->route('user.index');
    }
}
