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
        // $this->call(ProductTableSeeder::class);
        App\producto::create([
            'nombre' => 'Roca Voladora',
            'path' => 'images/roca1.jpg',
            'Existencias' => 3
        ]);
        App\producto::create([
            'nombre' => 'Roca Bebe',
            'path' => 'images/roca1.jpg',
            'Existencias' => 10
        ]);
       
        App\User::create([
            'name' => 'maggie',
            'email' => 'maggie@hotmail.com',
            'password' => Hash::make('123456789'),
        ]);
        App\tarjeta::create([
            'user_id' => 1,
            'numeroTarjeta' => 123456789012,
            'vencimiento' => '01/2020',
            'validacion' => 123
        ]);
    }
}
