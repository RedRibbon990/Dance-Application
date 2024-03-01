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

    public function movementIndex($title)
    {
        $move = Move::where('title', $title)->first();
        return view('moves.index', compact('move'));
    }
    
}
