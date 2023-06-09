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
        Schema::create('trust_and_operating_checks', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->String('account');
            $table->text('trust_check_print')->nullable();
            $table->text('trust_check_style')->nullable();
            $table->text('trust_printing_method')->nullable();
            $table->text('operating_check_print')->nullable();
            $table->text('vendor_address_on_check')->nullable();
            $table->text('operating_check_style')->nullable();
            $table->text('operating_printing_method')->nullable();
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
        Schema::dropIfExists('trust_and_operating_checks');
    }
};
