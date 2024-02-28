<?php

namespace App\Models;

use App\Models\Move;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function moves()
    {
        return $this->hasMany(Move::class);
    }
}
