<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImgTn1ToColorProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('color_product', function(Blueprint $table)
		{
			$table->string('img_tn1')->nullable();
			$table->string('img_tn2')->nullable();
			$table->string('img_tn3')->nullable();
			$table->string('img_md1')->nullable();
			$table->string('img_md2')->nullable();
			$table->string('img_md3')->nullable();
			$table->string('img_lg1')->nullable();
			$table->string('img_lg2')->nullable();
			$table->string('img_lg3')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('color_product', function(Blueprint $table)
		{
			$table->dropColumn('img_tn1');
			$table->dropColumn('img_tn2');
			$table->dropColumn('img_tn3');
			$table->dropColumn('img_md1');
			$table->dropColumn('img_md2');
			$table->dropColumn('img_md3');
			$table->dropColumn('img_lg1');
			$table->dropColumn('img_lg2');
			$table->dropColumn('img_lg3');
		});
	}

}
