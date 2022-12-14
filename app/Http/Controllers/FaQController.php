<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaQController extends Controller
{


    /**
     * showing all FAQ's
     *
     * @return view
     */
    public function index()
    {
        $faqs = DB::table('fa_q_s')->get();
        return view('home', compact('faqs'));
    }
}
