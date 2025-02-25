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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('date_in');
            $table->date('date_out');
            $table->string('keyNumber');
            $table->string('note');
            $table->timestamps();
        });
    }
};
