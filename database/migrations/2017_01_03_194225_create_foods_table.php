<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('food_name');
            $table->decimal('water');
            $table->decimal('proteins');
            $table->decimal('fats');
            $table->decimal('carbs');
            $table->integer('calories');
            $table->timestamps();
        });

         // foreign keys
        $table->integer('type_id')->unsigned()->nullable();

        $table->foreign()
            ->reference('id')
            ->on('types');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('foods');
        Schema::enableForeignKeyConstraints();
    }
}
