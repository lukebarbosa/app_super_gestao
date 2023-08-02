<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('site.principal');
    }
}
