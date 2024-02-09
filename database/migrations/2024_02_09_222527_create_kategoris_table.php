<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('sub_nama');
            $table->text('brand');
            $table->string('kode')->nullable();
            $table->tinyInteger('server_id')->default('0');
            $table->string('status')->default('active');
            $table->string('thumbnail');
            $table->unsignedBigInteger('tipe_id');
            $table->boolean('populer');
            $table->string('petunjuk')->nullable();
            $table->text('ket_layanan')->nullable();
            $table->text('ket_id')->nullable();
            $table->text('placeholder_1');
            $table->text('placeholder_2');
            $table->string('bannerlayanan');
            $table->timestamps();

            $table->foreign('tipe_id')->references('id')->on('tipes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoris');
    }
}



