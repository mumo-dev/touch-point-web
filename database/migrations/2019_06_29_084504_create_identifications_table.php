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
            $table->string('salesagent_name')->nullable();
            $table->string('salesagent_zone')->nullable();
            $table->string('salesagent_phone')->nullable();
            $table->string('pos_name')->nullable();
            $table->string('pos_address')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('businesspermit_number')->nullable();
            $table->string('kra_pin')->nullable();
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

            $table->string('device_imei')->nullable();
            $table->string('device_serial_no')->nullable();

            $table->string('surface_room')->nullable();
            $table->string('products_type')->nullable();
            $table->string('core_business')->nullable();
            $table->string('secondary_activity')->nullable();

            $table->integer('employees_no')->nullable();
            $table->boolean('waiting_room')->nullable();
            $table->boolean('computer_available')->nullable();

            $table->string('services_to_market')->nullable();
            $table->string('payment_phone_number')->nullable();
            $table->string('payment_amount')->nullable();;
            $table->string('payment_goods_refno')->nullable();;

            $table->string('front_image_url')->nullable();
            $table->string('back_image_url')->nullable();
            $table->string('topology_of_point')->nullable();


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
