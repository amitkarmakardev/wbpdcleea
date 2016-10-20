<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'member_id' =>'admin',
            'member_since' =>'2016-10-20',
            'name' => 'Administrator',
            'address' => 'WBPDCLEEA',
            'attached_to' => 'BKTPS',
            'contact_no' => '9999999999',
            'designation' => 'General Member'
        ]);
    }
}
