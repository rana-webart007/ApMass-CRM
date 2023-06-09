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
        Schema::create('trust_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('client_id', 50);
            $table->String('trust_account_id', 100);
            $table->text('trust_account_name');
            $table->text('display_name')->nullable();
            $table->text('bank_name')->nullable();
            $table->text('branch')->nullable();
            $table->text('state')->nullable();
            $table->string('status', 50)->default('open');
            $table->softDeletes();
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
        Schema::dropIfExists('trust_accounts');
    }
};
