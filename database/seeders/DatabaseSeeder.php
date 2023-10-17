<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

         Listing::factory(6)->create();

        //  Listing::create([
        //     'title' => 'PHP Developer',
        //     'tags' => 'PHP, Laravel, Vue',
        //     'company' => 'Test Company',
        //     'location' => 'Remote',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.test.com',
        //     'discription' => 'I am good at PHP and Laravel'

        //  ]);

        //  Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend ,api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'discription' => 'I am not good at PHP and Laravel'
        //   ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
