<?php

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
        DB::table('users')->insert([
            'member_id' =>'admin',
            'email' => 'a.karmakar@wbpdcl.co.in',
            'password' => bcrypt('secret'),
            'role' => 'admin',
        ]);
    }
}
