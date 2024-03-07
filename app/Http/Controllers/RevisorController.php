<?php

namespace App\Http\Controllers;

use App\Models\Move;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {
        $move_to_check = Move::where('is_accepted', null)->first();
        return view('revisor.index', compact('move_to_check'));
    }

    public function acceptMove(Move $move)
    {
        $move->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato la Mossa');
    }

    public function rejectMove(Move $move)
    {
        $move->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, Movimento rifiutato');
    }
}
