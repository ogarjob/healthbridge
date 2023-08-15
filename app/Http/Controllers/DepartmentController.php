<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\SubCategory;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Department::class);
    }

    public function index()
    {
        $departments = Department::all();

        return view('departments.index', compact('departments'));
    }
}
