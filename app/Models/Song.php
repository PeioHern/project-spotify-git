<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
      protected $table = "songs";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'artista', 'album', 'playlist_id'];
    protected $hidden = ['id'];









 public function playlist(){
        return $this->belongsTo(Playlist::class);
    }




}
