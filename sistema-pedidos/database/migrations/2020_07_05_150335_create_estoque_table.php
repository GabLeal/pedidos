<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateESTOQUETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_e_s_t_o_q_u_e', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo')->unique();
            $table->string('description');
            $table->integer('quantity')->nullable();
            $table->date('delivery_date');
            $table->date('vali_date');
            $table->integer('minimum_stock')->nullable();
            $table->integer('maximum_stock');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_e_s_t_o_q_u_e');
    }
}
