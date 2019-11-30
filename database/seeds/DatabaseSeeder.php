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
        App\Product::create([
            'nombre' => 'Roca Voladora',
            'path' => 'images/roca1.jpg',
            'Existencias' => 3
        ]);
        App\Product::create([
            'nombre' => 'Roca Bebe',
            'path' => 'images/roca1.jpg',
            'Existencias' => 10
        ]);
        App\User::create([
            'name' => 'maggie',
            'email' => 'maggie@hotmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
