<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentStatusRequest;
use App\Models\Appointment;
use Illuminate\Http\Response;

class AppointmentStatusController extends Controller
{
    public function store(StoreAppointmentStatusRequest $request, Appointment $appointment)
    {
        $appointment->status()->attach($request->validated());

        return Response::api('Saved Successfully');
    }
}
