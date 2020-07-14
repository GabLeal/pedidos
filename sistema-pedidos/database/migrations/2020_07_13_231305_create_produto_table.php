<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('categoria');
            $table->string('name')->unique();
            $table->string('ingredientes')->nullable();
            $table->integer('informacoes_nutricionais');
            $table->integer('preco');
            $table->string('imagem')->nullable();
                      
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
