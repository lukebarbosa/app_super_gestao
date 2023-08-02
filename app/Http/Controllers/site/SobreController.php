<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class SobreController extends Controller
{
    public function index()
    {
        return view('site.sobre');
    }
}
