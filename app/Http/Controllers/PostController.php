<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the create view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.create', ['posts' => $posts]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

    }
}
