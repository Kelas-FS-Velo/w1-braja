<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Braja Santika',
            'bio' => 'Educator and facilitator passionate about programming and game creation.',
            'profile_image' => 'http://localhost:8000/images/braja.jpg',
            'social_links' => json_encode([
                'twitter' => 'https://twitter.com/fridayfall',
                'github' => 'https://github.com/brajasan',
                'linkedin' => 'https://www.linkedin.com/in/braja-santika/'
            ])
        ]);
    }
}
