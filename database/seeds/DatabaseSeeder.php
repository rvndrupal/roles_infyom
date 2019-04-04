<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role; //agragar rol

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         factory(App\Product::class, 100)->create();
         factory(App\User::class, 3)->create();


         Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'name'=>'rodrigo',
            'username'=>'rodrigorvn',
            'email'=>'rodrigo@gmail.com',
            'ur' => 'Unidad 1',
            'ue' => 'Ejecutora 2',
            'password'=>bcrypt('rorro13'),

        ]);


    }
}
