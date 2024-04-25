<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.`
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Post::factory(5)->create();
        \App\Models\Comment::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Author',
            'email' => 'author@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'role' => false,
            'remember_token' => Str::random(10),
        ]);
    }
}
