<?php

namespace Slomemes\Http\Controllers;

use Illuminate\Http\Request;
use Slomemes\Post as Post;
use Illuminate\Foundation\Auth as Auth;

class PostController extends Controller
{
    public function dodajGet() {
    	return view('dodaj');
    }
    public function dodajPost(Request $request) {
    	$naslov = $request->input('naslov');
    	$url = $request->input('url');

    	$post = new Post;
    	$post->naslov = $naslov;
    	$post->url = $url;
    	$post->user_id = Auth::user()->id;
    	$post->save();

    	return back();
    }
}
