<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $images = Picture::all();
        $posts = Post::query()->paginate(10);
        return view('blog.blog-list',compact('posts', 'images'));
    }


    /**
     * Display a single post of the resource.
     */
    public function singlePost($slug)
    {


         $post = Post::where('slug', $slug)->first();
//        $post = Post::find($id);
//        if (! $post){
//            abort(404);
//        }
//        return $post;
        return view('blog.blog-post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
