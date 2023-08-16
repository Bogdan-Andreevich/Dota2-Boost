<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{

    public function index()
    {
        $content = About::latest()->first();
        return view('about', compact('content'));
    }

    public function create()
    {
        $content = About::latest()->first();
        return view('admin-panel.create-4-forms-for-AboutPage', compact('content'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mainTitle' => 'required|string|max:255',
            'animalTitle' => 'required|string|max:255',
            'animalSubtitle' => 'required|string|max:255',
            'animalContent1' => 'required|string|max:500',
            'animalContent2' => 'required|string|max:500',

            'courierTitle' => 'required|string|max:255',
            'courierSubtitle' => 'required|string|max:255',
            'courierContent' => 'required|string|max:500',

            'wardTitle' => 'required|string|max:255',
            'wardSubtitle' => 'required|string|max:255',
            'wardContent' => 'required|string|max:500',

            'techiesTitle1' => 'required|string|max:255',
            'techiesSubtitle1' => 'required|string|max:255',
            'techiesContent1' => 'required|string|max:500',
            'techiesTitle2' => 'required|string|max:255',
            'techiesContent2' => 'required|string|max:500',
        ]);

        About::create($validatedData);

        return redirect()->route('admin-panel.create-4-forms-for-AboutPage')->with('success', 'Post created successfully!');
    }
}


