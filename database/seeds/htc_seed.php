<?php

use Illuminate\Database\Seeder;

class htc_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\htc::class, 50)->create();

    }
}