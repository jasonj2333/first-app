<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        //dd($pages);
        return view('pages.index', compact('pages'));
    }

    public function show(string $slug)
    {
        //$page = Page::findOrFail($id);
        $page = Page::where('slug', $slug)->firstOrFail();
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
            'content' => 'required|min:10',
        ]);

        $data = $request->all();

        if(empty($data['slug'])){
            $data['slug'] = Str::slug($data['title'], '-');
        }

         Page::create($data);

         return redirect('/strony');
    }
}
