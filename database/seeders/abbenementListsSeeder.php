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
                'description' => 'Gast',
                'price' => 0,
            ],
            [
                'name' => 'Pricing 1',
                'can_take_cursses_amount' => 1,
                'description' => 'Pricing 1',
                'price' => 10,
            ],
            [
                'name' => 'Pricing 2',
                'can_take_cursses_amount' => 2,
                'description' => 'Pricing 2',
                'price' => 20,
            ],
            [
                'name' => 'Pricing 3',
                'can_take_cursses_amount' => 100,
                'description' => 'Pricing 3',
                'price' => 30,
            ]

        ];

        foreach ($abbenementLists as $abbenementList) {
            DB::table('abbenement_lists')->insert($abbenementList);
        }

    }

}
