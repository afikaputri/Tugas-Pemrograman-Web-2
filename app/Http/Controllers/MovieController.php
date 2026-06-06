<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // READ
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    // FORM CREATE
    public function create()
    {
        return view('movies.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            Movie::create([
                'title' => $request->title,
                'director' => $request->director,
                'release_year' => $request->release_year,
                'duration' => $request->duration,
                'genre' => $request->genre,
                'rating' => $request->rating,
                'synopsis' => $request->synopsis,
                'poster' => $request->poster
            ]);

            DB::commit();

            return redirect('/')
                ->with('success', 'Movie berhasil ditambahkan');

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->with('error', 'Movie gagal ditambahkan');
        }
    }
    // FORM EDIT
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('movies.edit', compact('movie'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->update([
            'title' => $request->title,
            'director' => $request->director,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'rating' => $request->rating,
            'synopsis' => $request->synopsis,
            'poster' => $request->poster
        ]);

        return redirect('/');
    }

    // DELETE DATA
public function destroy($id)
{
    Movie::destroy($id);

    return redirect('/');
}
}