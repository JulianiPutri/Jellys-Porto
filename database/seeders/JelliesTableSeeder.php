<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Jelly;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JelliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jelly::create([
            'name' => 'Juliani Putri',
            'date_of_birth' => Carbon::parse('2002-07-11')->format('Y-m-d'),
            'profile' => 'https://res.cloudinary.com/djfokefsy/image/upload/v1725418915/profile.jpg',
        ]);
    }
}
