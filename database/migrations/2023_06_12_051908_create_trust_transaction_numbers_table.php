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
        Schema::create('trust_transaction_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->text('account')->nullable();
            $table->text('starting_no')->nullable();
            $table->text('leading_zeros')->nullable();
            $table->text('example_no')->nullable();
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
        Schema::dropIfExists('trust_transaction_numbers');
    }
};
