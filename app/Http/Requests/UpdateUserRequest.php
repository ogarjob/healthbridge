<?php

namespace App\Http\Requests;

use App\Models\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */

    public function rules(): array
    {
        return [
            'first_name'        => 'filled',
            'last_name'         => 'filled',
            'email'             => ['email', $unique = Rule::unique('users')->ignore($this->user)],
            'gender'            => [new Enum(Gender::class), 'filled'],
            'password'          => 'confirmed|min:3',
            'current_password'  => 'required_with:password|current_password|exclude',
            'phone'             => ['filled', 'digits_between:10,15', $unique],
            'photo'             => 'image',
            'type'              => Rule::prohibitedIf(! $this->user()->isAdmin()),
            'banned_until'      => [Rule::prohibitedIf(! $this->user()->isAdmin()),'nullable', 'date']
        ];
    }
}
