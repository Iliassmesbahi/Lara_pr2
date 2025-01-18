<?php

namespace App\Http\Controllers;

use App\Models\controller;
use App\Models\Post;
use Illuminate\Foundation\Auth\User;

class HomeController extends controller{
    public function index() {
       $ilias=Post::all();
                return view('home',compact('ilias'));
    }


    public function delet($id) {
      $post = Post::find($id);

      if (!$post) {
          dd('Post not found');
      }

      $post->delete();

      return redirect()->route('home.index');
  }                
    };


