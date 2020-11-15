<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); //pk, int, autoincr.
            $table->string("nombre", 100)->unique();
            $table->text("descripcion");
            $table->decimal("precio", 10, 2);
            $table->timestamps();//created_at updated_at
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); //pk, int, autoincr.
            $table->string("nombre", 100)->unique();
            $table->text("descripcion");
            $table->string("razon_social", 100)->nullable();
            $table->timestamps();//created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        Schema::dropIfExists('clientes');
    }
}
