<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientContact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(10)->create()->each(function($client){
            ClientContact::factory(2)->create(['client_id' => $client->id]);
        });
    }
}