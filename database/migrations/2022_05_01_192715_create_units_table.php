<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5); //cm, mm, kg
            $table->string('descricao', 30); //centimetros, milimetros, kilos
            $table->timestamps();
        });

        //Adicionando relacionamento com a tabela de produtos e a produtos_detalhes
        Schema::table('products', function(Blueprint $table) {
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');
        });

        Schema::table('products_details', function(Blueprint $table) {
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remover o relacionamento com a tabela de produtos e a produtos_detalhes

        Schema::table('products', function(Blueprint $table) {
            //remover Fk
            $table->dropForeign('products_unit_id_foreign');

            //remover coluna
            $table->dropColumn('unit_id');
        });

        Schema::table('products_details', function(Blueprint $table) {
            //remover Fk
            $table->dropForeign('products_details_unit_id_foreign');

            //remover coluna
            $table->dropColumn('unit_id');
        });

        Schema::dropIfExists('units');
    }
}
