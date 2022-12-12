<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->paginate(30);
        return view('admin.index')->with('news', $news);
    }

    public function create(Request $request)
    {
        $news = new News();

        if ($request->isMethod('post')) {
            $tableNameCategory = (new Categories())->getTable();
            $this->validate($request, [
               'title' => 'required|min:3|max:20',
               'text' => 'required|min:3',
                'description' => 'required',
                'image-url' => 'required',
                'category_id' => "required|exists:{$tableNameCategory},id",
            ]);

            $news->fill($request->all());
            $news->save();
            // $request->flash();
            return redirect()->route('admin.create')->with('success', 'Новость успешно добавлена!');
        }
        return view('admin.create', [
            'news' => $news,
            'categories' => Categories::all()
        ]);
    }

    public function store(News $news)
    {

    }

    public function edit(News $news) {
        return view('admin.create', [
            'news' => $news,
            'categories' => Categories::all()
        ]);
    }

    public function update(Request $request, News $news) {

        $news->fill($request->all());
        $news->save();
        return redirect()->route('admin.index')->with('success', 'Новость изменена успешно!');
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость удалена успешно!');
    }
}
