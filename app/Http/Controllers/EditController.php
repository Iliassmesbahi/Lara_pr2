<?php

namespace App\Http\Controllers;

use App\Models\controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Foundation\Auth\User;

class EditController extends controller
{
    public function edit(Post $post)
    {
        $users = User::all();
        return view('edit', ['users' => $users, 'post' => $post]);
    }

    public function updat(Request $request, $id)
    {

        $ilias = Post::find($id);

        if (!$ilias) {
            dd('Post not found');
        }

        $ilias->update([
            'id' => $request->id,
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'handle' => $request->handle,
        ]);

        return redirect()->route('home.index', $id);
    }
}