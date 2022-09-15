<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AbbTypeController extends Controller
{

    /**
     * Fetching all abbo types from db and pass them with the view to the user.
     *
     * @return view
     */
    public function index()
    {
        $exceptThisIds = [1];
        $abbenementen = DB::table('abbenement_lists')->whereNotIn('id', $exceptThisIds)->get();
        return view('abbenement_types', compact('abbenementen'));
    }

    /**
     * Changing the users abbo type
     *
     * @return view
     */
    public function changeAbbo($type) {
        $user = Auth::user();
        DB:: table('users')
            ->where('id', $user->id)
            ->update(['abbenement_type' => $type]);
        return Redirect::back();
    }
}
