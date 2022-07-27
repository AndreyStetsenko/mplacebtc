<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::get();

        return view('admin.categories', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $cat = new Categories();

        $cat->name = $request->name;
        $cat->slug = $request->slug;
        if ( $request->is_child === 'on' ) $cat->sub = $request->sub;
        $cat->is_child = $request->is_child;

        $cat->save();

        return response()->redirectToRoute('dashboard.categories')->with('success','Категория ' . $request->input('name') . ' создана');
    }

    public function view(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
        $categories = Categories::get();

        return view('admin.categories', [
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $cat = Categories::findOrFail($id);

        $cat->name = $request->name;
        $cat->slug = $request->slug;
        if ( $request->is_child === 'on' ) $cat->sub = $request->sub;
        $cat->is_child = $request->is_child;

        $cat->update();

        return response()->redirectToRoute('dashboard.categories')->with('success','Категория ' . $request->input('name') . ' обновлена');
    }

    public function destroy(Request $request, $id)
    {
        Categories::find($id)->delete();
        return response()->redirectToRoute('dashboard.categories')->with('success','Категория удалена');
    }
}
