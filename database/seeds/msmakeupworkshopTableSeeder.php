<?php

use Illuminate\Database\Seeder;

class msmakeupworkshopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('msmakeupworkshop')->insert([
        	'workshop_name'=>'Do It Yourself Flawless Makeup',
        	'workshop_avatar'=>'makeupworkshop_avatar1.jpg',
        	'workshop_date' =>'2017-1-14',
        	'workshop_duration' =>3,
        	'workshop_description' => 'Membuat makeup yang sempurna',
        	'workshop_ownerid' => 7,
        	'workshop_quota' => 10,
        	'workshop_price' => 100000,
        	'workshop_city' =>'Tangerang',
        	'workshop_address' =>'Mall of Alam Sutera',
        	]);
        DB::table('msmakeupworkshop')->insert([
        	'workshop_name'=>'The Bulletproof Bride',
        	'workshop_avatar'=>'makeupworkshop_avatar2.jpg',
        	'workshop_date' =>'2017-2-10',
        	'workshop_duration' =>2,
        	'workshop_description' => 'Makeup untuk acara pernikahan',
        	'workshop_ownerid' => 4,
        	'workshop_quota' => 20,
        	'workshop_price' => 220000,
        	'workshop_city' =>'Tangerang',
        	'workshop_address' =>'Summarecon Mall Serpong',
        	]);
        DB::table('msmakeupworkshop')->insert([
        	'workshop_name'=>'Ladies Night',
        	'workshop_avatar'=>'makeupworkshop_avatar3.jpg',
        	'workshop_date' =>'2017-3-8',
        	'workshop_duration' =>7,
        	'workshop_description' => 'Mempelajari teknik makeup caucasians',
        	'workshop_ownerid' => 6,
        	'workshop_quota' => 15,
        	'workshop_price' => 140000,
        	'workshop_city' =>'Jakarta Selatan',
        	'workshop_address' =>'Gedung Bapindo',
        	]);
        DB::table('msmakeupworkshop')->insert([
        	'workshop_name'=>'Makeup 101 with Debra Jonson',
        	'workshop_avatar'=>'makeupworkshop_avatar4.jpg',
        	'workshop_date' =>'2017-1-12',
        	'workshop_duration' =>6,
        	'workshop_description' => 'Makeup dengan Debra Jonson',
        	'workshop_ownerid' => 4,
        	'workshop_quota' => 5,
        	'workshop_price' => 270000,
        	'workshop_city' =>'Jakarta Utara',
        	'workshop_address' =>'Pluit Village Mall',
        	]);
        DB::table('msmakeupworkshop')->insert([
        	'workshop_name'=>'Flawless Finish',
        	'workshop_avatar'=>'makeupworkshop_avatar5.jpg',
        	'workshop_date' =>'2017-2-21',
        	'workshop_duration' =>5,
        	'workshop_description' => 'Teknik Teknik Eyeliner',
        	'workshop_ownerid' => 3,
        	'workshop_quota' => 8,
        	'workshop_price' => 140000,
        	'workshop_city' =>'Jakarta Utara',
        	'workshop_address' =>'Baywalk Mall',
        	]);
    }
}
