<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursessenController extends Controller
{
    public function index()
    {
        $curssesens = DB::table('cursessens')->get();
        return view('cursessens', compact('curssesens'));
    }


    public function curses_left() {
        $user = DB::table('users')->where('id', auth()->user()->id)->first();

        $now = Carbon::now();
        $user_curses_length = DB::table('cursus_lists')->where('user_id', $user->id)->where('datum', $now->weekOfYear)->count();
        return $user_curses_length;
    }

    public function aanmelden($id)
    {
        // check if the user curses length for that day
        // if not, add the user to the curses
        // if yes, return error message
        // if the user is already in the curses, return error message
        // if the user is not in the curses, return error message

        $user = DB::table('users')->where('id', auth()->user()->id)->first();

        if ($user->abbenement_type == 0) {
            return redirect('/curssesens_aanvragen')->with('error', 'Pas je abbenement aan om een cursus te volgen');
        }

        // check if the user is already in the curses
        $now = Carbon::now();
        $user_curses_length = DB::table('cursus_lists')->where('user_id', $user->id)->where('cursen', $id)->first();


        if ($user_curses_length) {
            return redirect('/curssesens_aanvragen')->with('error', 'Je hebt je al voor deze cursus aangemeld.');
        }

        // adding user to curses list
        DB::table('cursus_lists')->insert([
            'cursen' => $id,
            'datum' => $now->weekOfYear,
            'user_id' => $user->id,
        ]);

        return redirect('/curssesens_aanvragen')->with('success', 'Je hebt je cursus voor deze week aangemeld.');

    }


    public function mijnCursussen()
    {
        $now = Carbon::now();
        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        $cursessens = DB::table('cursus_lists')->where('user_id', $user->id)->where('datum', $now->weekOfYear)->get();


        return view('mijn_cursessens', compact('cursessens'));
    }

    public function afmelden($id) {
        $now = Carbon::now();
        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        $cursus = DB::table('cursus_lists')->where('user_id', $user->id)->where('cursen', $id)->where('datum', $now->weekOfYear)->first();

        DB::table('cursus_lists')->where('id', $cursus->id)->delete();

        return redirect('/mijn_cursussen')->with('error', 'Je bent voor de cursus afgemeld.');
    }
}
