<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
         $images = Picture::all();
//        $post_relations = DB::table('posts')
//    ->join('authors', 'posts.user_id', '=', 'authors.user_id')
//    ->select('posts.*', 'authors.*') // Include desired columns
//    ->get();

        $posts = Post::query()->paginate(10);
        return view('blog.blog-list',compact('posts', 'images'));
    }

     /**
     * Display a single post of the resource.
     */
    public function singlePost($slug): Factory|View|Application
    {
//        equivalent query 'select * from users join authors on users.id = authors.user_id;'
              $users = DB::table('users')
    ->join('authors', 'users.id', '=', 'authors.user_id')
    ->select('users.*', 'authors.*') // Include desired columns
    ->get();

//        equivalent query 's'
               $post_relations = DB::table('posts')
    ->join('authors', 'posts.user_id', '=', 'authors.user_id')
    ->select('posts.*', 'authors.*') // Include desired columns
    ->get();

//                @dd($users);
//                @dd($post_relations);
//select * from users join author on users.user_id = author.user_id;
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
