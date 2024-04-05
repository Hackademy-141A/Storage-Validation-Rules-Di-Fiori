<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct()
    {

$this->middleware('auth')->except('index','show');
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums=Album::all();

        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {


        Album::create([
            'name' => $request->name,
            'artist' => $request->artist,
            'year' => $request->year,
            'NumberOfSongs' =>$request->NumberOfSongs,
            'img' =>$request->file('img')->store('public/img'),
        ]);

        return redirect(route('homepage'))->with('message','Album inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {

        return view('album.show',compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
