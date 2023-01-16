<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function create(Request $request)
    {
        $categories = new Categories();

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required|min:3|max:20',
                'slug' => 'required|min:3',
            ]);

            $categories->fill($request->all());
            $categories->save();
            // $request->flash();
            return redirect()->route('admin.categories.create')->with('success', 'Категория успешно добавлена!');
        }
        return view('admin.categories.create', [
            'categories' => $categories
        ]);
    }

    public function store(Categories $categories)
    {

    }

    public function edit(Categories $categories) {
        return view('admin.categories.create', [
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Categories $categories) {
        $categories->fill($request->all());
        $categories->save();
        return redirect()->route('admin.categories.index')->with('success', 'Категория изменена успешно!');
    }

    public function destroy(Categories $categories) {
        $categories->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Категория удалена успешно!');
    }
}
