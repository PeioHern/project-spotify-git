<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        $this->call(PlayListSeeder::class);
        $this->call(PodcastSeeder::class);
        $this->call(SongsSeeder::class);
        $this->call(UsuarioSeeder::class);

        $this->call(PlaylistUsuarioSeeder::class);
        $this->call(PodcastUsuarioSeeder::class);
    }
}
