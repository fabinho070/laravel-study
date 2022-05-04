<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresAddNewColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //indicando novas posições dentro do banco de dados com a instrução after
        Schema::table('fornecedores', function(Blueprint $table){
            $table->string('site', 150)->after('nome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            $table->dropColumn('site');
        });
    }
}
