<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'title' => 'Reunião',
                'start' => '2020-09-11 21:30:00',
                'end' => '2020-09-12 21:30:00',
                'color' => '#c40233',
                'description' => 'Reunião com clientes'
            ],
            [
                'title' => 'Ligar para cliente',
                'start' => '2020-09-14',
                'end' => '2020-09-15',
                'color' => '#29f2f2',
                'description' => 'Falar com clientes'
            ]
        ]);
    }
}
