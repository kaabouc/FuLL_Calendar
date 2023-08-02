<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyIdFamileToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('famile_id')->nullable();
            
            // Remplacez 'table_parent' par le nom de la table parente que vous souhaitez référencer
            $table->foreign('famile_id')->references('id')->on('families')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['famile_id']);
            $table->dropColumn('famile_id');
        });
    }
}
