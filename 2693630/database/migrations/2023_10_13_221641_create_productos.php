<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',50);
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedInteger('id_marca');
            $table->string('descripcion',50);
            $table->enum('unidad_medida',['unidad','otro']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva',4,2);
            $table->decimal('precio_unitario',20,2);
            $table->unsignedSmallInteger('stock') ;
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
