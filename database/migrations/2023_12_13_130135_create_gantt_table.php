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
        Schema::create('gantt', function (Blueprint $table) {
            $table->id();
            $table->text('taskName');
            $table->text('taskDescription');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('duration');
            $table->decimal('percentComplete');
            $table->text('assignedPerson');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gantts');
    }
};
