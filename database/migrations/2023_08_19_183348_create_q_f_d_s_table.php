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
        Schema::create('q_f_d_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('cr1');
            $table->integer('crrank1');
            $table->integer('wastemanage1');
            $table->integer('wastemini1');
            $table->integer('wastecollect1');
            $table->integer('produra1');

            $table->string('cr2');
            $table->integer('crrank2');
            $table->integer('wastemanage2');
            $table->integer('wastemini2');
            $table->integer('wastecollect2');
            $table->integer('produra2');

            $table->string('cr3');
            $table->integer('crrank3');
            $table->integer('wastemanage3');
            $table->integer('wastemini3');
            $table->integer('wastecollect3');
            $table->integer('produra3');

            $table->string('cr4');
            $table->integer('crrank4');
            $table->integer('wastemanage4');
            $table->integer('wastemini4');
            $table->integer('wastecollect4');
            $table->integer('produra4');

            $table->string('cr5');
            $table->integer('crrank5');
            $table->integer('wastemanage5');
            $table->integer('wastemini5');
            $table->integer('wastecollect5');
            $table->integer('produra5');
            $table->index('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_f_d_s');
    }
};
