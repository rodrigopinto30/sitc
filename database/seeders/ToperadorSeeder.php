<?php

namespace Database\Seeders;

use App\Models\Toperadores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToperadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void{

        Toperadores::create([
            'name' => 'rodrigo',
            'password' =>bcrypt('rodrigopinto'),
            'email' => 'rodrigo@gmail.com',
        ])->assignRole('administrador');

        \App\Models\Toperadores::factory(9)->create();

    }
}
