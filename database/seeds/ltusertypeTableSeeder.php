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
        	'usertype_name' => 'Administrator'
        	]);

        DB::table('ltusertype')->insert([
        	'usertype_name' => 'Member'
        	]);

        DB::table('ltusertype')->insert([
        	'usertype_name' => 'Make Up Artist'
        	]);
    }
}
