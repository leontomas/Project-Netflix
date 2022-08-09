<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $movies = Movie::latest()->paginate(5);

        return view('admin-movies.index',compact('movies'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin-movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'movie_url' => 'required|url',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable',
            'language' => 'nullable',
            'year' => 'nullable',
            'created_at' => 'date_format',
            'updated_at' => 'date_format',
        ]);
        $input = $request->all();

        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/thumbnails';
            $movieThumbnail = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $movieThumbnail);
            $input['thumbnail'] = "$movieThumbnail";
        }
        Movie::create($input);

        return redirect()->route('index')
                        ->with('success','Movie created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        return view('admin-movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
        return view('admin-movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $request->validate([
            'title' => 'required',
            'movie_url' => 'required|url',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable',
            'language' => 'nullable',
            'year' => 'nullable',
            'created_at' => 'date_format',
            'updated_at' => 'date_format',
        ]);
        $input = $request->all();

        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/thumbnails/';
            $movieThumbnail = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $movieThumbnail);
            $input['thumbnail'] = "$movieThumbnail";
        }else{
            unset($input['thumbnail']);
        }

        $movie->update($input);

        return redirect()->route('admin-movies.index')
                        ->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();

        return redirect()->route('admin-movies.index')
            ->with('success','Movie deleted successfuly');
    }
}
