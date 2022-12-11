<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'description', 'category_id', 'image-url'];

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id')->first();
    }
}
