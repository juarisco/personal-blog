<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;
use App\Http\Requests\UserUpdate;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function posts()
    {
        $posts = Post::all();

        return view('admin.posts', compact('posts'));
    }

    public function postEdit($id)
    {
        $post = Post::where('id', $id)->first();

        return view('admin.editPost', compact('post'));
    }

    public function postEditPost(CreatePost $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return back()->with('success', "Post updated successfully");

    }

    public function deletePost($id)
    {
        Post::where('id', $id)->delete();

        return back();


    }

    public function comments()
    {
        $comments = Comment::all();

        return view('admin.comments', compact('comments'));
    }

    public function deleteComment($id)
    {
        $comment = Comment::where('id', $id)->first();
        $comment->delete();

        return back();

    }

    public function users()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::where('id', $id)->first();

        return view('admin.editUser', compact('user'));
    }

    public function editUserPost(UserUpdate $request, $id)
    {
        $user = User::where('id', $id)->first();

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->author == 1) {
            $user->author = true;
        } elseif ($request->admin == 1) {
            $user->admin = true;
        }

        $user->save();

        return back()->with('success', 'User updated successfully');
    }

    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return back();
    }
}
