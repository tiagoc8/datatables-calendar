<?php

use Illuminate\Database\Seeder;

class FastEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fast_events')->insert([
            [
                'title' => 'Almoço com cliente',
                'start' => '11:30:00',
                'end' => '13:30:00',
                'color' => '#c40233'
            ],
            [
                'title' => 'Ginásio',
                'start' => '18:30:00',
                'end' => '20:30:00',
                'color' => '#29f2f2'
            ]
        ]);
    }
}
