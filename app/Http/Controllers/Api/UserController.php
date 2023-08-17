<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    public function store(Request $request)
    {
        $user = User::create($request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users',
            'phone'      => 'required|numeric|min_digits:10|unique:users',
            'gender'     => 'required',
            'type'       => 'filled'
        ]));

        return Response::api('Registration successful', headers: [
            'x-location' => route('users.show', $user)
        ]);
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return Response::api('Updated Successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return Response::api('Deleted successfully.');
    }
}
