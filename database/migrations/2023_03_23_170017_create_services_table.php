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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('min_value', 10, 2);
            $table->integer('time_amount');
            $table->decimal('commission_percentage');

            $table->decimal('bedroom_value', 10, 2);
            $table->integer('bedroom_spent_time');

            $table->decimal('living_room_value', 10, 2);
            $table->integer('living_room_spent_time');

            $table->decimal('bathroom_value', 10, 2);
            $table->integer('bathroom_spent_time');

            $table->decimal('kitchen_value', 10, 2);
            $table->integer('kitchen_spent_time');

            $table->decimal('yard_value', 10, 2);
            $table->integer('yard_spent_time');

            $table->decimal('other_room_type_value', 10, 2);
            $table->integer('other_room_type_spent_time');

            $table->string('icon');
            $table->integer('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
