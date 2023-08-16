<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    public function create()
    {
        return view('admin-panel.create-faq');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        FAQ::create($validatedData);


        return redirect()->route('admin-panel.create-faq')->with('success', 'FAQ created successfully!');
    }

    public function edit($id)
    {
        $faq = FAQ::find($id);
        return view('admin-panel.edit-faq', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = FAQ::findOrFail($id);

        if (!$faq) {

        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);


        $faq->update($validatedData);



        return redirect()->route('admin-panel.show-faqs', ['id' => $faq->id])
            ->with('success', 'Blog post updated successfully');
    }

    public function destroy($id)
    {
        $blog = FAQ::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin-panel.show-faqs')->with('success', 'Блог удален успешно');
    }
}


