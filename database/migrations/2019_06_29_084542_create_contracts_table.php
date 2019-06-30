<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commercial_name');
            $table->date('dob');
            $table->string('place_of_birth');
            $table->string('corporate_name');
            $table->string('name_and_position_ccr');
            $table->string('type_and_number_of_id');
            $table->string('address');
            $table->string('business_name');
            $table->string('pin_number');
            $table->string('reg_no_of_business');;
            $table->string('phone');
            $table->string('email');

            $table->date('date');
            $table->string('name');
            $table->string('signature_url')->nullable();

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
        Schema::dropIfExists('contracts');
    }
}
