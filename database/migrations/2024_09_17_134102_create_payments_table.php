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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index()->length(8);
            $table->string('user_type')->index()->length(55);
            $table->string('invoice_id')->index()->length(22);
            $table->integer('cod')->length(6);
            $table->integer('payable_amount')->length(6);
            $table->integer('delivery_charge')->length(6);
            $table->integer('cod_charge')->length(6);
            $table->string('status')->length(55);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
