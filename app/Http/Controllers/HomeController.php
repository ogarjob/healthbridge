<?php

namespace App\Http\Controllers;

use App\Models\Department;

class HomeController extends Controller
{
    public function __invoke()
    {
        $departments = Department::all();

        return view('home', compact('departments'));
    }
}
