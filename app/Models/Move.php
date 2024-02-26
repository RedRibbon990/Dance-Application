<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Move extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'difficulty'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
