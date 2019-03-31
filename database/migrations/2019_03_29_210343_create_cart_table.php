<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('carts', function (Blueprint $table) {
            $table->integer('brood')->unsigned();
            $table->foreign('type')->references('id')->on('items');

            $table->integer('beleg')->unsigned()->nullable();
            $table->foreign('type')->references('id')->on('items');
            $table->integer('saus')->unsigned()->nullable();
            $table->foreign('type')->references('id')->on('items');
            $table->integer('smos')->unsigned()->nullable();;
            $table->foreign('type')->references('id')->on('items');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
