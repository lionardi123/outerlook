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
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Johana James',
            'user_usertypeid' => '1',
            'user_gender' => 'F',
            'user_avatar' => 'user_avatar1.jpg',
            'user_cardimage'=>'user_card1.jpg',
            'user_phone'=>'08123456789',
            'user_DOB' => '1996-11-23',
            'user_city' => 'Tangerang',
            'user_address' => 'Jalan Kesandung 2 kali',
            'user_about' =>'gua ganteng',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'lionardi@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Yulius Lionardi',
            'user_usertypeid' => '2',
            'user_gender' => 'M',
            'user_avatar' => 'user_avatar2.jpg',
            'user_cardimage'=>'user_card2.jpg',
            'user_phone'=>'08123456789',
            'user_DOB' => '1996-11-23',
            'user_city' => 'Tangerang',
            'user_address' => 'Jalan Kesandung 2 kali',
            'user_about' =>'gua ganteng',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'lionardi123@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Alberto Martin',
            'user_usertypeid' => '3',
            'user_gender' => 'M',
            'user_avatar' => 'user_avatar3.jpg',
            'user_cardimage'=>'user_card3.jpg',
            'user_phone'=>'08123456789',
            'user_DOB' => '1996-11-23',
            'user_city' => 'Tangerang',
            'user_address' => 'Jalan Kesandung 2 kali',
            'user_about' =>'gua ganteng',
        ]);
    }
}
