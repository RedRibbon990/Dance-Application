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

        // Assegna dinamicamente il percorso del logo in base all'ID della categoria
        foreach ($categories as $category) {
            $category->logoPath = asset('img/logo' . $category->id . '.jpg');
            $category->imgPath = asset('img/category' . $category->id . '.jpg');
        }

        $categories = $categories->take(3);

        $moves = Move::where('is_accepted', true)->latest()->take(6)->get();

        return view('welcome', compact('moves', 'categories'));
    }

    public function showCategory(Category $category)
    {
        $moves = $category->moves()->orderBy('created_at')->take(10)->get()->reverse();
        
        return view('categories.show', compact('category', 'moves'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $moves = Move::where('title', 'like', "%$query%")
                    ->orWhere('body', 'like', "%$query%")
                    ->orWhereHas('category', function ($categoryQuery) use ($query) {
                        $categoryQuery->where('name', 'like', "%$query%");
                    })
                    ->orderBy('created_at', 'desc')
                    ->get();
    
        return view('search', compact('moves', 'query'));
    }
    

    public function profile()
    {
        return view('auth.profile');
    }
}
