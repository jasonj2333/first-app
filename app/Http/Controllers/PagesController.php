<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        //dd($pages);
        return view('pages.index', compact('pages'));
    }

    public function show(int $id)
    {
        $page = Page::findOrFail($id);
        return view('pages.show', compact('page'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'slug' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

         
    }
}
