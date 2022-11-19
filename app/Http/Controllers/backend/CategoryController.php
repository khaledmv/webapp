<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categorys = Category::all();

        return view('backend.category.index', compact('categorys'));
    }

    public function create()
    {  
        
        
        return view('backend.category.create');
    }

    
    public function edit($id)
    {
        $category = Category::find($id);
       
        return view('backend.category.edit', compact('category'));

    }

    public function store(Request $request)
    {
       $category = new Category();

       $request->validate([
        'title'        => 'required',
        'slug'         => 'required',
       ]);

       $category->title = $request->title;
       $category->slug = $request->slug;
       $category->save();
               
        return redirect()->route('category.index')->with('succes', 'Created Create Succesfully');
    }

    public function update(Request $request, $id)
    {
       $category = Category::find($id);

       $request->validate([
        'title'        => 'required',
        'slug'         => 'required',
       ]);

       $category->title = $request->title;
       $category->slug = $request->slug;
       $category->save();
               
        return redirect()->route('category.index')->with('succes', 'Category Updated Succesfully');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index')->with('succes', 'Category Deleted Succesfully');

    }
}
