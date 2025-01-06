<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }
    public function categori()
    {
        $categories = Category::get();
        return view('category.categori',compact('categories'));
    }
    public function about()
    {
        $categories = Category::get();
        return view('category.about',compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:100|string',
            'name' => 'required|max:255|string',
            'description' => 'required|max:1000|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp'
        ]);

        $filename = NULL;
        $path = NULL;

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);
        }

        Category::create([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filename
        ]);

        return redirect('categories/create')->with('status','Category Created');
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'id' => 'required|max:100|string',
            'name' => 'required|max:255|string',
            'description' => 'required|max:1000|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp'
        ]);

        $category = Category::findOrFail($id);

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);

            if(File::exists($category->image)){
                File::delete($category->image);
            }
        }

        $category->update([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filename
        ]);

        return redirect()->back()->with('status','Category Update');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        if(File::exists($category->image)){
            File::delete($category->image);
        }

        $category->delete();

        return redirect()->back()->with('status','Category Deleted');
    }

}
