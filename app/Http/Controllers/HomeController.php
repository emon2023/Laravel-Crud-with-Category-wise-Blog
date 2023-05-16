<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $blog, $blogs,$categories;

    public function index()
    {
        $this->categories = Category::all();
        $this->blogs = Blog::all();
        return view('view.home',['blogs'=>$this->blogs,'categories'=>$this->categories]);
    }

    public function detail($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('view.detail',['blog'=>$this->blog,'categories'=>$this->categories]);
    }

    public function category($id)
    {
        $this->categories = Category::all();
        $this->blogs = Blog::where('category_id', $id)->get();
        return view('view.category', ['blogs' => $this->blogs,'categories'=>$this->categories]);
    }
}
