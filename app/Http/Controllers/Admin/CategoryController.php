<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store (CategoryFormRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imgExt = $file->getClientOriginalExtension();

            $filename = time().'.' . $imgExt;
            $path = 'uploads/category/';
            $file->move($path, $filename);

            $data['image'] = $filename;
        }

        Category::create($data);

        return redirect('/admin/categories')->with('status', 'Category Created');

    }
}