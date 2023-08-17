<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocaleController extends Controller
{
    public function __invoke(Request $request)
    {
        session()->put('locale', $request->language);

        return Response::api('Changed Successfully');
    }
}
