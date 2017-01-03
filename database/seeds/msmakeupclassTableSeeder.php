<?php

use Illuminate\Database\Seeder;

class msmakeupclassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('msmakeupclass')->insert([
        	'class_name'=>'Makeup Show Live',
        	'class_avatar'=>'makeupclass_avatar1.jpg',
        	'class_startdate' =>'2017-1-1',
        	'class_enddate' =>'2017-2-1',
        	'class_description' => '6x pertemuan',
        	'class_ownerid' => 4,
        	'class_quota' =>3,
            'class_price' =>120000,
        	'class_city' =>'Jakarta Barat',
        	'class_address' =>'Jalan Lingkar Luar Barat Nomor 2',
        	]);
        DB::table('msmakeupclass')->insert([
        	'class_name'=>'Be Financially Independent',
        	'class_avatar'=>'makeupclass_avatar2.jpg',
        	'class_startdate' =>'2017-1-15',
        	'class_enddate' =>'2017-1-28',
        	'class_description' => 'Tips-tips menghasilkan uang melalui makeup',
        	'class_ownerid' => 3,
        	'class_quota' =>2,
            'class_price' =>90000,
        	'class_city' =>'Jakarta Timur',
        	'class_address' =>'Komplek Perindustrian Kecil Pulogadung',
        	]);
        DB::table('msmakeupclass')->insert([
        	'class_name'=>'Goddess Makeup Class',
        	'class_avatar'=>'makeupclass_card3.jpg',
        	'class_startdate' =>'2017-1-12',
        	'class_enddate' =>'2017-1-30',
        	'class_description' => 'Membuat glamor menjadi lebih indah',
        	'class_ownerid' => 5,
        	'class_quota' =>3,
            'class_price' =>140000,
        	'class_city' =>'Jakarta Barat',
        	'class_address' =>'Citra Raya 4 Nomor 12',
        	]);
        DB::table('msmakeupclass')->insert([
        	'class_name'=>'Make a Statement Come to Vision',
        	'class_avatar'=>'makeupclass_card4.jpg',
        	'class_startdate' =>'2017-2-10',
        	'class_enddate' =>'2017-3-1',
        	'class_description' => 'Mengfokuskan daerah mata',
        	'class_ownerid' => 4,
        	'class_quota' => 2,
            'class_price' =>220000,
        	'class_city' =>'Jakarta Utara',
        	'class_address' =>'Jalan Kelapa Sawit Nomor 2 Komplek Pantai Mutiara',
        	]);
        DB::table('msmakeupclass')->insert([
        	'class_name'=>'Beauty and Makeup How Do I Look?',
        	'class_avatar'=>'makeupclass_card5.jpg',
        	'class_startdate' =>'2017-1-1',
        	'class_enddate' =>'2017-3-1',
        	'class_description' => 'Mempelajari kontur wajah',
        	'class_ownerid' => 6,
        	'class_quota' =>3,
            'class_price' =>240000,
        	'class_city' =>'Jakarta Pusat',
        	'class_address' =>'Jalan Hayam Wuruk Nomor 20',
        	]);
    }
}
