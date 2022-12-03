<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addNew(Request $request, News $news, Categories $categories)
    {
        if ($request->isMethod('post')) {
            $new = $request->all();
            $path = storage_path() . "/app/news.json";
            $jsonNews = json_decode(file_get_contents($path), true);
            $jsonNews[] = $new;
            Storage::put('news.json', json_encode($jsonNews));
            $request->flash();
            return redirect()->route('news.index');
        }
        return view('admin.add', [
            'categories' => $categories->getCategories()
        ]);
    }
}
