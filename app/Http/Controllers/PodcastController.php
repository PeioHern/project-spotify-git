<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{



  public function listaPodcasts()
  {
    $miUser = session('usuario');

    // $podcasts = Podcast::all();
    $podcasts = Podcast::with('usuarios')->get();
    return view('listaPodcasts', ['podcasts' => $podcasts, 'miUser' => $miUser]);
  }
}
