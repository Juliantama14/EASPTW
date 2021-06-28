<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Julian Haruntama (1461900215)',
                'email' => 'julianharuntama@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'Admin'
            ],
            [
                'id' => 2,
                'name' => 'Julian1',
                'email' => 'julian01@gmail.com',
                'password' => Hash::make('julian01'),
                'role' => 'Customer'
            ],
            [
                'id' => 3,
                'name' => 'Julian2',
                'email' => 'julian02@gmail.com',
                'password' => Hash::make('julian02'),
                'role' => 'Customer'
            ],
            [
                'id' => 4,
                'name' => 'Julian3',
                'email' => 'Julian03@gmail.com',
                'password' => Hash::make('julian03'),
                'role' => 'Customer'
            ],
        ]);
    }
}
