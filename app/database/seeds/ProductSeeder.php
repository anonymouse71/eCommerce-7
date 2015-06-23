<?php

class ProductSeeder extends Seeder {

	public function run() {

		DB::table('products')->delete();

		Product::create(array(
             'id' => '1',
             'category_id' => '1',
             'title' => 'Climachill Running Tee',
             'supplier' => 'Adidas',
             'price' => 45.00,
             'promo_price' => 30.99,
             'availability' => 1,
             'description' => 'Classic, long-sleeved shirt with an easy-iron finish. Slim-fit.',
             'details' => '35% cotton, 65% polyester. Machine wash warm Imported',
             'image' => 'public/images/products/adidas1.jpg'
		));

		Product::create(array(
             'id' => '2',
             'category_id' => '1',
             'title' => 'Legend V-Neck Training T-shirt',
             'supplier' => 'Nike',
             'price' => 22.00,
             'promo_price' => 22.00,
             'availability' => 1,
             'description' => 'Classic, long-sleeved shirt with an easy-iron finish. Slim-fit.',
             'details' => '35% cotton, 65% polyester. Machine wash warm Imported',
             'image' => 'public/images/products/nike1.jpg'
		));

		Product::create(array(
             'id' => '3',
             'category_id' => '1',
             'title' => 'Tupper Lake Shirt - Class Fit',
             'supplier' => 'A&amp;F',
             'price' => 49.00,
             'promo_price' => 49.00,
             'availability' => 1,
             'description' => 'Classic, long-sleeved shirt with an easy-iron finish. Slim-fit.',
             'details' => '35% cotton, 65% polyester. Machine wash warm Imported',
             'image' => 'public/images/products/af1.jpg'
		));

		Product::create(array(
             'id' => '4',
             'category_id' => '1',
             'title' => 'COLLARLESS SHIRT',
             'supplier' => 'H&amp;M',
             'price' => 24.95,
             'promo_price' => 14.99,
             'availability' => 1,
             'description' => 'Classic, long-sleeved shirt with an easy-iron finish. Slim-fit.',
             'details' => '35% cotton, 65% polyester. Machine wash warm Imported',
             'image' => 'public/images/products/hm1.jpg'
		));
	}
}