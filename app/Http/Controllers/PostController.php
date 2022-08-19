<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

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
        $path = public_path('public/images');
        if ( ! file_exists($path) ){
            mkdir($path, 0777, true);
        }
        $file= $request->file('image');
        $fileName= uniqid().'_'.trim($file->getClientOriginalName());
        $file-> move($path, $fileName);
        
        $slug = str_replace(' ', '-', $request->meta_title);
        $current = Auth::User();
        $id = $current->id;
        Post::create([
            'id'=>$id,
            'title'=>$request->title,
            'meta_title'=>$request->meta_title,
            'slug'=>$slug,
            'content'=>$request->content,
            'image'=>$fileName,  
        ]);

        return redirect()->back()->with('success', 'Post created');
    }


    public function show(Post $post)
    {
        return view('admin.viewpost', 'post');
    }


    public function edit(Post $post)
    {
        return view('admin.edit-post', 'post');
    }


    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'image' => ['required', 'max:2048'],
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $filename;
        $post->save();

        return redirect()->back()->with('success', 'Post updated successfully');
    }

  
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted');
    }
}
