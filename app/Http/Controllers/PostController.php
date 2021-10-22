<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/8/2021
 * Time: 12:19 AM
 */

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(9)
                ->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', 'unique:posts'],
            'thumbnail' => 'required|image',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', 'exists:categories,id']
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()
            ->file('thumbnail')
            ->store('thumbnails');
        Post::create($attributes);

        return redirect(route('post', $attributes['slug']));
    }
}
