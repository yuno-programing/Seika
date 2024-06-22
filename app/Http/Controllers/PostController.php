<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Auth;
use App\Models\Prefecture;
use App\Models\Culture;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }
    public function show (Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function create (Prefecture $prefecture, Culture $culture)
    {
        $prefectures = Prefecture::all();
        $cultures = Culture::all();
        return view('posts.create')->with([
            'prefectures' => $prefectures,
            'cultures' => $cultures
        ]);
    }
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $input['user_id'] = Auth::id();
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post, Prefecture $prefecture, Culture $culture)
    {
         $prefectures = Prefecture::all();
         $cultures = Culture::all();
        return view('posts.edit')->with([
            'post' => $post,
             'prefectures' => $prefectures,
              'cultures' => $cultures,
             ]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
}
