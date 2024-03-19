<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\brand;
use Illuminate\Support\Facades\File;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/data.json');
        $brands = collect(json_decode($json));
$brands->each(function($all){

    brand::create([ // Changed 'client' to 'Client'

        'name' => $all->firstname,
        'lastname' => $all->lastname,
        'city' => $all->city, // Corrected the usage of 'city' field
        'phone' => $all->phoneno
    ]);



});



    }
}
