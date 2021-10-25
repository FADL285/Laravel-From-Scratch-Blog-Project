<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/24/2021
 * Time: 10:17 PM
 */

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()
                ->paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = $this->validatePost();
        Post::create(array_merge($attributes, [
            'user_id'   => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return redirect(route('post', $attributes['slug']))->with('success', 'Post Created Successfully!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);
        if (request('thumbnail')) {
            $attributes['thumbnail'] = request()
                ->file('thumbnail')
                ->store('thumbnails');
        }
        $post->update($attributes);
        return redirect(route('post', $attributes['slug']))->with('success', 'Post Updated Successfully!');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return back()->with('success', 'Post Deleted Successfully!');
    }

    protected function validatePost(?Post $post = null): array
    {
        $post ??= new Post();

        return request()->validate([
            'title'        => 'required',
            'thumbnail'    => $post->exists ? ['image'] : ['required', 'image'],
            'slug'         => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt'      => 'required',
            'body'         => 'required',
            'category_id'  => ['required', Rule::exists('categories', 'id')],
        ]);
    }
}
