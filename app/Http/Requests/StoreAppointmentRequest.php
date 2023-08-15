<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
                'scheduled_date'          => 'required',
                'department_id'     => 'required',
            ] + ($this->user() ? [] : [
                'first_name' => 'required',
                'last_name'  => 'nullable',
                'email'      => 'email|required|unique:users',
                'phone'      => 'required|numeric|digits_between:10,15|unique:users',
            ]);
    }

    /**
     * Handle a passed validation attempt.
     */
    public function passedValidation(): void
    {
        if ($this->email && User::where('email', $this->email)->orWhere('phone', $this->phone)->exists()) {
            abort(Response::api('Looks like you already have a profile with us. Kindly login to continue', ['should_login' => true], 400));
        }
    }

    public function messages(): array
    {
        return [
            'department_id.required' => 'The Department field is required',
        ];
    }
}
