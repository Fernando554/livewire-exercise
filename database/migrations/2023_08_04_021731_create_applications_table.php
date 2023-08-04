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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name1');
            $table->string('last_name2')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->date('birthdate');
            $table->string('curp');
            $table->string('rfc');
            $table->string('nss');
            $table->string('nationality');
            $table->string('place_born');
            $table->string('account_number_bank');
            $table->string('bank');
            $table->string('clabe');
            $table->string('infonavit')->nullable();
            $table->string('store_id');
            $table->string('position')->nullable();
            $table->date('date_start');
            $table->string('replacement_employee_id');
            $table->string('replacement_employee_name');
            $table->string('replacement_employee_reasons');
            $table->date('replacement_employee_date');
            $table->string('scholarship');
            $table->tinyInteger('gender');
            $table->tinyInteger('marital_status');
            $table->string('street');
            $table->bigInteger('number');
            $table->string('suburb')->nullable();
            $table->string('colony');
            $table->string('city');
            $table->string('state');
            $table->string('cp');
            $table->string('cp_fiscal')->nullable();
            $table->string('notes')->nullable();
            $table->string('reference')->nullable();
            $table->string('business_id');
            $table->string('src')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
