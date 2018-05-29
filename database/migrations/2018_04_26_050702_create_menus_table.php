<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->integer('shop_id')->unsigned();
          $table->foreign('shop_id')->references('id')->on('shops');
          $table->string('menu_name');
          $table->longtext('menu_photo');
          $table->integer('menu_price');
          $table->string('menu_content');
          $table->timestamps();
          $table->softDeletes();
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
