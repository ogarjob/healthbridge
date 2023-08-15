<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class StoreAppointmentStatusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'status_id' => ['required', Rule::unique('appointment_status')->where('appointment_id', $this->appointment->id)]
        ];
    }

    /**
     * @throws ValidationException
     */
    protected function prepareForValidation() : void
    {
        if ($this->appointment->isCompleted()) {
            throw ValidationException::withMessages(['Appointment has been Completed.']);
        }
    }

    public function messages()
    {
        return [
            "status_id.unique" => "This Event has already occurred"
        ];
    }
}
