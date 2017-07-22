<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use \App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(StoreBlogPost $request)
    {
    	Post::create([
    		'title' 	=>	request('title'),
    		'blogPost'	=>	request('body')
    	]);

    	return redirect('/');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }
}
