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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->String('chipset');
            $table->String('image_url');
            $table->String('form_factor');
            $table->String('desc');
            $table->integer('stok');
            $table->integer('ram_slot');
            $table->integer('min_ram_speed');
            $table->integer('max_ram_speed');
            $table->integer('sata_slot');
            $table->integer('vga_slot');
            $table->integer('nvme_slot');
            $table->integer('price');          
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
        Schema::dropIfExists('motherboards');
    }
};
