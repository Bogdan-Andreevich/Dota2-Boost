<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->get();
        return view('blog.blog', compact('posts'));
    }

    public function create()
    {
        return view('blog.create-blog');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $validatedData['image'] = str_replace('public/', '', $imagePath);
        }

        // If the post should be pinned, unpin the previously pinned post (if any)
        if ($request->has('pinned') && $request->input('pinned')) {
            Posts::where('pinned', true)->update(['pinned' => false]);
            $validatedData['pinned'] = true;
        }

        $post = Posts::create($validatedData);

        // If the post should be pinned, update the pinned_post_id field
        if ($request->has('pinned') && $request->input('pinned')) {
            $post->update(['pinned_post_id' => $post->id]);
        }

        return redirect()->route('blog.blog')->with('success', 'Post created successfully!');
    }

    public function updatePinnedPost(Request $request)
    {
        $request->validate([
            'pinned_post_id' => 'required|exists:posts,id',
        ]);

        // Unpin the previously pinned post (if any)
        Posts::where('pinned', true)->update(['pinned' => false]);

        // Pin the selected post
        $post = Posts::find($request->input('pinned_post_id'));
        $post->update(['pinned' => true]);

        return redirect()->route('blog.blog')->with('success', 'Pinned post updated successfully!');
    }

    public function show($id)
    {
        $post = Posts::findOrFail($id);
        return view('blog.show', compact('post'));
    }
}
