<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

}
