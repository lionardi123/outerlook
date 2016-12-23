<?php

use Illuminate\Database\Seeder;

class msuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('msusers')->insert([
            'user_email' => 'Terbang@outerlook.com',
            'user_password' => 'asd',
            'user_fullname' => 'Johana James',
            'user_usertypeid' => '1',
            'user_gender' => 'F',
            'user_DOB' => '1996-11-23',
            'user_state' => 'Banten',
            'user_city' => 'Tangerang',
            'user_zip' => '15114',
            'user_address' => 'Jalan Kesandung 2 kali'
        ]);
    }
}
