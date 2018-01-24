<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 50);
            $table->string('address');
            $table->string('city');
            $table->char('state', 2);
            $table->integer('zip');
            $table->boolean('changingtable')->default(0);
            $table->boolean('boosterseats')->default(0);
            $table->boolean('familybathroom')->default(0);
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
        Schema::dropIfExists('restaurants');
    }
}
