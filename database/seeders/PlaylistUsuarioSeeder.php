<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class PlaylistUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        


        $usuario1 = Usuario::find(1);
        $usuario2 = Usuario::find(2);
        $usuario3 = Usuario::find(3);

        $playlist1 = Playlist::find(1);
        $playlist2 = Playlist::find(2);
        $playlist3 = Playlist::find(3);

        $usuario1->playlists()->attach([$playlist1->id, $playlist2->id]);
        $usuario2->playlists()->attach([$playlist1->id, $playlist3->id]);
        $usuario3->playlists()->attach([$playlist1->id, $playlist2->id]);

    }
}
