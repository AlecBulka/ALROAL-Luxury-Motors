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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('horsepower');
            $table->integer('torque');
            $table->decimal('consumption', 12, 2);
            $table->integer('topSpeed');
            $table->decimal('acceleration', 12, 2);
            $table->string('engine');
            $table->string('wheels');
            $table->string('tires');
            $table->string('driveTrain');
            $table->string('gearbox');
            $table->string('exterior');
            $table->string('interior');
            $table->integer('kilometers');
            $table->decimal('price', 12, 2);
            $table->foreignId('carmodel_id');
            $table->foreignId('carbrand_id');
            $table->integer('year');
            $table->boolean('isSold')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
