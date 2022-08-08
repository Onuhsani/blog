<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return redirect('url', compact('posts'));


    }


    public function create()
    {
        
        return redirect('url');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string', 'max:255'],
            'meta_title'=>['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'content'=>['required', 'text'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $slug = str_replace(' ', '-', $req);
        $current = Auth::User();
        $id = $current->id;
        Post::create([
            'id'=>$id,
            'title'=>$request->title,
            'meta_title'=>$request->meta_title,
            'slug'=>$slug,
            'content'=>$request->content,
            'image'=>$filename,  
        ]);

        return redirect()->back()->with('success', 'Post created');
    }


    public function show(Post $post)
    {
        return redirect('/admin/viewpost', 'post');
    }


    public function edit(Post $post)
    {
        $datas = Post::all();
        return redirect('/admin/editpost', 'post', 'datas');
    }


    public function update(Request $request, Post $post)
    {
        //
    }

  
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted');
    }
}
