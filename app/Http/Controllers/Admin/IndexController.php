<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addNew(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            $request->flash();
            return redirect()->route('admin.add');
        }
        return view('admin.add', [
            'categories' => $news->getCategories()
        ]);
    }
}
