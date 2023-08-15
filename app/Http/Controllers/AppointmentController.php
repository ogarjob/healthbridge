<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Event;
use App\Models\Status;
use App\Models\User;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Appointment::class);
    }

    public function index()
    {
        $appointments = Appointment::with('transactions')->latest()->get();

        return view('appointments.index', compact('appointments'));
    }

    public function show(Appointment $appointment)
    {
        $status = Status::where('sequence', '>', $appointment->status->last()?->sequence ?? 0)->get();

        return view('appointments.show', compact('appointment', 'status'));
    }
}
