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
            $table->string('code');
            $table->string('description',100);
            $table->enum('unidad_medida',['UNIDAD','otro']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva',20,2);
            $table->decimal('precio_unitario',20,2);
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('brands')->onDelete('cascade');
            $table->smallInteger('stock');
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
