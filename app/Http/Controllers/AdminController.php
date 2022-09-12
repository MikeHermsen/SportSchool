<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user()->role != 'admin') {
                return redirect('home');
            }
            return $next($request);
        });
    }
    public function ShowUsersList()
    {


        // get list of all user
        $users = DB::table('users')->get();

        return view('admin_users', compact('users'));
    }
}
