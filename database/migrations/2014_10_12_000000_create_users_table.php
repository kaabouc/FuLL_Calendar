<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('prenom');
            $table -> string('nationalite');
            $table->date('date_naissance');
            $table->string('sex');
            $table->string('image_user', 2048)->nullable();
            $table->string('CIN')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('famile_id')->nullable();
            
            // Remplacez 'table_parent' par le nom de la table parente que vous souhaitez référencer
            $table->foreign('famile_id')->references('id')->on('families')->onDelete('cascade');
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
        Schema::dropIfExists('users');
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['famile_id']);
            $table->dropColumn('famile_id');
        });
    }
}
