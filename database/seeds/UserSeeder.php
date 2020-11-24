<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Maimunah',
            'email' => 'maimunah@gmail.com',
            'password' => '12345678',
            'address' => 'Jakarta',
            'phone' => '08121314',
            'gender' => 'Female',
        ]);
        
    }
}
