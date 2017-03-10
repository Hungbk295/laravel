<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		 $this->call('ProductTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {

	public function run()
	{
		DB::table('product')->insert([
			array('name'=>'quan da banh','price'=>'50000','cate_id'=>'2'),
			array('name'=>'quan tenis','price'=>'55000','cate_id'=>'2'),
			array('name'=>'quan vo thuat','price'=>'52000','cate_id'=>'2'),
			array('name'=>'quan cau long','price'=>'60000','cate_id'=>'2'),
			array('name'=>'quan di bien 1','price'=>'600000','cate_id'=>'2'),
			array('name'=>'quan di bien 2','price'=>'500000','cate_id'=>'2'),
			array('name'=>'quan di bien 3','price'=>'300000','cate_id'=>'2'),


		]);
	}

}
