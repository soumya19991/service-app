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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned()->nullable();
             $table->bigInteger('service_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('pin_code')->nullable();
            $table->bigInteger('transfer_at')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('transfer_at')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
