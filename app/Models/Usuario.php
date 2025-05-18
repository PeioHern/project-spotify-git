<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   
    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'lastname', 'email', 'password'];
    protected $hidden = ['id'];









   public function podcasts(){
        return $this->belongsToMany(Podcast::class);
    }

    public function playlists(){
        return $this->belongsToMany(Playlist::class);
    }





}


