<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function register(Request $request)
    {
        dd($request->all());
    }
}
