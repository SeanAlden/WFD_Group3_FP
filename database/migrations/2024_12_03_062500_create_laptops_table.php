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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->integer('serial_num')->unsigned();
            $table->string('laptop_type', 100);
            $table->string('laptop_brand', 100);
            $table->integer('laptop_price')->unsigned();
            $table->string('processor', 100);
            $table->string('graphics', 100);
            $table->string('display', 100);
            $table->string('memory', 100);
            $table->string('storage', 100);
            $table->string('io_ports_status', 100);
            $table->string('battery', 100);
            $table->string('camera', 100);
            $table->string('audio', 100);
            $table->unsignedBigInteger('category_id');
            $table->integer('laptop_stock')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
