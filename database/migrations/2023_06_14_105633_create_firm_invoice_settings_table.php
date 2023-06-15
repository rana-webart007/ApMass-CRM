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
        Schema::create('firm_invoice_settings', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->text('einvoice_settings')->nullable();
            $table->text('einvoice_line_items')->nullable();
            $table->text('template_settings')->nullable();
            $table->text('custom_template_name')->nullable();
            $table->text('basic_logo')->nullable();
            $table->text('firm_name_font')->nullable();
            $table->text('firm_name_font_size')->nullable();
            $table->text('heading_font')->nullable();
            $table->text('body_font')->nullable();
            $table->text('firm_details')->nullable();
            $table->text('letterhead_layout')->nullable();
            $table->text('page_top_margin')->nullable();
            $table->text('page_bottom_margin')->nullable();
            $table->text('page_left_margin')->nullable();
            $table->text('page_right_margin')->nullable();
            $table->text('grid_style')->nullable();
            $table->text('payment_due')->nullable();
            $table->text('invoice_title')->nullable();
            $table->text('invoice_sub_title')->nullable();
            $table->text('time_and_fees')->nullable();
            $table->text('time_single_line_description')->nullable();
            $table->text('show_staff_initials')->nullable();
            $table->text('show_rates')->nullable();
            $table->text('show_hours')->nullable();
            $table->text('show_hours_summary')->nullable();
            $table->text('show_fee_total')->nullable();
            $table->text('show_fee_total_summary')->nullable();
            $table->text('show_evergreen_retainer')->nullable();
            $table->text('show_due_date')->nullable();
            $table->text('expenses')->nullable();
            $table->text('expenses_single_line_description')->nullable();
            $table->text('expenses_append_list_of_time')->nullable();
            $table->text('interest')->nullable();
            $table->text('interest_custom_text')->nullable();
            $table->text('surcharge_type')->nullable();
            $table->text('surcharge_apply_to')->nullable();
            $table->text('surcharge_label_invoice')->nullable();
            $table->text('non_billable_items')->nullable();
            $table->text('notes')->nullable();
            $table->text('sig_img')->nullable();
            $table->text('signature_name')->nullable();
            $table->text('show_prior_balance')->nullable();
            $table->text('show_payment_summary')->nullable();
            $table->text('show_invoice_summary')->nullable();
            $table->text('show_personal_fee_summary')->nullable();
            $table->text('show_account_summary')->nullable();
            $table->text('show_description_entries')->nullable();
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
        Schema::dropIfExists('firm_invoice_settings');
    }
};
