<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketLayananTable extends Migration
{
    public function up()
    {
        Schema::create('paket_layanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_id')->constrained('pakets')->onDelete('cascade');
            $table->foreignId('layanan_id')->constrained('layanans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paket_layanan');
    }
}
