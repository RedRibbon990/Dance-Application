<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Move;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        // Ottieni tutte le categorie con il numero massimo di mosse per ciascuna categoria
        $categories = Category::withCount('moves')
            ->orderByDesc('moves_count')
            ->get();
            
        $categories = $categories->take(3);

        $moves = Move::latest()->take(6)->get();

        return view('welcome', compact('moves', 'categories'));
    }

    public function showCategory(Category $category)
    {
        $moves = $category->moves()->orderBy('created_at')->take(10)->get()->reverse();
        
        return view('categories.show', compact('category', 'moves'));
    }
    

    public function profile()
    {
        return view('auth.profile');
    }
}