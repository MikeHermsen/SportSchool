<?php

namespace Database\Seeders;

use App\Models\cursessen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class curssesensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursessen = [
            [
                'name' => 'yoga',
                'coach_id' => 1,
            ],
            [
                'name' => 'pilates',
                'coach_id' => 1,
            ],
            [
                'name' => 'paaldansen',
                'coach_id' => 1,
            ]
        ];


        foreach ($cursessen as $curs) {
            DB::table('cursessens')->insert($curs);
        }

    }
}
