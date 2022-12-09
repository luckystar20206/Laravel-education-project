<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class News
{
    public static function getCategoryNews($idx): array
    {
        $jsonNews = static::getNews();

        return array_filter($jsonNews, function ($new) use ($idx) {
            return $new["category_id"] == $idx;
        });
    }

    public static function getNews(): array
    {
        return json_decode(Storage::disk('local')->get('news.json'), true);
    }

    public static function getNew($idx): bool|array
    {
        $jsonNews = static::getNews();

        if (array_key_exists($idx, $jsonNews)) {
            return $jsonNews[$idx];
        }
        return false;
    }
}
