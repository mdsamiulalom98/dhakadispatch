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
        Schema::create('merchant_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_id')->length(6)->index();
            $table->integer('bkash')->length(11)->nullable();
            $table->integer('nagad')->length(11)->nullable();
            $table->bigInteger('rocket')->length(12)->nullable();
            $table->integer('bank_id')->length(6)->nullable();
            $table->string('branch')->length(155)->nullable();
            $table->integer('routing')->length(11)->nullable();
            $table->string('account_name')->length(155)->nullable();
            $table->string('default_method')->length(25)->nullable();
            $table->string('payment_type')->length(55)->nullable();
            $table->bigInteger('account_number')->length(22)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant_methods');
    }
};
