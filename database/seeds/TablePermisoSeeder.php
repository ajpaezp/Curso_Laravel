<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablePermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class)->times(10)->create();
    }
}
