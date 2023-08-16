<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Http\Request;

class MainPageController extends Controller
{

    public function index()
    {
        $content = MainPage::latest()->first();
        return view('index', compact('content'));
    }

    public function create()
    {
        $content = MainPage::latest()->first();
        return view('admin-panel.create-2-forms-for-MainPage', compact('content'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title1' => 'required|string|max:255',
            'subtitle1' => 'required|string|max:255',
            'content1' => 'required|string',
            'title2' => 'required|string|max:255',
            'subtitle2' => 'required|string|max:255',
            'content2' => 'required|string',
            'title3' => 'required|string|max:255',
            'subtitle3' => 'required|string|max:255',
            'content3' => 'required|string',
            'title4' => 'required|string|max:255',
            'content4' => 'required|string',
            'title5' => 'required|string|max:255',
            'content5' => 'required|string',
            'title6' => 'required|string|max:255',
            'content6' => 'required|string',
        ]);


        MainPage::create($validatedData);

        return redirect()->route('admin-panel.create-2-forms-for-MainPage')->with('success', 'Post created successfully!');
    }
}


