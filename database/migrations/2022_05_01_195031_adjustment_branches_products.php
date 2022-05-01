<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustmentBranchesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table branches
        Schema::create('branches', function(Blueprint $table){
            $table->id();
            $table->string('branche', 30);
            $table->timestamps();
        });

        //create table product_branches
        Schema::create('product_branches', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('branche_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();

            //foreign_key_constraints
            $table->foreign('branche_id')->references('id')->on('branches');
            $table->foreign('product_id')->references('id')->on('products');
        });

        //removendo colunas da tabela de produtos
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //adicionando colunas da tabela de produtos
        Schema::table('products', function(Blueprint $table){
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
        });

        Schema::dropIfExists('product_branches');

        Schema::dropIfExists('branches');
    }
}
