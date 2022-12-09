<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Categories
{
    public static function getCategories(): array
    {
        return json_decode(Storage::disk('local')->get('categories.json'), true);
    }
}
