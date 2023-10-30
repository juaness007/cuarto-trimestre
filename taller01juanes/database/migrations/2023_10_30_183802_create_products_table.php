<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',50);
            $table->string('descripcion',100);
            $table->enum('unidad_medida',['unidad', 'otro']);
            $table->tinyInteger('1');
            $table->decimal('porcentaje_iva', $precision = 20, $scale = 2);
            $table->decimal('precio_unictario', $precision = 20, $scale = 2);
            $table->foreignId('id_categoria')->constrained('categories')->onDelete ('cascade');
            $table->foreignId('id_marca')->constrained('brands')->onDelete ('cascade');
            $table->unsignedSmallInteger('stock');
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
        Schema::dropIfExists('products');
    }
};
