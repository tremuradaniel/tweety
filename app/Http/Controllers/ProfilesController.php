<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()), 404);
        $this->authorize('edit', $user);
        return view('profile.edit', compact('user'));
    }
}
