<?php

namespace App\Http\Controllers;

use App\Models\controller;
use App\Models\Post;
use App\View\Components\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;



class AjouterController extends controller
{
    public function ajout(){
       $users=User::all(); 
        return view('ajouter',['users'=>$users]);
    }

    public function store() {
        $request=request();
        $data=$request->all();
        // dd($data);
        $prenom=request()->prenom;
        $nom=request()->nom;
        $handle=request()->handle;
        $postCreator=request()->post_creator;

Post::create([
    'prenom'=>$prenom,
    'nom'=>$nom,
    'handle'=>$handle,
    

]);
        return to_route('home.index');
}
}




