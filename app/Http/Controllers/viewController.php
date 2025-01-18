<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\controller;
use App\Models\Post;

class ViewController extends Controller
{
    public function view($viewId){
        $ilias=Post::find($viewId);
        if(is_null($ilias)){
          return to_route('home.index');
        }
        
                return view('view',compact('ilias'));
    }
}
