<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class News
{
    public static function getCategoryNews($idx): array
    {
        $path = storage_path() . "/app/news.json";
        $jsonNews = json_decode(file_get_contents($path), true);
        return array_filter($jsonNews, function ($new) use ($idx) {
            return $new["category_id"] == $idx;
        });
    }
    public static function getCategories(): array
    {
        $path = storage_path() . "/app/categories.json";
        return json_decode(file_get_contents($path), true);
    }

    public static function getNews(): array
    {
        $path = storage_path() . "/app/news.json";
        return json_decode(file_get_contents($path), true);
    }

    public static function getNew($idx): bool|array
    {
        $path = storage_path() . "/app/news.json";
        $jsonNews = json_decode(file_get_contents($path), true);

        if (array_key_exists($idx, $jsonNews)) {
            return $jsonNews[$idx];
        }
        return false;
    }
}
