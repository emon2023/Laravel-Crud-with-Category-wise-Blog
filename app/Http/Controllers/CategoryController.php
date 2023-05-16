<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use function PHPUnit\Runner\validate;

class CategoryController extends Controller
{

    private $category, $categories;

    public function index()
    {
        $this->categories = Category::all();
        return view('category.add',['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
       $this->validate($request,[
           'name'=>'required',
           'description'=>'required',
           'image'=>'required|image',
           ]);

        Category::newCategory($request);
        return back()->with('message','Category Info Create Successfully');
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('category.manage',['categories'=>$this->categories]);
    }

    public function edit($id)
    {
        $this->categories = Category::all();
        $this->category = Category::find($id);
        return view('category.edit',['category'=> $this->category,'categories' => $this->categories]);
    }

    public function update(Request $request, $id)
    {
        $this->categories = Category::all();
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message','Category Info Update Successfully');
    }

    public function delete($id)
    {
        $this->categories = Category::all();
        Category::deleteCategory($id);
        return back()->with('message','Category Info Delete Successfully');
    }
}
