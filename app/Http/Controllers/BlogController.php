<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class BlogController extends Controller
{
    public function index()
    {
        $postsPaginate = Posts::paginate(15);
        return view('blog.blog', compact('postsPaginate' ));
    }

    public function create()
    {
        return view('admin-panel.create-blog');
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

        if ($request->has('pinned') && $request->input('pinned')) {
            Posts::where('pinned', true)->update(['pinned' => false]);
            $validatedData['pinned'] = true;
        }

        $post = Posts::create($validatedData);

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

        Posts::where('pinned', true)->update(['pinned' => false]);

        $post = Posts::find($request->input('pinned_post_id'));
        $post->update(['pinned' => true]);

        return redirect()->route('blog.blog')->with('success', 'Pinned post updated successfully!');
    }

    public function show($id)
    {
        $post = Posts::findOrFail($id);
        return view('blog.show', compact('post'));

    }

//    public function edit()
//    {
//        $posts = Posts::latest()->get();
//        return view('admin-panel.edit-blog', compact('posts'));
//    }
//
//    public function destroy($id)
//    {
//        $blog = Posts::findOrFail($id);
//        $blog->delete();
//        return redirect()->route('blogs.index')->with('success', 'Блог удален успешно');
//    }
}


