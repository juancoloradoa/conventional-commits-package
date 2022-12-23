<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return \view('users.index', compact('users'));
    }

    public function edit(User $user): View
    {
        return \view('users.edit', compact('user'));
    }
}
