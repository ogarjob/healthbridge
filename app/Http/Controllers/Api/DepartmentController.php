<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Department::class);
    }

    public function store(Request $request)
    {
        Department::create($request->validate(['name' => 'required|unique:departments', 'image' => 'image']));

        return Response::api('Added Successfully');
    }

    public function update(Request $request, Department $department)
    {
        $department->update($request->validate([
            'name' => ['required', Rule::unique('departments')->ignore($department)],
            'image' => 'image'
        ]));

        return Response::api('Updated Successfully');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return Response::api('Deleted Successfully');
    }
}
