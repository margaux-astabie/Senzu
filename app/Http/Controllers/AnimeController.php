<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function list_all()
    {
        $animes = Anime::all();
        return view('animes.all' , compact('animes'));
    }

    public function show($id)
    {
        $anime = Anime::findOrFail($id);
        return view('animes.show' , compact('anime'));

    }

    public function create()
    {
        return view('animes.create');
        
    }

    public function store(request $request) {
        Anime::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'comments' => $request->input('comments'),
            'image_url' => $request->input('image_url'),
            'rating' => $request->input('rating'),
        ]);
        return redirect()->route('list');
    }
    

    public function edit($id)
    {
        $anime = Anime::findOrFail($id);
        return view('animes.edit' , compact('anime'));
    }
    
    public function update(Request $request, $id)
    {
        $Anime = Anime::findOrFail($id);
        $Anime->update([
            'rating' => $request->input('rating'),
            'comments' => $request->input('comments'),
        ]);
        return redirect()->route('list');
    }

    public function delete($id)
    {
        $anime = Anime::findOrFail($id);
        $anime->delete();
        return redirect()->route('list');
    }
}

