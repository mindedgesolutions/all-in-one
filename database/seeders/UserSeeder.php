<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create()->each(function($user){
            $roles = Role::pluck('name')->toArray();

            UserDetail::factory(1)->create(['user_id' => $user->id, 'first_name' => $user->name, 'last_name' => 'Test']);
            $user->assignRole($roles[array_rand($roles)]);
        });
    }
}