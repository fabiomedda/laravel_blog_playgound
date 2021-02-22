<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::latest()->get();
        //$posts = Post::findOrFail(122);
        //dd($posts);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dd("Ciao", request('title'), request('body'));

        // validare i dati
        $validatedData = $request->validate([
           'title' => 'required',
           'body' => 'required' 
        ]);
        Post::create($validatedData);
        /* $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save(); */
        
        //$alpa_posts = Post::orderBy('title')->take(5)->get();
        $new_post = Post::orderBy('id', 'desc')->first();
        //dd($new_post);
        return redirect()->route('posts.show', $new_post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //dd($post->body);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //dd($post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //dd($post);
        //dd($request->all(), $post);
        // validare i dati

         $validatedData = $request->validate([
           'title' => 'required',
           'body' => 'required' 
        ]);

        /* $data = $request->all();
        $post->update($data); */
        $post->update($validatedData);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //dd("Elimina", $post);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
