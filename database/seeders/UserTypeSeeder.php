<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::create(['name' => 'Web Developer', 'slug' => Str::slug('Web Developer')]);
        UserType::create(['name' => 'Frontend Developer', 'slug' => Str::slug('Frontend Developer')]);
        UserType::create(['name' => 'Graphic Designer', 'slug' => Str::slug('Graphic Designer')]);
    }
}
