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
            'user_phone'=>'0812345234',
            'user_DOB' => '1998-11-20',
            'user_city' => 'Tangerang',
            'user_address' => 'Cluster 1A Gading Serpong',
            'user_about' =>'Looking for makeup artist',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'lionardi123@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Alberto Martin',
            'user_usertypeid' => '3',
            'user_gender' => 'M',
            'user_avatar' => 'user_avatar3.jpg',
            'user_cardimage'=>'user_card3.jpg',
            'user_phone'=>'0847236123',
            'user_DOB' => '2000-10-10',
            'user_city' => 'Jakarta Utara',
            'user_address' => 'Jalan Mangga Besar Nomor 2',
            'user_about' =>'Life is not as easy as it seems',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'poorlable@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Jennifer',
            'user_usertypeid' => '3',
            'user_gender' => 'F',
            'user_avatar' => 'user_avatar4.jpg',
            'user_cardimage'=>'user_card4.jpg',
            'user_phone'=>'089813241',
            'user_DOB' => '1980-4-20',
            'user_city' => 'Jakarta Selatan',
            'user_address' => 'Senayan Square Nomor 2',
            'user_about' =>'Every touch matters',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'mixer@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Marion',
            'user_usertypeid' => '3',
            'user_gender' => 'F',
            'user_avatar' => 'user_avatar5.jpg',
            'user_cardimage'=>'user_card5.jpg',
            'user_phone'=>'0874283213',
            'user_DOB' => '1994-11-21',
            'user_city' => 'Tangerang',
            'user_address' => 'Cimone Indah Blok 2 Nomor 14',
            'user_about' =>'Perfection is everything',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'santa@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Santa Claus',
            'user_usertypeid' => '3',
            'user_gender' => 'M',
            'user_avatar' => 'user_avatar6.jpg',
            'user_cardimage'=>'user_card6.jpg',
            'user_phone'=>'081247231',
            'user_DOB' => '1992-8-14',
            'user_city' => 'Jakarta Barat',
            'user_address' => 'Komplek Greenlake Australia Nomor 34',
            'user_about' =>'Certified MUA',
        ]);
        DB::table('msusers')->insert([
            'user_email' => 'fiera@outerlook.com',
            'user_password' => bcrypt('asdasd'),
            'user_fullname' => 'Fiera Bella',
            'user_usertypeid' => '3',
            'user_gender' => 'F',
            'user_avatar' => 'user_avatar7.jpg',
            'user_cardimage'=>'user_card7.jpg',
            'user_phone'=>'0824723123',
            'user_DOB' => '1992-2-20',
            'user_city' => 'Tangerang',
            'user_address' => 'Jalan Pasar Lama Blok B Nomor 8',
            'user_about' =>'Accept all kinds of orders!',
        ]);
    }
}
