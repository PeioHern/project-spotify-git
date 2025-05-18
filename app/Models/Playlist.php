<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlists";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'descripcion'];
    protected $hidden = ['id'];











  public function usuarios(){
        return $this->belongsToMany(Usuario::class);
    }

  public function songs(){
        return $this->hasMany(Song::class);
    }




}
