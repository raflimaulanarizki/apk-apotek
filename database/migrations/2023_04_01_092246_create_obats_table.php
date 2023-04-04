<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('kode_obat',30);
            $table->string('nama_obat', 50);
            $table->string('merk', 50);
            $table->string('jenis', 50);
            $table->string('satuan', 30);
            $table->string('golongan')->nullable();
            $table->string('kemasan')->nullable();
            $table->float('harga_jual',0,0)->default(0);
            $table->integer('stok');
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
        Schema::dropIfExists('obats');
    }
}
