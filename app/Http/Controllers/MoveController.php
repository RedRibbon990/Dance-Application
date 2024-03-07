<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Move;
use Illuminate\Http\Request;

class MoveController extends Controller
{
    public function createMovement()
    {
        return view('movements.create');
    }

    public function detail($title)
    {
        $move = Move::where('title', $title)->first();
        return view('moves.detail', compact('move'));
    }

    public function indexMove()
    {
        $moves = Move::where('is_accepted', true)->paginate(2);
        return view('moves.index', compact('moves'));
    }
    
    public function showAllMoves()
    {
        $moves = Move::paginate(10);
        return view('movements.show', compact('moves'));
    }
}
