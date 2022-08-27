<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Auth;

class UsersController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $latest = Post::orderby('id', 'DESC')->paginate(5);
        $post = Post::paginate(15);
        $posts = Post::orderby('id', 'DESC')->paginate(15);
        $trendings = Post::all()->take(10);
        
        // $test = Post::with('category')->get();
        // $post_category = $test->$categories->title;
        // dd($post_category);

        // $politics = Post::where($test->category, 'politics')->paginate(5);
        // $business = Post::where($test->category, 'business')->paginate(5);
        return view('home', compact(['categories', 'posts', 'trendings']));
    }

    public function viewCategory(Category $category)
    {
        $categories = Category::all();
        $trendings = Post::all()->take(10);

        return view ('viewcategory', compact(['categories', 'category', 'trendings']));
    }

    public function viewPost(Post $post)
    {
        $categories = Category::all();
        $trendings = Post::all()->take(10);
        $comments = $post->comment();
        return view ('viewpost', compact(['categories', 'post', 'trendings', 'comments']));
    }
}
