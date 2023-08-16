<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $appointments         = user()->isAdmin() ? Appointment::take(50)->get() : user()->appointments;
        $patients_count       = User::patient()->count();
        $administrators_count = User::admin()->count();
        $departments_count    = Department::count();
        $appointments_count   = Appointment::count();

        return view('dashboard.index',
            compact(['appointments', 'patients_count', 'departments_count', 'appointments_count', 'administrators_count'])
        );
    }
}
