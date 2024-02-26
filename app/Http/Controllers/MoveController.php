<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveController extends Controller
{
    public function createMovement()
    {
        return view('movements.create');
    }
}
