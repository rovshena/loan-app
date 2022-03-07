<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Comment;
use App\Models\Inquiry;
use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inquiry::factory()->count(20)->create();
        Announcement::factory()->count(60)->create();
        Comment::factory()
            ->has(Comment::factory()
                ->has(Comment::factory()->count(2))
                ->count(3))
            ->count(100)
            ->create();
    }
}
