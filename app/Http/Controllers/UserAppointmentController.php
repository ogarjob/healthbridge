<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserAppointmentController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('view', $user);

        $appointments = $user->appointments->load('user', 'transactions')->sortByDesc('id');

        return view('appointments.index', compact('appointments'));
    }
}
