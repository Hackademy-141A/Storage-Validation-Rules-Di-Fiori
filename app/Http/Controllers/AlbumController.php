<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'user_id' => Auth::user()->id,
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
        return view('album.edit' , compact('album')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $album->update([

            'name'=> $request->name,
            'artist' => $request->artist,
            'year' => $request->year,
            'NumberOfSongs' =>$request->NumberOfSongs,
        ]);
        if($request->img){
            $album->update([
                'img'=> $request->file('img')->store('public/img')
            ]);
        }
        return redirect(route('album.index'))->with('message', 'album modificato,bravo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        Storage::delete(($album->img));
        $album->delete();
        return redirect(route('album.index'))->with('message', 'album eliminato,bravo');
    }
}
