<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost;
use App\Http\Requests\UpdatedPost;
use App\Models\Telegraph;

class TextController extends Controller
{
    public function showMain()
    {
        return view('main.index');
    }

    public function showPostList()
    {
        if (Telegraph::all() !== null) {
            $categories = Telegraph::all();
            return view('main.list', ['categories' => $categories]);
        };
    }

    public function createPost(CreatePost $request)
    {
        $data = $request->validated();
        Telegraph::firstOrCreate(['author' => $data['author'], 'title' => $data['title'], 'text' => $data['text']], [
            'author' => $data['author'], 'title' => $data['title'], 'text' => $data['text']
        ]);

        return redirect()->route('show.list');
    }

    public function showPost(Telegraph $categories)
    {
        return view('main.show', ['categories' => $categories]);
    }

    public function editPost(Telegraph $categories)
    {
        return view('main.edit', ['categories' => $categories]);
    }

    public function updatedPost(UpdatedPost $request, Telegraph $categories)
    {
        $data = $request->validated();
        $categories->update(['author' => $data['author'], 'title' => $data['title'], 'text' => $data['text']]);
        return view('main.show', ['categories' => $categories]);
    }

    public function destroyPost(Telegraph $categories)
    {
        $categories->delete();
        return redirect()->route('show.list');
    }

}
