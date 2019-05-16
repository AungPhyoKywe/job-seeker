<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "hasib",
            'email' => 'hasib@unifiedtransform.com',
            'password' => bcrypt('secret'),
            'role_id' => '1',
           
        ]);
    }
}
