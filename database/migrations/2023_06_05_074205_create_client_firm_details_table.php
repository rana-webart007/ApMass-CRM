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
        Schema::create('client_firm_details', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('firm_name');
            $table->string('phone_no')->nullable();
            $table->string('fax_no')->nullable();

            $table->text('street_address_line_1')->nullable();
            $table->text('street_address_line_2')->nullable();
            $table->string('street_city')->nullable();
            $table->string('street_state')->nullable();
            $table->string('street_zip')->nullable();
            
            $table->text('mailing_address_line_1')->nullable();
            $table->text('mailing_address_line_2')->nullable();
            $table->string('mailing_city')->nullable();
            $table->string('mailing_state')->nullable();
            $table->string('mailing_zip')->nullable();
            
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
        Schema::dropIfExists('client_firm_details');
    }
};
