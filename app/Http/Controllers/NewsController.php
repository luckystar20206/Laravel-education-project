<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news')->with('news', News::getNews());
    }

    public function showOne($idx)
    {
        $new = News::getNew($idx);

        if ($new) {
            return view('new')->with('new', $new);
        }
    }
}
