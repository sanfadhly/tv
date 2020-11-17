<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('configs')->insert([
        [
            'title' => 'admobenable',
            'value' => '0'
        ],
       [
            'title' => 'admobappid',
            'value' => '0'
        ],
       [
            'title' => 'admobbanner',
            'value' => '0'
        ],
        [
            'title' => 'admobinter',
            'value' => '0'
        ],
        [
            'title' => 'fanenable',
            'value' => '0'
        ],
        [
            'title' => 'fanappid',
            'value' => '0'
        ],
        [
            'title' => 'fanbanner',
            'value' => '0'
        ],
        [
            'title' => 'faninter',
            'value' => '0'
        ]





        ]);
    }
}
