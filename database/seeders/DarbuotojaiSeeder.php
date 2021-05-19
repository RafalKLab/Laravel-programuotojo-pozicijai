<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DarbuotojaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('darbuotojai')->insert([
            [
                'name' => 'Mantas',
                'surname' => 'Adomaitis',
            ],
            [
                'name' => 'Juozas',
                'surname' => 'Katleris',
            ],
            [
                'name' => 'Gintaras',
                'surname' => 'Rimunas',
            ]
        ]);

    }
}
