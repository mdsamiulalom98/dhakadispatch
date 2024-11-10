<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pickup_id')->length(12)->index();
            $table->integer('type')->length(4);
            $table->string('address')->length(255);
            $table->integer('district_id')->length(6)->index();
            $table->integer('area_id')->length(6)->index();
            $table->integer('merchant_id');
            $table->string('estimedparcel');
            $table->integer('rider_id')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->length('10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickups');
    }
};
