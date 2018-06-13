<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateProductsTable.
 */
class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('title');
			$table->float('price', 8, 2);
			$table->string('manual');
			$table->string('image');
			$table->timestamp('event_start')->useCurrent();
			$table->timestamp('event_end')->useCurrent();
			$table->text('description');
			$table->text('spec');
			$table->smallInteger('status')->default(1);
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}
}
