<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDeliveryStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_delivery_states', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_package_id');
            $table->bigInteger('delivery_status');
            $table->text('note')->nullable();
            $table->date('date')->nullable();
            $table->bigInteger("created_by")->nullable();
            $table->foreign("created_by")->on("users")->references("id");
            $table->bigInteger("updated_by")->nullable();
            $table->foreign("updated_by")->on("users")->references("id");
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
        Schema::dropIfExists('order_delivery_states');
    }
}
