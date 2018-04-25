<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->renameColumn('business_id', 'business_men_in');

        });
        Schema::table('menus', function (Blueprint $table) {
          $table->integer('shop_id')->unsigned();
          $table->foreign('shop_id')->references('id')->on('menus');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('change');
    }
}
