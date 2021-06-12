<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('user_id'); //sementara
            $table->string('nama_toko');
            $table->string('alamat_toko');
            $table->string('domisili_toko');
            $table->string('marketplace');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}