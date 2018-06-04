<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('usersSeeder123');
    }
}

class daintSeeder extends Seeder
{
   
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('daint')->insert([
        	array('hoten'=>'dai123','sodienthoai'=>'123123123'),
        	array('hoten'=>'dai12313','sodienthoai'=>'1231231231123123'),
        	array('hoten'=>'dai123123','sodienthoai'=>'123123123123123'),
        	array('hoten'=>'dai123123','sodienthoai'=>'12312312312312123')
]
        );
    }
}

/**
 * summary
 */
class Images extends Seeder
{
    /**
     * summary
     */
     public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('images')->insert([
        	array('name'=>'asdasd','product_id'=>'1'),
        	array('name'=>'asd21312asd','product_id'=>'2'),
        	array('name'=>'123123','product_id'=>'2'),
        	array('name'=>'68','product_id'=>'3'),
        	array('name'=>'5345','product_id'=>'4'),
        	array('name'=>'456','product_id'=>'3'),
        	array('name'=>'123','product_id'=>'2'),
        	array('name'=>'12312131223','product_id'=>'5'),
        	array('name'=>'123123','product_id'=>'1'),
        	array('name'=>'6786','product_id'=>'4'),
        	array('name'=>'6786','product_id'=>'3')
        	
			]
        );
    }
}


class thanhvienSeeder extends Seeder
{
   
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('thanhvien')->insert([
        	array('user'=>'dai123','pass'=>Hash::make(12345),'level'=>'1'),
        	array('user'=>'dai1','pass'=>Hash::make(12345),'level'=>'1'),
        	array('user'=>'dai2','pass'=>Hash::make(12345),'level'=>'2'),
        	array('user'=>'dai3','pass'=>Hash::make(12345),'level'=>'3'),
        	array('user'=>'dai4','pass'=>Hash::make(12345),'level'=>'1'),
        	
			]
        );
    }
}

class usersSeeder extends Seeder
{
   
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	array('username'=>'dai123','password'=>Hash::make(12345),'level'=>'1'),
        	array('username'=>'dai1','password'=>Hash::make(12345),'level'=>'1'),
        	array('username'=>'dai2','password'=>Hash::make(12345),'level'=>'2'),
        	array('username'=>'dai3','password'=>Hash::make(12345),'level'=>'3'),
        	array('username'=>'dai4','password'=>Hash::make(12345),'level'=>'1'),
        	
			]
        );
    }
}


class usersSeeder123 extends Seeder
{
   
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('user123')->insert([
            array('username'=>'dai123123','password'=>Hash::make(12345),'level'=>'1'),
            array('username'=>'dai1123','password'=>Hash::make(12345),'level'=>'1'),
            array('username'=>'dai2123','password'=>Hash::make(12345),'level'=>'2'),
            array('username'=>'dai3123','password'=>Hash::make(12345),'level'=>'3'),
            array('username'=>'dai4123','password'=>Hash::make(12345),'level'=>'1'),
            
            ]
        );
    }
}
