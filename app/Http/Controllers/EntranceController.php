<?php

namespace App\Http\Controllers;

use App\Models\GaurdSecrets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EntranceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $token = bin2hex(random_bytes(3));
        GaurdSecrets::create([
            'token' => $token,
        ]);

        return view('entrance_qr_code',['token' => $token]);
    }

    public function gaurdCode(Request $request)
    {
        $token = $request->input('token');

        return $this->gaurd($token);

    }

    public function gaurd($token)
    {

        $gaurd = GaurdSecrets::where('token', $token)->first();
        // check for token
        if (!$gaurd) {
            return redirect('/entrance/scanner')->with('error', 'Deze code is niet geldig');
        }


        if ($gaurd->created_at < now()->subMinutes(5)) {
            return redirect('entrance/scanner')->with('error', 'Code is verouderd');
        }

        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        if ($user->abbenement_type == 0) {
            return redirect('/entrance/scanner')->with('error', 'Pas je abbenement aan om een cursus te volgen');
        }



        // check if the user is already in the curses
        $now = Carbon::now();
        $user_curses_length = DB::table('entree_checkers')->where('user_id', $user->id)->where('datum', $now->weekOfYear)->count();
        $user_curses_last = DB::table('entree_checkers')->where('user_id', $user->id)->where('datum', $now->weekOfYear)->orderBy('created_at', 'desc')->first();
        $abbenement_rule = DB::table('abbenement_lists')->where('id', $user->abbenement_type)->first();


        if ($user_curses_last && $user_curses_last->created_at > now()->subMinutes(1)) {
            return redirect('/entrance/scanner')->with('error', 'Je mag pas over 5 minuten weer naar binnen');
        }


        // Check if user has right type of abbenement
        if ($user_curses_length >= $abbenement_rule->can_take_cursses_amount) {
            return redirect('/entrance/scanner')->with('error', 'Helaas mag je niet naar binnen omdat je al deze week naar binnen bent geweest, pas je abbenement aan om een naar binnen te mogen te volgen');
        }


        // delete passed token
        GaurdSecrets::where('token', $token)->delete();

        // adding user to curses list
        DB::table('entree_checkers')->insert([
            'datum' => $now->weekOfYear,
            'user_id' => $user->id,
            'created_at' => now(),
        ]);
        return redirect('/entrance/scanner')->with('success', 'Je mag naar binnen');

    }

    public function tokenIsUsed(Request $request) {
        $token = $request->input('token');
        $gaurd = GaurdSecrets::where('token', $token)->first();

        if (!$gaurd) {
            return false;
        }
        return true;
    }

    public function scanner()
    {
        return view('/entrance_scanner');
    }
}
