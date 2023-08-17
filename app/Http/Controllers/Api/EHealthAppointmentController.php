<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class EHealthAppointmentController extends Controller
{
    public function store(StoreAppointmentRequest $request)
    {
        $user = $request->user() ?? User::create($request->only('email', 'first_name', 'last_name', 'phone'));
        $appointment = $user->appointments()->create($request->only('department_id', 'scheduled_date'));
        Auth::login($appointment->user);

        return Response::api('Check Your Email');
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->validated());

        return Response::api('Updated Successfully!');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->deleteOrFail();

        return Response::api('Order cancelled successfully');
    }
}
