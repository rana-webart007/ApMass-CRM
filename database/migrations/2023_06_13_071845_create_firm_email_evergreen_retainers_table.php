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
        Schema::create('firm_email_evergreen_retainers', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->text('email_subject')->nullable();
            $table->text('ever_green_email_body')->nullable();
            $table->text('email_body_placeholder')->nullable();
            $table->text('send_copy_of_email_to_user')->nullable();
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
        Schema::dropIfExists('firm_email_evergreen_retainers');
    }
};
