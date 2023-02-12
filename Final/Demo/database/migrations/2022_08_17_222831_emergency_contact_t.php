<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_contact_t', function (Blueprint $table) {
            $table->BigInteger('friend_id');
            $table->BigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user_t')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergency_contact_t');
    }
};
