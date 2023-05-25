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
        Schema::create('person_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->text('name');
            $table->string('email');
            $table->text('home');
            $table->text('cell');
            $table->text('address_line_1');
            $table->text('address_line_2')->nullable();
            $table->text('state');
            $table->string('city');
            $table->string('zip');
            $table->string('add_to_existing_org')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_contacts');
    }
};
