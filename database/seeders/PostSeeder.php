<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->create([
            'title' => 'One More Light',
            'body' => 'Nothing Beats a Jet to Holiday',
            'comment' => '',
            'created_at' => now(),
            'update_at' => now(),
        ]);

        $this->call(PostSeeder::class);
    }
}
