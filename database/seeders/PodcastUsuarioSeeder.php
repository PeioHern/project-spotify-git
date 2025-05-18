<?php

namespace Database\Seeders;

use App\Models\Podcast;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PodcastUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $usuario1 = Usuario::find(1);
        $usuario2 = Usuario::find(2);
        $usuario3 = Usuario::find(3);

        $podcast1 = Podcast::find(1);
        $podcast2 = Podcast::find(2);
        $podcast3 = Podcast::find(3);

        $usuario1->podcasts()->attach([$podcast1->id, $podcast2->id]);
        $usuario2->podcasts()->attach([$podcast1->id, $podcast3->id]);
        $usuario3->podcasts()->attach([$podcast1->id, $podcast2->id]);
    }
}
