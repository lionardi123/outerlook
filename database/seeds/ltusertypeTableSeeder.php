<?php

use Illuminate\Database\Seeder;

class ltusertypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ltusertype')->insert([
        	'usertype_name' => 'admin'
        	]);

        DB::table('ltusertype')->insert([
        	'usertype_name' => 'normal'
        	]);

        DB::table('ltusertype')->insert([
        	'usertype_name' => 'makeupartist'
        	]);
    }
}
