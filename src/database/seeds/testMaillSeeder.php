<?php

use Illuminate\Database\Seeder;

class testMaillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TestMail')->insert([
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 1'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 2'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 3'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 4'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 5'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 6'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 7'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 8'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 9'),
        	array('email'=>'daint6997@gmail.com','user'=>'ahihi do ngoc 10')
        	
        ]
        );
    }
}
