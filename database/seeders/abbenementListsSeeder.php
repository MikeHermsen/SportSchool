<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class abbenementListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abbenementLists = [
            [
                'name' => 'Gast',
                'can_take_cursses_amount' => 0,
            ],
            [
                'name' => 'Pricing 1',
                'can_take_cursses_amount' => 1,
            ],
            [
                'name' => 'Pricing 2',
                'can_take_cursses_amount' => 2,
            ],
            [
                'name' => 'Pricing 3',
                'can_take_cursses_amount' => 100,
            ]

        ];

        foreach ($abbenementLists as $abbenementList) {
            DB::table('abbenement_lists')->insert($abbenementList);
        }

    }

}
