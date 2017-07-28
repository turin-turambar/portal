<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Post;

class PostsController extends Controller
{

	public function __counstruct()
	{
		$this->middleware('auth');
	}
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
    		'blogPost'	=>	request('body'),
    		'user_id'	=>	auth()->id()
    	]);

    	return redirect('/');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }
}
