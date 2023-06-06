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
        Schema::create('client_firm_staff', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->text('name');
            $table->text('role');
            $table->string('email', 150);
            $table->string('phone_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('time_entries')->nullable();
            $table->string('former_staff')->nullable();
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
        Schema::dropIfExists('client_firm_staff');
    }
};
