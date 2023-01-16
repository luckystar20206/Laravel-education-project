<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories')->with('categories', $categories);
    }
    public function category($idx)
    {
        $news = News::query()
            ->where('category_id', $idx)
            ->paginate(6);
        return view('news')->with('news', $news);
    }
}
