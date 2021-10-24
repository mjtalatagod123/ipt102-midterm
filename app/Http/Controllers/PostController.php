<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts() {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }


    public function create() {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'category_id' => 'required|numeric',
            'post' => 'required',
        ]);

        Post::create([
            'user_id'   => auth()->user()->id,
            'category_id' => $request->category_id,
            'post'      => $request->post
        ]);

        return redirect('/dashboard');
    }

    public function postsFromCategory(Category $category) {
        $posts = Post::where('category_id', $category->id)->get();
        return view('posts_from_category', compact('posts', 'category'));
    }

    public function authors() {
        $users = User::all();
        return view('authors', compact('users'));
    }

    public function authorPosts(User $user) {
        $posts = Post::where('user_id', $user->id)->get();
        return view('author_posts', compact('posts', 'user'));
    }
}
