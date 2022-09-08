<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'abbenement_type' => 1,
                'days_left' => 0,
                'role' => 'admin',
            ],

            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => 'kaas',
                'abbenement_type' => 1,
                'days_left' => 1,
            ],

            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => 'kaas',
                'abbenement_type' => 2,
                'days_left' => 2,
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }

    }
}
