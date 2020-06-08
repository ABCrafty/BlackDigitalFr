<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'hat' => 'required',
            'body' => 'required'
        ]);
        $post = new Post();

        $post->title = request('title');
        $post->slug = request('slug');
        $post->hat = request('hat');
        $post->body = request('body');

        $post->save();

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::find($post);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'hat' => 'required',
            'body' => 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
