<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbbTypeController extends Controller
{
    public function index()
    {
        return view('abbenement_types');
    }
}
