<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
         $category = Category::all();
        return view('category.index', compact('category'));
    }
    

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request){

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        
        return redirect()->back()->withSuccess("Category Created");
    }

    public  function showById($id){
        $category = Category::find($id);

        $respone = [
            'msg' => 'Show Category success',
            'Category' => $category
        ];

        return response()->json($respone, '200');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect(route('category.index'));
        
    }

    public function destroy($id)
    {
        $category = Category::find($id)->first();
        $category->delete();

        return redirect()->back()->withDanger("Category Deleted");
    }
}
