<?php

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
        // $this->call(UsersTableSeeder::class);
        //factory(App\Libro::class, 150)->create();
        //factory(App\Autor::class, 100)->create();
        factory(App\Contacto::class, 100)->create();
    }
}
