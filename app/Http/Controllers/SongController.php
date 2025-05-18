<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    

  public function listaSongs()
    {

        // $songs = Song::all();
        $songs = Song::with('playlist')->get();
        return view('listaSongs', ['songs' => $songs]);
    }


    public function searchSongs(Request $request)
    {
        $query = $request->input('searchName');

        $songs = Song::where('nombre', 'like', '%' . $query . '%')->get();

        return view('listaSongs', compact('songs'));
    }




}
