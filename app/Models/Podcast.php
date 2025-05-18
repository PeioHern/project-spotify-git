<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
     protected $table = "podcasts";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'descripcion'];
    protected $hidden = ['id'];





public function usuarios(){
        return $this->belongsToMany(Usuario::class);
    }



}
