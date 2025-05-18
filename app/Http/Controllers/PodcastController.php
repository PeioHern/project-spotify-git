<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    


  public function listaPodcasts()
    {

        // $podcasts = Podcast::all();
        $podcasts = Podcast::with('usuarios')->get();
        return view('listaPodcasts', ['podcasts' => $podcasts]);
    }








}
