<?php

use Illuminate\Database\Seeder;

class DatatableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Datatable::class, 50)->create();
    }
}
