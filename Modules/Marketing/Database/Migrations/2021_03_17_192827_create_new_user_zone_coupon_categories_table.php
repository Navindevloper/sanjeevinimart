<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewUserZoneCouponCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_user_zone_coupon_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('new_user_zone_id');
            $table->bigInteger('category_id');
            $table->integer('position')->nullable();
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
        Schema::dropIfExists('new_user_zone_coupon_categories');
    }
}
