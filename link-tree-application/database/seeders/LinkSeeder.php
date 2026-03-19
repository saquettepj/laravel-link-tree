<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()->each(function(User $user) {
            Link::factory()->count(random_int(2, 3))->create([
                'user_id' => $user->id
            ]);
            Link::create([
                'user_id' => $user->id,
                'name' => 'Criar Link',
                'link' => 'http://127.0.0.1:8000/links/create'
            ]);
        });
    }
}
