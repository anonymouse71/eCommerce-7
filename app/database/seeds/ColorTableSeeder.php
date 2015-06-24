<?php

class ColorTableSeeder extends Seeder {

	public function run()
	{
		DB::table('colors')->delete();

		Color::create(array(
            'id' => '1',
            'color' => 'lightblue'
		));

		Color::create(array(
            'id' => '2',
            'color' => 'blue'
		));

		Color::create(array(
            'id' => '3',
            'color' => 'grey'
		));

        Color::create(array(
            'id' => '4',
            'color' => 'red'
        ));

		DB::table('color_product')->delete();

        DB::table('color_product')->insert(array(
            array(
                'id' => 4, 
                'product_id' => 4, 
                'color_id' => 1,
                'img_tn1' => 'images/details/hm1_lightblue_tn.jpeg',
                'img_tn2' => 'images/details/hm2_lightblue_tn.jpeg',
                'img_tn3' => 'images/details/hm3_lightblue_tn.jpeg',
                'img_md1' => 'images/details/hm1_lightblue.jpeg',
                'img_md2' => 'images/details/hm2_lightblue.jpeg',
                'img_md3' => 'images/details/hm3_lightblue.jpeg',
                'img_lg1' => 'images/details/hm1_lightblue_hr.jpeg',
                'img_lg2' => 'images/details/hm2_lightblue_hr.jpeg',
                'img_lg3' => 'images/details/hm3_lightblue_hr.jpeg'
            ),
            array(
            	'id' => 5, 
            	'product_id' => 4, 
            	'color_id' => 2,
            	'img_tn1' => 'images/details/hm1_blue_tn.jpeg',
                'img_tn2' => 'images/details/hm2_blue_tn.jpeg',
                'img_tn3' => 'images/details/hm3_blue_tn.jpeg',
                'img_md1' => 'images/details/hm1_blue.jpeg',
                'img_md2' => 'images/details/hm2_blue.jpeg',
                'img_md3' => 'images/details/hm3_blue.jpeg',
                'img_lg1' => 'images/details/hm1_blue_hr.jpeg',
                'img_lg2' => 'images/details/hm2_blue_hr.jpeg',
                'img_lg3' => 'images/details/hm3_blue_hr.jpeg'
            ),
            array(
            	'id' => 6, 
            	'product_id' => 4, 
            	'color_id' => 3,
            	'img_tn1' => 'images/details/hm1_grey_tn.jpeg',
                'img_tn2' => 'images/details/hm2_grey_tn.jpeg',
                'img_tn3' => 'images/details/hm3_grey_tn.jpeg',
                'img_md1' => 'images/details/hm1_grey.jpeg',
                'img_md2' => 'images/details/hm2_grey.jpeg',
                'img_md3' => 'images/details/hm3_grey.jpeg',
                'img_lg1' => 'images/details/hm1_grey_hr.jpeg',
                'img_lg2' => 'images/details/hm2_grey_hr.jpeg',
                'img_lg3' => 'images/details/hm3_grey_hr.jpeg'
            ),
            array(
                'id' => 1, 
                'product_id' => 3, 
                'color_id' => 3,
                'img_tn1' => 'images/details/hm1_grey_tn.jpeg',
                'img_tn2' => 'images/details/hm2_grey_tn.jpeg',
                'img_tn3' => 'images/details/hm3_grey_tn.jpeg',
                'img_md1' => 'images/details/hm1_grey.jpeg',
                'img_md2' => 'images/details/hm2_grey.jpeg',
                'img_md3' => 'images/details/hm3_grey.jpeg',
                'img_lg1' => 'images/details/hm1_grey_hr.jpeg',
                'img_lg2' => 'images/details/hm2_grey_hr.jpeg',
                'img_lg3' => 'images/details/hm3_grey_hr.jpeg'
            ),
            array(
                'id' => 2, 
                'product_id' => 3, 
                'color_id' => 4,
                'img_tn1' => 'images/details/hm1_grey_tn.jpeg',
                'img_tn2' => 'images/details/hm2_grey_tn.jpeg',
                'img_tn3' => 'images/details/hm3_grey_tn.jpeg',
                'img_md1' => 'images/details/hm1_grey.jpeg',
                'img_md2' => 'images/details/hm2_grey.jpeg',
                'img_md3' => 'images/details/hm3_grey.jpeg',
                'img_lg1' => 'images/details/hm1_grey_hr.jpeg',
                'img_lg2' => 'images/details/hm2_grey_hr.jpeg',
                'img_lg3' => 'images/details/hm3_grey_hr.jpeg'
            )

        ));
	}

}