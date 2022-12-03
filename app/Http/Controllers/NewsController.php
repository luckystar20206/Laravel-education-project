<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news')->with('news', News::getNews());
    }
    public function categories()
    {
        return view('categories')->with('categories', Categories::getCategories());
    }
    public function category($idx)
    {
        $news = News::getCategoryNews($idx);
        return view('news')->with('news', $news);
    }
    public function showOne($idx)
    {
        $new = News::getNew($idx);

        if ($new) {
            return view('new')->with('new', $new);
        }
    }
}
