<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use \App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(StoreBlogPost $request)
    {
    	$post = new Post;

    	/*$this->validate(request(), [
    		'title'	=>	'required|min:5|max:255',
    		'body'	=>	'required|min:10'
    	]);*/

    	$post->create([
    		'title' 	=>	request('title'),
    		'blogPost'	=>	request('body')
    	]);

    	return redirect('/');
    }
}
