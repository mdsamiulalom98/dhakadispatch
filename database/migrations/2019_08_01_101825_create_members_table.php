<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->length(16)->unique();
            $table->string('email')->length(55)->unique()->nullable();
            $table->string('password')->length(55);
            $table->string('image')->default('public/uploads/default/user.png');
            $table->integer('district')->length(2)->nullable();
            $table->string('thana')->length(2)->nullable();
            $table->string('address')->nullable();
            $table->text('about')->nullable();
            $table->string('facebook')->length(55)->nullable();
            $table->string('whatsapp')->length(55)->nullable();
            $table->integer('membership')->length(2)->nullable();
            $table->integer('verify')->length(8);
            $table->integer('forgot')->length(8);
            $table->tinyInteger('agree');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('members');
    }
}
