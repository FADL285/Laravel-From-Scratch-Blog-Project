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
}
