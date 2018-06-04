<?php

use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        	array('title'=>'ahihi1','author'=>'tg1'),
        	array('title'=>'ahihi2','author'=>'tg1'),
        	array('title'=>'ahihi3','author'=>'tg1'),
        	array('title'=>'ahihi4','author'=>'tg1'),
        	array('title'=>'ahihi5','author'=>'tg1'),
        	array('title'=>'ahihi6','author'=>'tg1'),
        	array('title'=>'ahihi7','author'=>'tg1'),
        	array('title'=>'ahihi8','author'=>'tg1'),
        	array('title'=>'ahihi9','author'=>'tg1'),
        	array('title'=>'ahihi123','author'=>'tg1'),
        	array('title'=>'ahihi123','author'=>'tg1'),
        	array('title'=>'ahihi123123123','author'=>'tg1'),
        	array('title'=>'ahihi3','author'=>'tg1'),
        	array('title'=>'ahihi4','author'=>'tg1'),
        	array('title'=>'ahihi5','author'=>'tg1'),
        	array('title'=>'ahihi1','author'=>'tg1'),
        	array('title'=>'ahihi7','author'=>'tg1'),
        	array('title'=>'ahihi8','author'=>'tg1'),
        	array('title'=>'ahihi9','author'=>'tg1'),
        	array('title'=>'ahihi0','author'=>'tg1'),
        	array('title'=>'ahihi-','author'=>'tg1'),
        	array('title'=>'ahihi78','author'=>'tg1'),
        	array('title'=>'ahihi1231','author'=>'tg1'),
        	array('title'=>'ahihi11','author'=>'tg1'),
        ]);
    }
}
