<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salesagent_name');
            $table->string('salesagent_zone');
            $table->string('salesagent_phone');
            $table->string('pos_name');
            $table->string('pos_address');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('businesspermit_number');
            $table->string('kra_pin');
            $table->string('supervisor_name');
            $table->string('supervisor_phone');
            $table->string('number_cni_supervisor');
            $table->string('cashier1_name');
            $table->string('cashier1_phone');
            $table->string('cni_cashier1');

            $table->string('cashier2_name')->nullable();
            $table->string('cashier2_phone')->nullable();
            $table->string('cni_cashier2')->nullable();

            $table->string('cashier3_name')->nullable();

            $table->string('device_imei');
            $table->string('device_serial_no');

            $table->string('surface_room');
            $table->string('products_type');
            $table->string('core_business');
            $table->string('secondary_activity');

            $table->integer('employees_no');
            $table->boolean('waiting_room');
            $table->boolean('computer_available');

            $table->string('services_to_market');
            $table->string('payment_phone_number');
            $table->string('payment_amount');
            $table->string('payment_goods_refno');

            $table->string('front_image_url')->nullable();
            $table->string('back_image_url')->nullable();
            $table->string('topology_of_point');


            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('identifications');
    }
}
