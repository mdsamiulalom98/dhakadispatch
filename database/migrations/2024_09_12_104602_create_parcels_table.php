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
        Schema::create('parcels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_id')->length(6)->index();
            $table->string('parcel_id')->length(10)->index();
            $table->integer('service_id')->length(10)->index();
            $table->integer('zone_id')->length(10)->index();
            $table->string('name')->length(255);
            $table->string('phone')->length(11)->index();
            $table->string('address')->length(255);
            $table->integer('district_id')->length(6)->index();
            $table->integer('area_id')->length(6)->index();
            $table->integer('cod')->length(8);
            $table->integer('payable_amount')->length(8);
            $table->integer('delivery_charge')->length(8);
            $table->integer('cod_charge')->length(8);
            $table->integer('discount')->length(8)->nullable();
            $table->string('weight')->length(6);
            $table->string('merchant_invoice')->length(8)->nullable();
            $table->string('payment_status')->length(25)->nullable();
            $table->string('note')->length(255)->nullable();
            $table->tinyInteger('status')->length(4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
