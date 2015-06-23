<?php

class CategorySeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        Category::create(array(
            'id' => 1,
            'name' => 'men'
        ));

        Category::create(array(
            'id' => 2,
            'name' => 'women'
        ));

        Category::create(array(
            'id' => 3,
            'name' => 'kids'
        ));
    }

}