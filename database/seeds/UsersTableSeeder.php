<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' 		=> 'Piru',
        	'email' 	=> 'piruville@gmail.com',
        	'password' 	=> bcrypt('password'),
        	'role' 		=> 'contributor'
        ]);

        User::create([
        	'name' 		=> 'Dev',
        	'email' 	=> 'dev@example.com',
        	'password' 	=> bcrypt('password'),
        	'role' 		=> 'contributor'
        ]);

        User::create([
        	'name' 		=> 'Scholar',
        	'email' 	=> 'scholar@example.com',
        	'password' 	=> bcrypt('password'),
        	'role' 		=> 'scholar'
        ]);
    }
}
