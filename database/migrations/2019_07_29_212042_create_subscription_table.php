<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('box_id');
            $table->foreign('box_id')->references('id')->on('boxes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('delivery_method_id');
            $table->foreign('delivery_method_id')->references('id')->on('delivery_methods')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('subscription_type_id');
            $table->foreign('subscription_type_id')->references('id')->on('subscription_types')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('status')->comment="0->Active; 1->paused; 2->delivered";
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
        Schema::dropIfExists('subscriptions');
    }
}
