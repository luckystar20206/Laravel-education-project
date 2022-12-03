<?php

namespace App\Models;

class Categories
{
    public static function getCategories(): array
    {
        $path = storage_path() . "/app/categories.json";
        return json_decode(file_get_contents($path), true);
    }
}
