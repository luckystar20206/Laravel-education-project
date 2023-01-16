<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->paginate(18);
        return view('news')->with('news', $news);
    }
    public function showOne(News $news)
    {
        return view('new')->with('new', $news);
    }
}
