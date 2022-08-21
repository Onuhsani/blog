<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts', compact('posts'));
    }

    public function create()
    {      
        $categories = Category::all();
        return view('admin.create-post', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string', 'max:255'],
            'meta_title'=>['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'content'=>['required'],
            'image' => ['required', 'max:2048'],
        ]);
        //dd($request);
        $file_name = null;
        if ($request->has('image')) {
            $file_name = $request->file('image')->store('file_folder', 'public_uploads');
        }
        //
        $category = Category::find($request->category);
        $slug = str_replace(' ', '-', $request->meta_title);
        $current = Auth::User();
        $id = $current->id;

        Post::create([
            'user_id' => $id,
            'category_id' => $category->id,
            'title'=>$request->title,
            'meta_title'=>$request->meta_title,
            'slug'=>$slug,
            'content'=>$request->content,
            'image'=>$file_name,  
        ]);
        return redirect()->back()->with('success', 'Post created');
    }


    public function show(Post $post)
    {
        return view('admin.viewpost', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('admin.edit-post', compact('post'));
    }


    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'image' => ['required', 'max:2048'],
        ]);

        $file_name = null;
        if ($request->has('image')) {
            $file_name = $request->file('image')->store('file_folder', 'public_uploads');
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $file_name;
        $post->save();

        return redirect()->back()->with('success', 'Post updated successfully');
    }

  
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted');
    }
}
