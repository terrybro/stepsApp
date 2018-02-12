<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class PostsController extends Controller
{

    public function store()
    {
      $post = new Task;

      $post->title = request('title');
      $post->body = request('body');

      $post->save();

      return redirect('/');
    }
}
