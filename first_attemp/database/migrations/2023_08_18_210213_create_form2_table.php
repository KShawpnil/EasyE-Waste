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
        Schema::create('form2', function (Blueprint $table) {
            $table->id('form2_id');
            $table->integer('user_id');
            $table->string('cr');
            $table->integer('cr_rank');
            $table->integer('waste_management');
            $table->integer('waste_minization');
            $table->integer('waste_collection');
            $table->integer('product_durability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form2');
    }
};
