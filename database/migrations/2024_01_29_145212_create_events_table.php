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
        Schema::create('events', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',1000);
            $table->text('description');
            $table->text('location');
            $table->date('date');
            $table->time('hour');
            $table->enum('type',['official', 'exhibition', 'charity'])->default('official');
            $table->text('tags');
            $table->boolean('visible')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
