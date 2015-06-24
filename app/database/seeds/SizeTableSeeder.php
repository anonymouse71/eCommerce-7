<?php

class SizeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sizes')->delete();

		Size::create(array(
            'id' => 1,
            'size' => 'S',
            'squence' => 10
		));

		Size::create(array(
            'id' => 2,
            'size' => 'M',
            'squence' => 20
		));

		Size::create(array(
            'id' => 3,
            'size' => 'L',
            'squence' => 30
		));

		Size::create(array(
            'id' => 4,
            'size' => 'XL',
            'squence' => 40
		));

		Size::create(array(
            'id' => 5,
            'size' => 'XXL',
            'squence' => 50
		));

		Size::create(array(
            'id' => 6,
            'size' => 'XXXL',
            'squence' => 60
		));

		DB::table('product_size')->delete();

        DB::table('product_size')->insert(array(
            array('id' => 1, 'product_id' => 4, 'size_id' => 1),
            array('id' => 2, 'product_id' => 4, 'size_id' => 2),
            array('id' => 3, 'product_id' => 4, 'size_id' => 3),
            array('id' => 4, 'product_id' => 4, 'size_id' => 4),
            array('id' => 5, 'product_id' => 4, 'size_id' => 5),
            array('id' => 6, 'product_id' => 4, 'size_id' => 6),
            
            array('id' => 7, 'product_id' => 3, 'size_id' => 1),
            array('id' => 8, 'product_id' => 3, 'size_id' => 2),
            array('id' => 9, 'product_id' => 3, 'size_id' => 3),
            array('id' => 10, 'product_id' => 3, 'size_id' => 4),
            array('id' => 11, 'product_id' => 3, 'size_id' => 5),
            array('id' => 12, 'product_id' => 3, 'size_id' => 6)
        ));
	}

}