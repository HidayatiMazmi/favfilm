<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }
 
    public function show(Film $film)
    {
        return $film;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_film' => 'required',
            'synopsis' => 'required',
            'rating' => 'required',
            'tanggal_tayang' => 'required'
        ]);
        $film = Film::create($request->all());

        return response()->json($film, 201);
    }

    public function update(Request $request, Film $film)
    {
        $film->update($request->all());

        return response()->json($film, 200);
    }

    public function delete(Request $request, Film $film)
    {
        $film->delete();

        return response()->json(null, 204);
    }

    public function search($title_film)
    {
        return Film::where('title_film', 'like', '%'.$title_film.'%')->get();
    }
}
