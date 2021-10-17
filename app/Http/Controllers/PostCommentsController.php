<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/16/2021
 * Time: 9:54 PM
 */

namespace App\Http\Controllers;

use App\Models\Post;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        // validation
        request()->validate([
            'body' => ['required', 'min:4']
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back();
    }
}
