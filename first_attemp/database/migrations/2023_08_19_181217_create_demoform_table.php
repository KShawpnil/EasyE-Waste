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
        Schema::create('demoform', function (Blueprint $table) {
            $table->id('dform_id');
            $table->string('cdr');

            $table->integer('checkbox2');
            $table->integer('checkbox21');
            $table->integer('checkbox22');
            $table->integer('checkbox23');
            $table->integer('checkbox24');

            $table->integer('checkbox3');
            $table->integer('checkbox31');
            $table->integer('checkbox32');
            $table->integer('checkbox33');
            $table->integer('checkbox34');

            $table->integer('checkbox4');
            $table->integer('checkbox41');
            $table->integer('checkbox42');
            $table->integer('checkbox43');
            $table->integer('checkbox44');

            $table->integer('checkbox5');
            $table->integer('checkbox51');
            $table->integer('checkbox52');
            $table->integer('checkbox53');
            $table->integer('checkbox54');

            $table->integer('checkbox6');
            $table->integer('checkbox61');
            $table->integer('checkbox62');
            $table->integer('checkbox63');
            $table->integer('checkbox64');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demoform');
    }
};
