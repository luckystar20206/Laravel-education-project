<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addNew(Request $request)
    {
        if ($request->isMethod('post')) {
            $new = $request->all();
            DB::table('news')->insert([
                'title' => $new['title'],
                'text' => $new['text'],
                'description' => $new['description'],
                'image-url' => $new['image-url'],
                'category_id' => $new['category_id'],
            ]);
            $request->flash();
            return redirect()->route('news.index');
        }

        $categories = DB::table('categories')->get();
        return view('admin.add', [
            'categories' => $categories
        ]);
    }
}
