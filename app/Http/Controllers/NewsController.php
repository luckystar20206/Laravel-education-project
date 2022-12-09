<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news')->with('news', $news);
    }
    public function categories()
    {
        $categories = DB::table('categories')->get();
        return view('categories')->with('categories', $categories);
    }
    public function category($idx)
    {
        $news = DB::table('news')
            ->where('category_id', $idx)
            ->get();
        return view('news')->with('news', $news);
    }
    public function showOne($idx)
    {
        $new = DB::table('news')->find($idx);
        if ($new) {
            return view('new')->with('new', $new);
        }
    }
}
