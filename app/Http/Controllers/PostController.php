<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Benchmark;

class PostController extends Controller
{
    public function indexAction()
    {
        $post = Post::all();
        return view('posts.index', ['post'=>$post]);
    }

    public function showAction(POST $post)
    {
    //    $post=Post::findorfail(POST $post);
        return view('posts.show', ['post'=>$post]);
    }

public function createAction(User $user)
{
    return view('posts.create', ['users'=>$user->all()]);
}

public function storeAction(Request $request)
{
    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->user_id = $request->user_id;
    $post->save();
    return redirect()->route('posts.index');
}

public function editAction(POST $post)
{
    //  $post=Post::findorfail($id);
    $user=User::all();
    return view('posts.edit', ['post'=>$post,'users'=>$user]);
}

public function updateAction(Request $request, POST $post)
{
    // $post=Post::findorfail($id);
    $post->title = request()->title;
    $post->description = $request->description;
    $post->user_id = $request->user_id;
    $post->save();
    return redirect(route('posts.index'));
}
public function destroyAction($id)
{
    $post=Post::findorfail($id);
    $post->delete();
    return redirect(route('posts.index'));
}


#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~H-H-H-H-H-H-H~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
# Building API Fns
//api_tutorial

 public function index()
 {
     return Post::all();
 }
 public function show($id)
 {
     $post = POST::where('user_id', $id)->get();
     return $post;
 }
        public function create(Request $request)
        {
            $post = new POST();
            $post->title=$request->title;
            $post->description=$request->description;
            $post->user_id= $request->user_id;
            $post->save();
            return "post has been added " ;
        }
public function delete($id)
{
    $post = Post::findorfail($id);
    $post->delete();
    return 'user has been deleted';
}
public function update(Request $request, $id)
{
    $post = POST::findorfail($id);
    $post->title=$request->title;
    $post->description=$request->description;
    $post->user_id= $request->user_id;
    $post->save();
    return "post has been updated " ;
}
}
