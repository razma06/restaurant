<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 50);
            $table->string('category', 15)->default('hamburger');
            $table->float('price');
            $table->smallInteger('calories');
            $table->string('image', 255)->default('https://mcdonalds.ge/fd636844878e-resized.png');
            $table->string('description', 5000)->nullable(true);
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
        Schema::dropIfExists('menus');
    }
}
